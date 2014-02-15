<?php

class DefaultController extends AdminController
{
	public function actionIndex()
	{
		$this->render('index');
//        $layout='/layouts/column1';
	}


    public function actionTest()
    {
        $this->render('test');

    }
}