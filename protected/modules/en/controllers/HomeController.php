<?php

class HomeController extends AdminController
{
	public function actionIndex()
	{
		$this->render('index');
//        $layout='/layouts/column1';
	}
}