<!DOCTYPE html>
<html>
<head>
	<title>adloc8tor</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    <script src="//code.jquery.com/jquery-latest.min.js"></script>
	<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
    <!-- Facebook Pixel Code -->
	<script>
		!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
		n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
		n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
		t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
		document,'script','//connect.facebook.net/en_US/fbevents.js');
		
		fbq('init', '1708076819404726');
		fbq('track', "PageView");</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=1708076819404726&ev=PageView&noscript=1"
		/></noscript>
	<!-- End Facebook Pixel Code -->
	<script>
  		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
	
		ga('create', 'UA-69718538-1', 'auto');
		ga('send', 'pageview');

	</script>

    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.js + jssor.slider.js) -->
    <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
    <script type='text/javascript' src='js/jquery.js'></script>
	<script type='text/javascript' src='js/jquery.simplemodal.js'></script>
	<script>
        jQuery(document).ready(function ($) {

            var _CaptionTransitions = [];
            _CaptionTransitions["L"] = { $Duration: 900, x: 0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["R"] = { $Duration: 900, x: -0.6, $Easing: { $Left: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["T"] = { $Duration: 900, y: 0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["B"] = { $Duration: 900, y: -0.6, $Easing: { $Top: $JssorEasing$.$EaseInOutSine }, $Opacity: 2 };
            _CaptionTransitions["ZMF|10"] = { $Duration: 900, $Zoom: 11, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 };
            _CaptionTransitions["RTT|10"] = { $Duration: 900, $Zoom: 11, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseOutQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInExpo }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["RTT|2"] = { $Duration: 900, $Zoom: 3, $Rotate: 1, $Easing: { $Zoom: $JssorEasing$.$EaseInQuad, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInQuad }, $Opacity: 2, $Round: { $Rotate: 0.5} };
            _CaptionTransitions["RTTL|BR"] = { $Duration: 900, x: -0.6, y: -0.6, $Zoom: 11, $Rotate: 1, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Zoom: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear, $Rotate: $JssorEasing$.$EaseInCubic }, $Opacity: 2, $Round: { $Rotate: 0.8} };
            _CaptionTransitions["CLIP|LR"] = { $Duration: 900, $Clip: 15, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic }, $Opacity: 2 };
            _CaptionTransitions["MCLIP|L"] = { $Duration: 900, $Clip: 1, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };
            _CaptionTransitions["MCLIP|R"] = { $Duration: 900, $Clip: 2, $Move: true, $Easing: { $Clip: $JssorEasing$.$EaseInOutCubic} };

            var options = {
                $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 4000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideEasing: $JssorEasing$.$EaseOutQuint,          //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
                $SlideDuration: 800,                               //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
                $MinDragOffsetToSlide: 20,                          //[Optional] Minimum drag offset to trigger slide , default value is 20
                //$SlideWidth: 600,                                 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
                //$SlideHeight: 300,                                //[Optional] Height of every slide in pixels, default value is height of 'slides' container
                $SlideSpacing: 0, 					                //[Optional] Space between each slide in pixels, default value is 0
                $DisplayPieces: 1,                                  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
                $ParkingPosition: 0,                                //[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
                $UISearchMode: 1,                                   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
                $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
                $DragOrientation: 1,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

                $CaptionSliderOptions: {                            //[Optional] Options which specifies how to animate caption
                    $Class: $JssorCaptionSlider$,                   //[Required] Class to create instance to animate caption
                    $CaptionTransitions: _CaptionTransitions,       //[Required] An array of caption transitions to play caption, see caption transition section at jssor slideshow transition builder
                    $PlayInMode: 1,                                 //[Optional] 0 None (no play), 1 Chain (goes after main slide), 3 Chain Flatten (goes after main slide and flatten all caption animations), default value is 1
                    $PlayOutMode: 3                                 //[Optional] 0 None (no play), 1 Chain (goes before main slide), 3 Chain Flatten (goes before main slide and flatten all caption animations), default value is 1
                },

                $BulletNavigatorOptions: {                          //[Optional] Options to specify and enable navigator or not
                    $Class: $JssorBulletNavigator$,                 //[Required] Class to create navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 1,                                 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1,                                      //[Optional] Steps to go for each navigation request, default value is 1
                    $Lanes: 1,                                      //[Optional] Specify lanes to arrange items, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each item in pixel, default value is 0
                    $SpacingY: 8,                                   //[Optional] Vertical space between each item in pixel, default value is 0
                    $Orientation: 1                                 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
                },

                $ArrowNavigatorOptions: {                           //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,                  //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                    $AutoCenter: 2,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                    $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);

            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var bodyWidth = document.body.clientWidth;
                if (bodyWidth)
                    jssor_slider1.$ScaleWidth(Math.min(bodyWidth, 1920));
                else
                    window.setTimeout(ScaleSlider, 30);
            }

            ScaleSlider();

            if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                $(window).bind('resize', ScaleSlider);
            }


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <link type="text/css"
		href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/jquery.youtubepopup.min.js"></script>
    
    <script type="text/javascript" src="http://codepen.io/matthewhirsch/pen/OPwQRL.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <script type="text/javascript">
		$(function () {
			$("a.youtube").YouTubePopup({ autoplay: 0 });
		});
    </script>
    
	
	<script type="text/javascript">
    (function () {
        detectLandscape();
        $(window).resize(function() {
            detectLandscape("#mainView");
        });


        function detectLandscape(mainDiv) {
            if (screen.width > screen.height) {
                $(mainDiv).addClass("landscape_mode");
            }
            else {
                $(mainDiv).removeClass("landscape_mode");
            }
        }
    })();
</script>

<!-- Start VideoLightBox.com HEAD section -->
		<link rel="stylesheet" href="index_videolb/videolightbox.css" type="text/css" />
		
			<link rel="stylesheet" type="text/css" href="index_videolb/overlay-minimal.css"/>
			<script src="index_videolb/jquery.js" type="text/javascript"></script>
			<script src="index_videolb/swfobject.js" type="text/javascript"></script>
		<!-- End VideoLightBox.com HEAD section -->
</head>
<body>
	<nav class="clearfix">
    	<img src="images/logo.png" alt="Logo" class="logo" />
		<ul class="clearfix">
			<li><a href="index.php" class="active">HOME</a></li>
			<li><a href="#about">ABOUT</a></li>
			<li><a href="#services">DISRUPTIVE SOLUTIONS</a></li>
            <li><a href="#industries">INDUSTRIES</a></li>
            
			<li><a href="#news">NEWS</a></li>
			<li><a href="#contact">CONTACT US</a></li>	
            <li><a href="">test</a></li>
		</ul>
		<a href="#" id="pull">MENU</a>
	</nav>
    <div style="position:absolute; width: 100%; height: 100px; background-color: #282827;">
    </div>
    <div class="fullpage">
    <!--SLIDER BEGIN-->
    <div id="slider1_container" style="position: relative; margin: 0 auto;
        top: 0px; left: 0px; width: 1300px; height: 600px; overflow: hidden;">
        <!-- Loading Screen -->
<div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
            <div style="position: absolute; display: block; background: url(iamges/loading.gif) no-repeat center center;
                top: 0px; left: 0px; width: 100%; height: 100%;">
            </div>
        </div>
        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1300px;
            height: 600px; overflow: hidden;">
            <div>
                <img u="image" src="images/slide1.jpg" />
                
                <div style="position: absolute; width: 100%;margin-top: 100px;">
                	<center>
                        		<!--<img src="images/biglogo.png" alt="Adlocator" style="margin: 0 auto; width: 30%;"/>
                                <p style="font-size:12px; color: #fff; text-align:right; margin-top: 20%; margin-right: 10px;">"It's not the strongest of the species that survive,<br />nor the most intelligent, but the one most<br />responsive to change"<br /><br />- Charles Darwin</p>-->
            </center>
                </div>
            </div>
            <div>
                <img u="image" src="images/slide2.jpg" />
                <div style="position: absolute; width: 100%;margin-top: 100px;">
                	
                        		<!--<img src="images/biglogo.png" alt="Adlocator" style="width: 20%; padding-left: 79%; margin-top: -100px;"/><br /><br /><br /><br /><br /><br />
                                <div class="disruptivebutton"><a href="revel.php">DISRUPTIVE MARKETING</a></div><br /><br />
                                <div class="shoppingbutton"><a href="http://shopcloud.com">SMART BUTTON & NAVIGATION</a></div><br /><br />
                                <div class="webbutton"><a href="http://mihost.co.za">WEB HOSTING</a></div>
                                <p style="font-size:12px; color: #fff; text-align:right; margin-top: 15%; margin-right: 10px;">"The true sign of intelligence is not knowledge,<br />
                                but imagination"<br /><br />- Albert Einstein</p>-->
                </div>
            </div>
            <div>
                <img u="image" src="images/slide3.jpg" />
                <div style="position: absolute; width: 100%;margin-top: 100px;">
                	
                    			<!--<div class="revelbutton"><a class="youtube" href="http://www.youtube.com/watch?v=Xs7-dh3V0Q0" title="REVEL DIGITAL" style="text-decoration: none; color: #000;">REVEL DIGITAL</a></div>
                                <div class="shopbutton"><a class="youtube" href="http://www.youtube.com/watch?v=Ku3Ub_H5uo0" title="SHOP CLOUD" style="text-decoration: none; color: #000;">SHOP CLOUD</a></div>
                                <div class="insidebutton"><a class="youtube" href="http://www.youtube.com/watch?v=1hB-BYzLkbw" title="INSIDE" style="text-decoration: none; color: #000;">INSIDE</a></div>
                                <div style='display:none'>
									<img src='img/contact/loading.gif' alt='' />
								</div>
                                <center>
                        		<img src="images/biglogo.png" alt="Adlocator" style="margin-top: -8%; margin-left: 26%; width: 22%; position:absolute;"/>
            					</center>-->
                </div>
            </div>
            <span u="arrowleft" class="jssora21l" style="width: 55px; height: 55px; top: 123px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora21r" style="width: 55px; height: 55px; top: 123px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        <a style="display: none" href="http://www.jssor.com">image carousel</a>
    </div>
    </div>
    <!--SLIDER END-->
    <center>
    <div id="about"></div>
    <br /><br /><br />
    <p class="aboutus-headings">ABOUT US</p>
    </center>
    
    <div class="page">
    <center><img src="images/line.png" style="width: 100%; margin-left: 0;" /></center>
    	<p class="aboutus-headings">About Us</p>
        <p>Adloc8tor is an integrated disruptive solutions company that provides tailor made marketing solutions through
		leading innovative technologies at competitive prices, aimed at delivering measurable return on investment
		and is redefining the digital marketing industry.</p>
        <p>Adloc8tor identifies an ethos focused on innovation and clientele satisfaction, through a systemic thinking
		process that enables combined individualism to generate, develop and implement holistic radical and
		credible disruptive solutions that will not only tick the boxes but also re-define the industry of disruptive
		marketing and branding.</p>
        <p class="aboutus-headings">Mission</p>
        <p>We strive to maintain healthy customer relationships whilst developing sustainable disruptive marketing
		solutions that encompass simplicity and innovation to push brands to reach their highest potential.</p>
        <!--<div style="margin-top: 50px;border-bottom:2px solid; width: 100%;"></div>-->
        <p class="aboutus-headings">Our Team</p>
        <p>With over half a century of expertise and dedicated experience within the technology and emerging market
		sectors, Adloc8tor has a core team of dedicated software developers, field service teams, R & D teams,
		Marketing and Design experts with the necessary experience and skill set to ensure the effectiveness of your
		next advertising campaign.</p>
        <p>With 25 years' experience in Wireless communications solutions, Geo fencing and content tracking
		technologies and software, the unique blend of convergence technologies created by Adloc8tor provides
		an innovative and progressive approach to media placement and advertising with a core focus on the
		quantifying of these results.</p><br /><br />
    </div>
   
   
    <div id="services"></div>
    <div class="disruptive" style="background-image: url(images/disruptive.jpg); width: 100%; margin-top: 60px;margin-bottom: 160px; background-size: cover; background-repeat:no-repeat;">
    <div class="page" >
    <br />
    	<center><p class="aboutus-headings" style="color: #FFF;">DISRUPTIVE SOLUTIONS</p></center>
        <center><img src="images/linewhite.png" style="width: 100%;" /></center>
        <p style="color: #fff;font-size:24px;" >Adloc8tor offers multiple disruptive marketing solutions that cater for  	 	 			various business needs, creating true differentiation through advertising, consumer engagement, audience analytics, branding and design.</p>
                
    </div></div>
    
    <div id="industries"></div>
    <div class="page" >
    	<center><p class="aboutus-headings" style="margin-top:-8%;">INDUSTRIES</p><img src="images/line.png" style="width: 100%;" /></center>
        <center><div class="mainbox">
        
        
        <p style="text-align: left; font-size:22px;">Watch how Adloc8tor can help your business!</p>
        <br />
        <div class="videogallery" style="width: 100%;">
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/financial.mp4" title="Financial" style="width: 30%; padding-right: 10px;"><img src="index_videolb/thumbnails/financial.png" alt="Financial" style="width: 100%;" /><span class="font">BANKING</span></a>
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/car_dealership_2.mp4" title="Car Dealership_2" style="width: 30%; padding-right: 10px;"><img src="index_videolb/thumbnails/car_dealership_2.png" alt="Car Dealership_2" style="width: 100%;" /><span class="font">CAR DEALERSHIP</span></a>
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/higher_education.mp4" title="Higher Education" style="width: 30%;"><img src="index_videolb/thumbnails/higher_education.png" alt="Higher Education" style="width: 100%;" /><span class="font">HIGHER EDUCATION</span></a>
        <br />
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/hospitality.mp4" title="Hospitality" style="width: 30%; padding-right: 10px;"><img src="index_videolb/thumbnails/hospitality.png" alt="Hospitality" style="width: 100%;" /><span class="font">HOSPITALITY</span></a>
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/medical.mp4" title="Medical" style="width: 30%; padding-right: 10px;"><img src="index_videolb/thumbnails/medical.png" alt="Medical" style="width: 100%;" /><span class="font">MEDICAL</span></a>
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/petrol_station.mp4" title="Petrol Station" style="width: 30%;"><img src="index_videolb/thumbnails/petrol_station.png" alt="Petrol Station" style="width: 100%;" /><span class="font">PETROL STATION</span></a>
        <br />
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/place_of_worship.mp4" title="Place of Worship" style="width: 30%; padding-right: 10px;"><img src="index_videolb/thumbnails/place_of_worship.png" alt="Place of Worship" style="width: 100%;" /><span class="font">PLACE OF WORSHIP</span></a>
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/restaurant.mp4" title="Restaurant" style="width: 30%; padding-right: 10px;"><img src="index_videolb/thumbnails/restaurant.png" alt="Restaurant" style="width: 100%;" /><span class="font">RESTAURANT</span></a>
        <a class="voverlay" href="index_videolb/vdbplayer.swf?volume=100&url=video/adloc8tor_retail.mp4" title="Adloc8tor Retail" style="width: 30%;"><img src="index_videolb/thumbnails/adloc8tor_retail.png" alt="Adloc8tor Retail" style="width: 100%;" /><span class="font">RETAIL</span></a>
	</div>
    <script src="index_videolb/jquery.tools.min.js" type="text/javascript"></script>
	<script src="index_videolb/videolightbox.js" type="text/javascript"></script>
        
        
        
        
        	
    	<!--<div class="box" style="">
        		<img src="images/revel.png" style="width: 100%;" />
            	<center><p class="headings">Digital Disruption</p></center>
            <div style="margin-top: 5px;border-bottom:2px solid; width: 75%; margin: 0 auto;">
            </div>
            <div class="enquire-text"style="height: 160px; padding-top: 9%; "><center><p style="width: 80%;">A simple, powerful, and affordable digital signage    			and proximity marketing platform designed for simplicity without 
            	sacrificing features.</p></center>
            </div>
            <div style="margin-top: 5px;border-bottom:2px solid; width: 75%; margin: 0 auto;">
            </div>
        	<center><div style="height: 45px; margin-top: 25px;"><a href="mailto:info@adloc8tor.com" class="boxbutton">ENQUIRE</a></div></center>
       		</div>
        <div class="space">
        </div>-->
        
        <!--<div class="box">
        	<img src="images/shopcloud.png" style="width: 100%;" />
            <center><p class="headings">Smart Shopping & Navigation</p></center>
            <div style="margin-top: 5px;border-bottom:2px solid; width: 75%; margin: 0 auto;">
            </div>
            <div class="enquire-text" style="height: 160px; padding-top: 9%; "><center><p style="width: 80%;">Bringing innovation to the Retail Floor offering   			 				deeper, more personal connection between Retailer and Customer.</p></center>
            </div>
            <div style="margin-top: 5px;border-bottom:2px solid; width: 75%; margin: 0 auto;"></div>
        	<center><div style="height: 45px; margin-top: 25px;"><a href="mailto:info@adloc8tor.com" class="boxbutton">ENQUIRE</a>
            </div></center>
        </div>
    <div class="space">
        </div>-->

        
        <!--<div class="box" style="">
        	<img src="images/mihost.png" style="width: 100%;" />
            <center><p class="headings">Web Hosting</p></center>
            <div style="margin-top: 5px;border-bottom:2px solid; width: 75%; margin: 0 auto;">
            </div>
            <div class="enquire-text" style="height: 160px; padding-top: 9%; "><center><p style="width: 80%;">Internet service provider that aims to trump           	competition, by providing the best and most effective support possible.</p>
            </div>
            <div style="margin-top: 5px;border-bottom:2px solid; width: 75%; margin: 0 auto;">
            </div>
        	<center><div style="height: 45px; margin-top: 25px;"><a href="mailto:support@mihost.co.za" class="boxbutton">ENQUIRE</a></div></center>
        </div>
        </div></center>--></div>
    </div>
    <br /><br />
    
    
<div id="news"></div>
<div class="newsbg" style=" background-image:url(images/news.jpg); width: 100%; margin-top: 60px;">
    <div class="page" >
    <br>
    <center><p class="aboutus-headings" style="color: #FFF;">BLOG</p>
        <img src="images/linewhite.png" style="width: 100%;" />
        <a href="http://blog.reveldigital.com/2015/11/custom-font-support-with-google-fonts.html"><img src="images/blog1.png" alt="blog1" style="width: 25%; display:inline-block; padding-right: 30px;" /></a>
        <a href="http://blog.reveldigital.com/2015/10/important-changes-to-affidavit-reporting.html"><img src="images/blog2.png" alt="blog2" style="width: 25%; display:inline-block; padding-right: 30px;" /></a>
        <a href="http://blog.reveldigital.com/2015/08/utilizing-audience-measurement-face.html"><img src="images/blog3.png" alt="blog3" style="width: 25%; display:inline-block;" /></a>
        </center>
        
    	<br /><br />
        </div>
</div>
    
    
    
    
    
   
   
    <div class="page" id="contact">
    <center><p class="aboutus-headings">CONTACT US</p><img src="images/line.png" style="width: 100%;" /></center>
    	<div class="outer">
        	<div class="block1">
            	<p style="font-size:22px;">TEL: 031 764 0702<br />EMAIL: info@adloc8tor.com</p>
    			<br />
    			<p style="font-size:22px;">5 Abrey Road, Kloof<br />Abrey Eco Park<br />Suites 6/7/8 Coral House<br />3640</p>
            </div>
            <div class="block2">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3462.4229852336316!2d30.82373000000001!3d-29.794321999999994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1ef6fc17069a2411%3A0x26abc68d7e97776e!2s5+Abrey+Rd%2C+Kloof%2C+3640!5e0!3m2!1sen!2sza!4v1416901478144" frameborder="0" height="500" style=" border:0; display: inline-block; width: 80%;" class="googlemaps-widget"></iframe>
            </div>
        </div>
    </div>
    
    
    
    
    
    
      <div class="page">
     <center>
     <p class="aboutus-headings">LATEST TWEETS</p>
      <center><img src="images/line.png" style="width: 100%;" />

      <img src="images/twitter.png" alt="twitter item" style="width: 65%;" /></center>
    	
     <br /><br />
			
          
    </center>
    </div>
    
    
    
    
</div>
    <div class="footer">
    	<div class="page">
        	<div class="left">
            	<p class="headings">Adloc8tor (South Africa) (Pty) Limited</p>
				<p style="margin-top: -15px; font-size:14px;">Registration number: 2014/058281/07</p>
                <p style="margin-top: -15px; font-size:14px;">Vat number: 404 026 7181</p>
                <p>Suites 6, 7 & 8 Coral House. Abrey Eco Park, 5 Abrey Road, Kloof 3640</p>
                <p style="margin-top: -10px; font-size:12px;">KwaZulu-Natal. South Africa</p>
                <p style="margin-top: -10px; font-size:12px;">Telephone: +27 (0) 31 764 0702</p>
                <p style="margin-top: -10px; font-size:12px;">Email: <a href="mailto://info@adloc8tor.com">INFORMATION</a> | <a href="mailto://sales@adloc8tor.com">SALES</a> | 
                <a href="mailto://accounts@adloc8tor.com">ACCOUNTS</a></p>
                <br />
            </div>
            <div class="middle">
            	
            </div>
            <div class="right">
            	<p style=" font-size:16px; text-align:right;"class="footer-connect">Connect with us</p>
            	<!--<a href="mailto://info@adloc8tor.com"><img src="images/social/Email.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px; " /></a>-->
                <a href="http://www.facebook.com/pages/Adloc8tor/712488585495226" target="_blank"><img src="images/social/FB Icon.png" style="height: 35px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <!--<a href="http://plus.google.com/+OliverNudds/posts" target="_blank"><img src="images/social/Google Plus.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>-->
                <a href="http://www.linkedin.com/company/3595862?trk=prof-exp-company-name" target="_blank"><img src="images/social/LinkedIn.png" style="height: 35px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <a href="http://twitter.com/Adloc8tor" target="_blank"><img src="images/social/Twitter.png" style="height: 35px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <!--<a href=""><img src="images/social/Youtube.png" style="height: 25px; display: inline-block; margin-bottom: 50px;" /></a>-->
            </div>
        </div>
    </div>

</body>
</html>