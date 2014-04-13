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
<<<<<<< HEAD
		//$cs->registerScriptFile($baseUrl.'/js/GobsObject.js');
=======
		// $cs->registerScriptFile($baseUrl.'/js/GobsObject.js');
>>>>>>> 86adc93c336829f53795d1ca45a2ec63f3d57479

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

	public function padZeros($value){
		$r = $value;
		
		if($value < 10){
			$r = '00'.$r;
		}else{
			if($value < 100){
				$r = '0'.$r;
			}
		}

		return $r;
	}
	
	public function actionStoreImage(){
	
		$input = 	$_GET['url'];
		$dir = 		"videos/" . $_GET['dir'];
		$number = 	$_GET['num'];
		
		if( ! file_exists($dir) ){
			mkdir($dir);  
		}
		
		$id = $this->padZeros($number);
		
		$output = $dir .'/i' . $id . '.jpg';
		if( ! file_exists($output) ){
			file_put_contents($output, file_get_contents($input));	
		}
		
		/*echo CJSON::encode(array(
            'result' => $id
        ));*/
	}

	public function actionGenerateVideo(){
		$dir = 	'videos/' . $_GET['dir'] . '/';
		
		if( ! file_exists($dir . $_GET['dir'] . '.gif') ){
			$command = 'C:/Users/cavpollo/Documents/GitHub/Time-Earth/FFMPEG/bin/ffmpeg.exe -r 2 -i ' . $dir . 'i%03d.jpg  -r 2 ' . $dir . $_GET['dir'] . '.gif';
			//$data = exec($instr, $output, $return);
			//shell_exec("cd FFMPEG/bin 2>&1" );
			$result = shell_exec( $command." 2>&1" );
			//printf($data);
		}
		
		echo CJSON::encode(array(
            'result' => $result
        ));
	}

}