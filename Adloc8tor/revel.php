<!DOCTYPE html>
<html>
<head>
	<title>adloc8tor - Revel Digital</title>
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
    <!-- it works the same with all jquery version from 1.x to 2.x -->
    <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>

</head>
<body>
<nav class="clearfix">
    	<img src="images/logo.png" alt="Logo" class="logo" />
		<ul class="clearfix">
			<li><a href="index.php">HOME</a></li>
			<li><a href="index.php#about">ABOUT</a></li>
			<li><a href="index.php#services" class="active">DISRUPTIVE SOLUTIONS</a></li>
			<li><a href="index.php#news">NEWS</a></li>
			<li><a href="http://crm.adloc8tor.com">LOG IN</a></li>
			<li><a href="index.php#contact">CONTACT US</a></li>	
		</ul>
		<a href="#" id="pull">MENU</a>
	</nav>
    <!--<div style="position:absolute; width: 100%; height: 100px; background-color: #282827;">
    </div>-->
    <img src="images/revel.jpg" style=" width: 100%; z-index: -1000;" />
    <div class="fullpage" style="margin-top: -29px; background-color: #fff;">
    	<div class="page">
        	<center><p class="headings">Feature for feature the most comprehensive digital signage platform on the market.</p></center>
           	<div class="featurebox">
            	<center>
                	<img src="images/Clock.png" style="height: 100px;" />
                    <p class="headings">Efficient</p>
                    <p>Easy to use management interface means more time focused on your campaign</p>
                </center>
            </div>
            <div class="featurebox" style=" margin-left: 8%;">
            	<center>
                	<img src="images/bulb.png"  style="height: 100px;" />
                    <p class="headings">Smart</p>
                    <p>Intelligent scheduling eliminates the burden of creating and managing even the most complex deployments</p>
                </center>
            </div>
            <div class="featurebox" style="float: right;">
            	<center>
                	<img src="images/box.png" style="height: 100px;" />
                	<p class="headings">Versatile</p>
                    <p>One platform for kiosks, menu boards, point-of-sale, video walls, and much more</p>
                </center>
            </div>
        </div>
        <br />
        <div style="width: 100%; border-bottom: 12px solid #BDBEC0;"></div>
		<div style="width: 100%; border-bottom: 1px solid #fff;"></div>
    </div>
    <div class="fullpage" style="background-color:#DCDBD9; margin-top:-73px;">
    <img src="images/features.png" style="width: 100%;" />
    <img src="images/features2.png" style="width: 100%;" />
    	<!--<div class="page">
    		<p class="headings" style="padding-top:2%; color: #6E6E70;">One System... Infinite Posibilities</p>
        	<p class="headings" style="font-weight:bold; color: #6E6E70;">Industries Served</p>
        	<p style=" color: #6E6E70;">Retail <span style="color: #58A5D8">|</span> Medical <span style="color: #58A5D8;">|</span> Financial <span style="color: #58A5D8">|</span> Education <span style="color: #58A5D8">|</span> 
        	Corporate <span style="color: #58A5D8">|</span> Government <span style="color: #58A5D8">|</span> Hospitality <span style="color: #58A5D8">|</span> Transportation</p>
            <img src="images/industries/Hospital.png" style="height:60px;" class="inline" />
            <img src="images/industries/Cut.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Shirt.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Hat.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Ticket.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Plane.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/coffee.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Tram.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/car.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Pig.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Control.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/building.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Gas Pump.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/chip.png" style="height:60px; margin-left: 10px;" class="inline" />
            <img src="images/industries/Weights.png" style="height:60px; margin-left: 10px;" class="inline" />
            <div class="product" style=" margin-top: 50px;">
            	<table>
                <tr><td><img src="images/Map.png" style="height: 60px;" /></td><td><span class="headings" style="color: #58A5D8; margin-top: -20px;">Kiosk<br />
                Built In Support For Interactivity</span></td></tr></table>
                <table>
                <tr><td>Any touch enabled device or screen can become an interactive kiosk with no additional hardware. Player scripting allows for unlimted runtime customisation on both Android and Windows7.</td></tr></span>
                </table>
            </div>
            <div class="product" style="float:right;">
            <br /><br />
            	<table>
                <tr><td><img src="images/Callendar.png" style="height: 60px;" /></td><td><span class="headings" style="color: #58A5D8; margin-top: -20px;">Scheduling<br />
                Smart Schedules Do The Work For You</span></td></tr></table>
                <table>
                <tr><td>Smart Scheduling makes it easy to manage any size digital signage deployment. Thousands of devices can be managed easily and effectively.</td></tr></span>
                </table>
            </div>
            <div class="product">
            <br />
            	<table>
                <tr><td><img src="images/Heart.png" style="height: 60px;" /></td><td><span class="headings" style="color: #58A5D8; margin-top: -20px;">Monitoring<br />
                Player Health At-a-Glance</span></td></tr></table>
                <table>
                <tr><td>Instantly determine which players are online/offline as well as what's currently playing. Visual snapshots of actual player output is provided every 30 seconds.</td></tr></span>
                </table>
            </div>
            <div class="product" style="float:right;">
            <br />
            	<table>
                <tr><td><img src="images/Pencile.png" style="height: 60px;" /></td><td><span class="headings" style="color: #58A5D8; margin-top: -20px;">Design<br />
                Unlimited Creative Freedom</span></td></tr></table>
                <table>
                <tr><td>Use the template designer to compose virtually any content imaginable with unlimited "zones" or content areas with layering, transparency, and animation.</td></tr></span>
                </table>
            </div>
            <div class="product">
            <br />
            	<table>
                <tr><td><img src="images/Play.png" style="height: 60px;" /></td><td><span class="headings" style="color: #58A5D8; margin-top: -20px;">Media Support<br />
                You name it, we can play it</span></td></tr></table>
                <table>
                <tr><td>We support all popular media formats including Adobe Flash, Microsoft PowerPoint, PDF, and more. All major video containers and codecs are supported including MP4, WMV, FLV & AVI in both standard and HD (High Definition)</td></tr></span>
                </table>
            </div>
            <div class="product" style="float:right;">
            <br />
            	<table>
                <tr><td><img src="images/Chart.png" style="height: 60px;" /></td><td><span class="headings" style="color: #58A5D8; margin-top: -20px;">Reporting<br />
                Integrating Reports</span></td></tr></table>
                <table>
                <tr><td>Reports are available for Proof of Play, Device activity, Audience Metrics, and More. Export any report to PDF, Excel, Image, XML, or CSV</td></tr></span>
                </table>
            </div>
    	</div>-->
    </div>
    <img src="images/cloud.jpg" style="width: 100%;" />
    <img src="images/revel1.png" style="width: 100%; margin-top: -5px;" />
    <img src="images/revel2.png" style="width: 100%; margin-top: -5px;" />
<div class="fullpage" style="background-color: #DCDBD9; margin-top: -5px;">
    <div class="page">
    	<div style="margin-top: 0px;border-bottom:2px solid; width: 100%;"></div>
        <center>
        	<br />
        	<iframe src="https://player.vimeo.com/video/117332491" class="video_revel" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        	<br /><br /><a style="height: 45px; margin-top: 25px;" class="boxbutton" href="http://reveldigital.co.za">FIND OUT MORE</a>
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
            	<p style=" font-size:16px; text-align:right;">Connect with us</p>
            	<a href="#"><img src="images/social/Email.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px; " /></a>
                <a href="#"><img src="images/social/FB Icon.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <a href="#"><img src="images/social/Google Plus.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <a href="#"><img src="images/social/LinkedIn.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <a href="#"><img src="images/social/Twitter.png" style="height: 25px; display: inline-block; margin-right: 15px; margin-bottom: 50px;" /></a>
                <a href="#"><img src="images/social/Youtube.png" style="height: 25px; display: inline-block; margin-bottom: 50px;" /></a>
            </div>
        </div>
		<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//adloc8tor.com/piwik/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 1]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//adloc8tor.com/piwik/piwik.php?idsite=1" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
</html>