<?php /* @var $this Controller */ ?>
<html !DOCTYPE>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title>Time Earth</title>

	<meta name="description" content=""> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="MobileOptimized" content="320">   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<!-- <link href="http://themes.alessioatzeni.com/html/brushed/_include/css/supersized.css" rel="stylesheet"> -->
<!-- <link href="http://themes.alessioatzeni.com/html/brushed/_include/css/supersized.shutter.css" rel="stylesheet"> -->

<!-- FancyBox -->
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<!-- <link href="http://themes.alessioatzeni.com/html/brushed/_include/css/shortcodes.css" rel="stylesheet"> -->

<!-- Responsive -->
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/supersized.css" rel="stylesheet">
<link href="http://themes.alessioatzeni.com/html/brushed/_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<!-- <link href="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/css" rel="stylesheet" type="text/css"> -->

<!-- Modernizr -->
<!-- <script type="text/javascript" async="" src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/ga.js"></script> -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/placeholder.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>


<!-- <link rel="stylesheet" type="text/css" href="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/banner.css"></head> -->
</head>

<body style="display: block;">

	<div id="home-slider">	
    <div class="overlay"></div>

    <header>
    <div class="sticky-wrapper" style="height: 60px;"><div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="http://themes.alessioatzeni.com/html/brushed/#menu-nav"></a>
        
        <nav id="menu">
            <ul id="menu-nav" style="">
                <?php 
                $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'Videos', 'url'=>array('/video/index')),
				array('label'=>'Best Videos', 'url'=>array('/site/contact')),
				array('label'=>'Best Topics', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			         ),
				));
		       ?>
            </ul>
        </nav>
        
    </div></div>
    </header>

    <?php echo $content; ?>
</body>
</html>

