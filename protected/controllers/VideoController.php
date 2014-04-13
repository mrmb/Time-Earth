<?php

class VideoController extends Controller
{
	

	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */

	public $layout='//layouts/internal2';
	

	public function actionVideo(){
		$this->render('video');
	}

	public function actionIndex(){
		// $baseUrl = Yii::app()->baseUrl; 
		// $cs = Yii::app()->getClientScript();
		// $cs->registerScriptFile($baseUrl.'/js/map.js');


		$this->render('index');
	}

	public function actionNew(){

		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		$cs->registerScriptFile($baseUrl.'/js/items.js');

		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		$cs->registerCssFile($baseUrl.'/css/imagegrid.css');
		$cs->registerCssFile($baseUrl.'/css/loading.css');

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
		$format = 	$_GET['format'];
		
		if( ! file_exists($dir) ){
			mkdir($dir);  
		}
		
		$id = $this->padZeros($number);
		
		$output = $dir .'/i' . $id . '.' . $format;


		if( ! file_exists($output) ){
			file_put_contents($output, file_get_contents($input));
			/*if($format == 'png'){
				$command = 'C:/Users/cavpollo/Documents/GitHub/Time-Earth/FFMPEG/bin/ffmpeg.exe -r 2 -i videos/blank.png -vf \"movie=' . $dir . 'i%03d.' . $format . ' [watermark]; [in][watermark] overlay=0:0 [out]\" -r 2 ' . $dir . $_GET['dir'] . '.gif';
			}*/
		}
		
		echo CJSON::encode(array(
            'result' => 'done'
        ));
	}

	public function actionGenerateVideo(){
		$dir = 	'videos/' . $_GET['dir'] . '/';
		$format = 	$_GET['format'];
		$result = null ;
		
		if( ! file_exists($dir . $_GET['dir'] . '.gif') ){
			$command = 'C:/Users/cavpollo/Documents/GitHub/Time-Earth/FFMPEG/bin/ffmpeg.exe -r 2 -i ' . $dir . 'i%03d.' . $format . ' -pix_fmt rgb24 -r 2 ' . $dir . $_GET['dir'] . '.gif';
			//$data = exec($instr, $output, $return);
			//shell_exec("cd FFMPEG/bin 2>&1" );
			$result = shell_exec( $command." 2>&1" );
			//printf($data);
		}
		
		echo CJSON::encode(array(
            'result' => $result 
        ));
	}


	public function actionSocial(){

		$baseUrl = Yii::app()->baseUrl; 
		$cs = Yii::app()->getClientScript();
		$cs->registerScriptFile($baseUrl.'/js/main2.js');

		$this->render('social');
	}

	public function actionCheckImages(){
	
		$dir = 	'videos/' . $_GET['folder'] . '/';
		$itemN = 		$_GET['itemN'];
		$format = 		$_GET['format'];
		$value = true;
		
		if( file_exists($dir) ){
			for($i =0; $i < $itemN; $i++){
				$id = $this->padZeros($i);
				if(!file_exists($dir .'/i' . $id . '.' . $format) ){
					$value = false;
					break;
				}
			}
		}

		echo CJSON::encode(array(
			'result' => $value
		));
		
		/*echo CJSON::encode(array(
            'result' => $id
        ));*/
	}
}