<?php

class VideoController extends Controller
{
	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public $layout='//layouts/internal';
	
	public function actionIndex()
	{
		$this->render('index');
	}

}