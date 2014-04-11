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

	
    <header>
    <div class="sticky-wrapper" style="height: 60px;"><div class="sticky-nav">
        <a id="mobile-nav" class="menu-nav" href="http://themes.alessioatzeni.com/html/brushed/#menu-nav"></a>
        
        <nav id="menu">
            <ul id="menu-nav2" style="">
                <li class="current"><a href="#">Home</a></li>
                <li class=""><a href="<?php  $this->createUrl('/video/index.php'); ?>">Videos</a></li>
                <li class=""><a href="#work">Algo</a></li>
                <li class=""><a href="http://www.google.com">Topics</a></li>
                <li><a href="#" class="external">About</a></li>
                
                <?php echo CHtml::link('Link Text',array('/video/index')); ?>

                
                <?php 
                // $this->widget('zii.widgets.CMenu',array(
				// 'items'=>array(
				// array('label'=>'Home', 'url'=>array('/site/index')),
				// array('label'=>'Video', 'url'=>array('/video/index')),
				// array('label'=>'Contact', 'url'=>array('/site/contact')),
				// array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				// array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			         // ),
		           ?>
            </ul>
        </nav>
        
    </div></div>
    </header>

    <div class="slider-text">
    	<div id="slidecaption2"><div class="slide-content">Time Earth</div></div>
    </div>   
	
	<div class="control-nav">



        <a id="prevslide" class="load-item" style="display: inline-block;"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item" style="display: inline-block; opacity: 1;"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list" style="margin-left: -42px;"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>




<!-- Our Work Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Top Videos</h2>
                    <h3 class="title-description">  <a href="http://themes.alessioatzeni.com/html/brushed/#"> Earth </a> Videos </h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">Top By</li>
                        <li><a href="http://themes.alessioatzeni.com/html/brushed/#filter" data-option-value="*" class="selected">All Projects</a></li>
                        <li><a href="http://themes.alessioatzeni.com/html/brushed/#filter" data-option-value=".design">Facebook</a></li>
                        <li><a href="http://themes.alessioatzeni.com/html/brushed/#filter" data-option-value=".photography">Twitter</a></li>
                        <li><a href="http://themes.alessioatzeni.com/html/brushed/#filter" data-option-value=".video">Voted</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects" class="isotope" style="position: relative; overflow: hidden; height: 657px;">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 0px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The City" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-01-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-01.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 0px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-02-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-02.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 0px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-03-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-03.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 video isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 219px, 0px);">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/51460511">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-08.jpg" alt="Video">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 219px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-04-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-04.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 photography isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 219px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Clouds" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-05-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-05.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 video isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(0px, 438px, 0px);">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox-media" data-fancybox-group="video" title="Video Content From Vimeo" href="http://vimeo.com/50834315">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-09.jpg" alt="Video">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(300px, 438px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Dark" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-06-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-06.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 design isotope-item" style="position: absolute; left: 0px; top: 0px; -webkit-transform: translate3d(600px, 438px, 0px);">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Beach" href="http://themes.alessioatzeni.com/html/brushed/_include/img/work/full/image-07-full.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image-07.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- End Our Work Section -->

<!-- Footer -->
<footer>
	<p class="credits"> 2014 Nasa Challenge. 
        <a href="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/Brushed   Responsive One Page Template.html" title="Brushed | Responsive One Page Template">
            Time Earth </a> by 
        <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Marvin and CavPollo</a>
    </p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="http://themes.alessioatzeni.com/html/brushed/#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->

<!-- Js -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/modernizr.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script> <!-- jQuery Core -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints.js"></script> <!-- WayPoints -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.tweet.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/plugins.js"></script> 
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/main.js"></script> 
<!-- End Js -->





<ul id="supersized" class="quality" style="visibility: visible;">
	<li class="slide-0" style="visibility: visible; opacity: 1;">
		<a target="_blank">
			<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image01.jpg" style="width: 1409px; height: 944.0300000000001px; left: 0px; top: -106.5px;">
		</a>
	</li>
	<li class="slide-1 prevslide" style="visibility: visible; opacity: 1;">
		<a target="_blank">
			<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image02.jpg" style="width: 1409px; left: 0px; top: -134.5px; height: 1000.39px;">
		</a>
	</li>
	<li class="slide-2 activeslide" style="visibility: visible; opacity: 1;">
		<a target="_blank">
			<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image03.jpg" style="width: 1409px; height: 944.0300000000001px; left: 0px; top: -106.5px;">
		</a>
	</li>
	<li class="slide-3" style="visibility: visible; opacity: 1;">
		<a target="_blank">
			<img src="<?Php echo YIi::app()->RequEst->Baseurl; ?>/images/image04.jpg" style="width: 1409px; left: 0px; top: -170px; height: 1070.84px;">
		</a>
	</li>
</ul>

</body>
</html>

