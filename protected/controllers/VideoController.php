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
		$cs->registerScriptFile($baseUrl.'/js/GobsObject.js');

// imagegrid
		$this->render('new');
	}

	public function actionSave(){
		
		// Trying to execute the command line 
		$data_cmd = exec("ls") ;

		echo CJSON::encode(array(
            'result' => $data_cmd 
        ));
	}

	public function actionStoreImage(){
		$input = 	$_GET['url'];
		$dir = 		$_GET['dir'];
		$number = 	$_GET['num'];

		$output = 'videos/'. $dir .'/i' . $number . '.jpg';
		printf( $output );

		if( ! file_exists($output) ){
			file_put_contents($output, file_get_contents($input));	
		}
	}

	public function actionMkDir(){
		$dir  = "videos/" . $_GET['dir'];
		
		if( ! file_exists($dir) ){
			mkdir($dir);  
		}
	}




}