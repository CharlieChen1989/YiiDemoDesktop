<?php

class OSController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}
        
        public function actionLaunchMac(){
            $this->render('macDesktop');
        }
        public function actionLaunchLinux(){
            $this->render('linuxDesktop');
        }
        
        public function actionStartWinApp(){
            //
            $appPath = 'C:\Program Files\NetBeans 7.1.1\bin\netbeans.exe';            
//            //打开netbeans IDE
            pclose(popen($appPath, 'r'));
            $url = Yii::app()->request->urlReferrer;
            $this->redirect($url);      
            
        }
}