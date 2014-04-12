<?php

class VideoController extends Controller
{
	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public $layout='//layouts/internal2';
	


	public function actionIndex(){
		// $baseUrl = Yii::app()->baseUrl; 
		// $cs = Yii::app()->getClientScript();
		// $cs->registerScriptFile($baseUrl.'/js/map.js');


		$this->render('index');
	}

	public function actionNew(){
		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile($baseUrl.'/css/imagegrid.css');

// imagegrid
		$this->render('new');
	}
}