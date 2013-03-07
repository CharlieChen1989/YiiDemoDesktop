<?php

class WindowsController extends Controller
{
	public function actionIndex()
	{
		$this->renderPartial('index');
	}
        
        public function actionGeneralWindows()
	{
            $this->layout = 'popup';
            $this->render('popupWindows');
	}      
        

}