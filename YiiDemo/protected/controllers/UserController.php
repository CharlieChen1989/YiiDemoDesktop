<?php

class UserController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
                // 'accessControl', // perform access control for CRUD operations
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'setLangMenu', 'dynamicState','dynamicCity','dynamicCode'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new UserProfileTbl('register');

        // Uncomment the following line if AJAX validation is needed
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['UserProfileTbl'])) {
            $model->attributes = $_POST['UserProfileTbl'];
            $model->password = md5($_POST['UserProfileTbl']['password']);
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $countryList = CountryCodesTbl::model()->getCountryList();
        $this->render('create', array(
            'model' => $model, 'countryList' => $countryList,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);       
        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);
        
        if (isset($_POST['UserProfileTbl'])) {
            $model->attributes = $_POST['UserProfileTbl'];
            $model->password = md5($_POST['UserProfileTbl']['password']);
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }
        $countryList = CountryCodesTbl::model()->getCountryList();
        $this->render('update', array(
            'model' => $model, 'countryList' => $countryList,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        if (Yii::app()->request->isPostRequest) {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        }
        else
            throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('UserProfileTbl');     
        $this->renderPartial('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new UserProfileTbl('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['UserProfileTbl']))
            $model->attributes = $_GET['UserProfileTbl'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = UserProfileTbl::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'user-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function actionSetLangMenu() {
        $member = UserProfileTbl::model()->findByPk($this->getCurrentUserInfo('userID'));
        $member->scenario = 'setting';

        if (isset($_POST['ajax']) && ($_POST['ajax'] === 'setLang')) {
            echo CActiveForm::validate($member);
            Yii::app()->end();
        }

        if (isset($_POST['UserProfileTbl'])) {
            $form = $_POST['UserProfileTbl'];
            if ($form['prefLang'] == '-1') {
                $member->addError('prefLang', Yii::t('messages', 'Please choose your preferred language'));
            } else {
                $member->prefLang = $form['prefLang'];
                //$member->dttmUpdated = date('Y-m-d');

                if ($member->save(false)) {
                    Yii::app()->language = $member->prefLang;
                    setcookie("setlang", $member->prefLang, null, '/');
                    //$loginform = new LoginForm;
                    $this->setCurrentUserInfo(array('prefLang' => $member->prefLang)); //, 'memberClassName' => $loginform->getMemberClassName($member->member_class), 'memberRankName' => $loginform->getRankName($member->rank)));
                    Yii::app()->user->setFlash('notice', Yii::t('message', 'Save language is successful.'));
                }
            }
        }

        $this->redirect(Yii::app()->request->urlReferrer);
    }

    public function actionDynamicState() {
        $old = $_POST["old"];
        $nid = $_POST["stateID"];
        $only_china = false;
        $model = StateCodesTbl::model()->getStateList($nid, $only_china);
        echo CHtml::tag('option', array('value' => ''), Yii::t('view_Member', 'Please choose your Province'), true);
        foreach ($model as $value => $name) {
            if ($old == $value) {
                echo CHtml::tag('option', array('value' => $value, 'selected' => 1), CHtml::encode($name), true);
            } else {
                echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
            }
        }
    }

    public function actionDynamicCity() {
        $pid = $_POST["stateID"];
        $model = CityCodesTbl::model()->getCityList($pid);
        echo CHtml::tag('option', array('value' => ''), Yii::t('view_Member', 'Please choose your City'), true);
        foreach ($model as $value => $name) {
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($name), true);
        }
    }
       public function actionDynamicCode() {
        $cid = $_POST["cityID"];
        $model = CityCodesTbl::model()->findByPk($cid);
        echo Yii::t('user','Post Code').':'.$model->postcode."   ".Yii::t('user','Area Code').':'.$model->area_code;       
    }

}
