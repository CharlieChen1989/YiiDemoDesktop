<?php

class SiteController extends Controller {

    /**
     * Declares class-based actions.
     */
    public function actions() {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex() {
        
//        $this->redirect('/xml/createXml'); 
        
        $bgImageUrl= $this->getCurrentUserInfo('bgPicUrl');        
        $this->render('index',array('bgImageUrl'=>$bgImageUrl));
//      $this->renderPartial('androidDock');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError() {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact() {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $headers = "From: {$model->email}\r\nReply-To: {$model->email}";
                if (mail(Yii::app()->params['adminEmail'], $model->subject, $model->body, $headers)) {
                    Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                } else {
                    Yii::app()->user->setFlash('contact', 'Sending Failed !');
                }
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin() {
        $this->_setLang();
        $model = new LoginForm;
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'xml-creat-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->authenticate())
                $this->redirect('/site/index');
        }
        // display the login form
        $this->renderPartial('login', array('model' => $model));
    }

    public function _setLang() {
        $cookie = Yii::app()->request->getCookies();
        if (isset($cookie['setlang'])) {
            return;
        }
        $browselang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        //$this->pr($browselang,true);
        $language = 'en';
        if (stripos($browselang, 'zh_cn') !== false) {
            $language = 'zh_cn';
        }
        if (stripos($browselang, 'zh_tw') !== false) {
            $language = 'zh_tw';
        }
        Yii::app()->language = $language;
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout() {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

}