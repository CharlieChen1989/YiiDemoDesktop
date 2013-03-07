<?php

class LabController extends Controller
{
	public function actionIndex()
	{
           //打开记事本     
//            pclose(popen('notepad.exe', 'r'));
            //打开netbeans IDE
//            pclose(popen('C:\Program Files\NetBeans 7.1.1\bin\netbeans.exe', 'r'));
            

            $this->render('index');
	}
        
        
	
}