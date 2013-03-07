<?php

class BlogController extends Controller
{
	public function actionIndex()
	{
            $dataprovider = new CActiveDataProvider('Messages');
	    $this->render('index',array('dataProvider' => $dataprovider,));
	}
        /**
         * @method 新建一篇博文
         *  
         */
        public function actionCreateBlog() {
        $model = new Messages;
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'msg-add') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['Messages'])) {
            $model->attributes = $_POST['Messages'];
            $model->create_date = date('Y-m-d H:i:s');
            $model->update_date = date('Y-m-d H:i:s');
            $model->author_ID = $this->getCurrentUserInfo('userID');
            if ($model->save()) {
                $this->redirect('/message/msgshow?msg_ID=' . $model->message_ID);
                Yii::app()->user->setFlash('notice', 'Save successfully !');
            }
        }
        $this->renderPartial('create', array('model' => $model));
    }

    public function actionPushBlog()
    {
        $this->renderPartial('blogPush');
    }
    
     public function actionBlogList() {
        $dataprovider = new CActiveDataProvider('Messages',array('pagination'=>array('pageSize'=>20)));
        $this->renderPartial('msglist', array('dataProvider' => $dataprovider,));
    }
    /*
     * 查看某篇文章
     */
     public function actionView($id) {
        $this->layout = '//layouts/column3';//右侧栏列出文章标题
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }
    
    public function actionEditMsg(){
        $message_ID=$_GET['id'];
        //$this->pr($message_ID, true);
        $model = Messages::model()->findByPk($message_ID);
        if(isset($_POST['Messages'])){
            $model->attributes = $_POST['Messages'];
            $model->update_date= date('Y-m-d H:i:s');
            if($model->save()){
                Yii::app()->user->setFlash('notice', 'Update successfully !');
                $this->redirect('/message/msgshow?msg_ID=' . $model->message_ID);                
            }
            
        }
        $this->render('editmsg',array('model'=>$model));    
        
    }
    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
        $model = Messages::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    
    public function actionMsgShow($msg_ID){
        $this->layout = '//layouts/column3';//右侧栏列出文章标题
        $modle = Messages::model()->findByPk($msg_ID);        
        if($modle!==null){
            $this->render('view',array(
                'model'=>$modle,
              ));            
        }else{
            throw new CHttpException(404, 'The requested page does not exist.');
        }
              
        
    }
    
}