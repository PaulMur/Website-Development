<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DWG | Dinner With Gayle</title>
<!--FAVICON-->
<link rel="icon" type="image/png" href="img/logo.png">
<!--/FAVICON-->
<!--CSS STYLES-->
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsiveness.css" rel="stylesheet" type="text/css" />
<!--/CSS STYLES-->
<!--JS SCRIPTS-->

<script src="js/jquery.js"></script>
<script src="js/main.js"></script>
<script>
	//paste this code under head tag or in a seperate js file.
	// Wait for window load
	$(window).load(function() {
		// Animate loader off screen
		$(".se-pre-con").fadeOut("slow");;
	});
	
</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71378029-1', 'auto');
  ga('send', 'pageview');

</script>

<!--/JS SCRIPTS-->
<!--PHP SCRIPT-->
<?php
	if(isset($_POST['email'])) {
		//parse the email post into the email
		$email = $_POST['email'];
		
		
		$to      = 'dermot@adloc8tor.com';
		$dsubject = 'Create own request';
		$dmessage = 'Someone has downloaded the Create Own email Attachment. Their email is: ' . $email;
		$dheaders = 'From: reservations@dinnerwithgayle.com' . "\r\n" .
		    'Reply-To: reservations@dinnerwithgayle.com' . "\r\n" .
		    'X-Mailer: PHP/' . phpversion();
	
		mail($to, $dsubject, $dmessage, $dheaders);
		$file = "files/design.pdf";
		if (file_exists($file)) {
    		header('Content-Description: File Transfer');
    		header('Content-Type: application/octet-stream');
    		header('Content-Disposition: attachment; filename='.basename($file));
    		header('Content-Transfer-Encoding: binary');
    		header('Expires: 0');
    		header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
    		header('Pragma: public');
    		header('Content-Length: ' . filesize($file));
    		ob_clean();
    		flush();
    		readfile($file);
    		exit;
		}
		echo ' <script type="text/javascript">
             alert("Thank you, your file should download soon.");
        </script>
        ';	

	} else {
		
	}
?>
<!--/PHP SCRIPT-->
</head>

<body>
<div class="se-pre-con"></div>
	<div id="topofall"></div>
	<section class="hero">
		<header>
			<div class="wrapper">
				<a href="#" id="fishie"><img src="img/logo.png" class="logo" alt="" titl="" /></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="work.php" class="scroll">work</a></li>
						<li><a href="#" id="menu" class="scroll">our menu</a></li>
						<li><a href="#" id="btnCreate" class="scroll">create your own</a></li>
						<li><a href="blog.php?id=0" class="scroll">blog</a></li>
						<li><a href="company.php" class="scroll">company</a></li>
                        <li><a href="webhosting.php" class="scroll">web hosting</a></li>
                        <li class="endofnav"><a href="#" id="btnContact" class="scroll">contact us</a></li>
                        
					</ul>
					<script>
					$(document).ready(function(){

					   var sections = $('section')
						  , nav = $('nav')
						  , nav_height = nav.outerHeight();
						 
						$(window).on('scroll', function () {
						  var cur_pos = $(this).scrollTop();
						 
						  sections.each(function() {
							var top = $(this).offset().top - nav_height,
								bottom = top + $(this).outerHeight();
						 
							if (cur_pos >= top && cur_pos <= bottom) {
							  nav.find('a').removeClass('current');
							  sections.removeClass('current');
						 
							  $(this).addClass('current');
							  nav.find('a[href="#'+$(this).parent().attr('id')+'"]').addClass('current');
							}
						  });
						});
					
					});
					</script>
				</nav>
                <div class="toppanel">
                	<p id="top">inquiries? call 031 764 0702&nbsp;<a href="mailto:reservations@dinnerwithgayle.com">reservations@dinnerwithgayle.com</a></p>
                </div>
			</div>
		</header><!--  end header section  -->
	</section><!--  end hero section  -->
    <div id="all">
    	<div class="full">
        
        	<a class="webwork" href="img/montana.png" data-lightbox="example-set" data-title="<a href='http://montanaresourcing.co.za' target='_blank' style='color: #fff; text-decoration: none;'>Montana Resoucing website</a>"><img class="example-set" src="img/work1.png" style="width: 100%;"  onmouseover="this.src='img/work1hover.png'" onmouseout="this.src='img/work1.png'" alt="Web Work 1" /></a>
            <a class="webwork" href="img/iconic.jpg" data-lightbox="example-set" data-title="<a href='http://iconicmedia.co.za' target='_blank' style='color: #fff; text-decoration: none;'>Iconic Media website</a>"><img class="example-set" src="img/work2.png" style="width: 100%;" onmouseover="this.src='img/work2hover.png'" onmouseout="this.src='img/work2.png'" alt="Web Work 2" /></a>
            <a class="webwork" href="img/thomas.png" data-lightbox="example-set" data-title="<a href='http://thomashealthcare.com.au' target='_blank' style='color: #fff; text-decoration: none;'>Thams Health Care website</a>"><img class="example-set" src="img/work3.png" style="width: 100%;" onmouseover="this.src='img/work3hover.png'" onmouseout="this.src='img/work3.png'" alt="Web Work 3" /></a>
            <a class="webwork" href="img/shop.png" data-lightbox="example-set" data-title="Ecommerce website"><img class="example-set" src="img/work4.png" style="width: 100%;" onmouseover="this.src='img/work4hover.png'" onmouseout="this.src='img/work4.png'" alt="Web Work 4" /></a>
        </div>
        
        
        <script src="js/lightbox-plus-jquery.min.js"></script>
        
        
        <div id="menu"></div>
        <div id="menuall"></div>
        <div class="menu">
        <center>
    		<h3>our menu</h3>
        	<p>check out what our chef can rustle up for you</p>
            <div class="menu-row-one">
            	<div class="col-one">
                    <img src="img/menu1.png" alt="Web Development" />
                    <h4>web development</h4>
                    <p>The Gayle team are simply devoted to making your new website engaging and successful in every way possible! Our team of experts are here to help!</p>
                    <a href="menu.php?id=1" class="menuinfo"><img src="img/learnmore.png" style="height:40px;""/></a>
                </div>
                <div class="col-two">
                    <img src="img/menu2.png" alt="E-Commerce" />
                    <h4>e-commerce</h4>
                    <p>The online world are buying! We create the most interactive and incredibly responsive ecommerce sites available online. We can help drive your sales!</p>
                    <a href="menu.php?id=2" class="menuinfo"><img src="img/learnmore.png" style="height:40px;""/></a>
                </div>
                <div class="col-three">
                    <img src="img/menu3.png" alt="ios&android app design" />
                    <h4>ios & android app design</h4>
                    <p>Is it time to join the club? Apps are now the norm to engage and attract potential customers. Our team of experts can help design, build and launch your vision.</p>
                    <a href="menu.php?id=3" class="menuinfo"><img src="img/learnmore.png" style="height:40px;"/></a>
                </div>
            </div>
            <div class="menu-row-two">
            	<div class="col-one">
                	<img src="img/menu4.png" alt="GraphicDesign" />
                    <h4>graphic design</h4>
                    <p>Whether it’s for print, digital, or brand and logo design – the Gayle designers work collaboratively with you to enhance your brand’s look and feel.</p>
                    <a href="menu.php?id=4" class="menuinfo"><img src="img/learnmore.png" style="height:40px;"/></a>
                </div>
                <div class="col-two">
                	<img src="img/menu5.png" alt="Digital Marketing" />
                    <h4>digital marketing</h4>
                    <p>Having dinner with us and discussing your digital and social marketing needs will have one simple result – your business will become truly Iconic.</p>
                    <a href="menu.php?id=5" class="menuinfo"><img src="img/learnmore.png" style="height:40px;"/></a>
                </div>
                <div class="col-three">
                	<img src="img/menu6.png" alt="Creative" />
                    <h4>creative</h4>
                    <p>We take your concept, dreams and goals; and mould them into a working brand that identifies with your target audience. We make your dreams come true.</p>
                    <a href="menu.php?id=6" class="menuinfo"><img src="img/learnmore.png" style="height:40px;"/></a>
                </div>
            </div>
        </center>    
            
    	</div>
        
        
        
    </div>
    <div id="createown"></div>
    <div class="hightest">
    	<div class="testleft">
    		<img src="img/testimonialsleft.png" alt="Testimonials" />
    	</div>
        <div class="testleft">
			<!--CAROUSEL-->
            <div id="carousel">
            	<ul>
                	<li>see what some of our previous dinner guests have to say about us<br /></li>
                    <li>‘I could never had imagined how the team at Gayle could take the concept I had for my site and make it into such a reality as they have done!  It’s simply incredible!  All my digital design work from now on will be given to them.  Simply the best team of designers in the world!’</li>
                    <li>‘I had been planning an update to my site for some time before finally being recommended to the Gayle team.  They were so collaborative and understood immediately the emotional attachment I had developed with my old site and brand.  They managed to pull my site from the dark ages to generating significant revenue from it on a monthly basis!’</li>
                    <li>‘The team at Dinner With Gayle have literally saved the good name of website development companies for me.  I had been promised so much by another provider and delivered so little that by the time I was introduced to the Gayle guys, my patience was pretty much shot.  They delivered and changed my entire attitude with their amazing work! I Can’t recommend them enough!’</li>
                    <!--<li>‘I’ve now had three sites built by the Gayle team and will have more work for them very soon too!  Their expert approach and ability to send me to experts in other fields like the marketing guys at Iconic Media and Print guys at Dezzo Branding, means that all my marketing material is on brand and effective.  Bravo guys and see you soon!’</li>-->
                </ul>
            </div>
            <!--/CAROUSEL-->
            <script>
			</script>
		</div>
	</div>
    <div id="createown"></div>
	<div class="create">
    	<h3>create your own</h3>
        <p>give your project a delicious start with our DIY design worksheet</p>
        <form action="" method="post">
        	<input type="text" placeholder="enter your email address" class="createinput" name="email" /><br />
            <input type="submit" value="download the pdf worksheet" class="submitinput" />
        </form>
    </div>
    <div class="blog" style="padding-bottom: 40px;">
    	<h3>blog</h3>
        <div class="wrapper">
            <img src="img/left.png" class="left" />
            <div class="blogitem">
                <h1>11-Oct</h1>
                <a href="blog.php?id=4" style="position: absolute; margin-top: 120px; margin-left: -13%;"><img src="img/learnmore.png" style="height: 30px; " alt="learn more" /></a>
                <h4>Persausive Conversion</h4>
                <p>When do persuasive conversion optimisation techniques become unethical?</p><br />
                
            </div>
            <div class="blogitem">
                <h1>14-Oct</h1>
                <a href="blog.php?id=5" style="position: absolute; margin-top: 120px; margin-left: -13%;"><img src="img/learnmore.png" style="height: 30px; " alt="learn more" /></a>
                <h4>Conversion Rate</h4>
                <p>There are many metrics that businesses talk about when discussing the overall performance of their website.</p>
                
            </div>
            <div class="blogitem">
                <h1>26-Oct</h1>
                <a href="blog.php?id=6" style="position: absolute; margin-top: 120px; margin-left: -13%;"><img src="img/learnmore.png" style="height: 30px; " alt="learn more" /></a>
                <h4>Overnight SEO Success</h4>
                <p>We’re long past the 3 and a half years since Google first rolled out their Penguin algorithm. In that time, the doom...</p>
                
            </div>
            <img src="img/right.png" class="right" />
        </div>
    </div>
	<div class="star">
    	<h1>give your site the michelin star</h1>
        <h3></h3>
        <p>When you choose to dine with us we want to make sure that you have a world class experience all the time.  <br />We want you to come back for seconds and to tell all your friends about us!</p>
        <a href="company.php#team"><div class="meet">meet the team</div></a>
        <a href="careers.php"><div class="careers">careers</div></a>
    </div>
    <div class="reach">
    	<h1>reach out</h1>
        <h2>let's get cooking!</h2>
        <div class="reachbuttons">
        	<a href="domains.php">
                <a href="mailto:reservations@dinnerwithgayle.com">
                <div class="reachbut1">
                    take the first step
                </div>
                </a>
            </a>
            <a href="moremenu.php">
                <div class="reachbut2">
					is your domain available?
                </div>
            </a>
        </div>
    </div>
    <div id="contact"></div>
    <div id="footer"></div>
    <div class="footer">
    	<div class="footeritem">
        	<div class="footerheader">
            	<img src="img/logo.png" class="footerfish" />
                <h4>stay in touch</h4>
                <form action="signup.php" method="post">
                	<input type="text" class="footerinput" placeholder="email" name="email"/>
                    <input type="submit" class="footersubmit" value=">" />
                </form>
            </div>
    		<p style="font-size:18px; font-weight: 100; ">dinnerwithgayle.com</p><br />
            <p style="font-size:30px; font-weight: 100; ">Meet our partners</p>
            <p style="font-size: 16px; font-weight: 100;">Why not meet some of our favourite dinner guests?</p><br />
			<ul style="font-size: 16px; font-weight: 100;">
            	<li><a href="http://iconicmedia.co.za" target="_blank" style="color: #fff; text-decoration: none;">For Digital Marketing invite Iconic Media for dinner!</a></li><br /><br />
                <li><a href="http://adloc8tor.com" target="_blank" style="color: #fff; text-decoration: none;">For Disruptive Advertising Solutions send an invite to Adloc8tor</a></li><br /><br />
                <li><a href="http://dezzobranding.co.za" target="_blank" style="color: #fff; text-decoration: none;">For Print and Event Branding Solutions why not eat out with Dezzo Branding</a></li><br />
			</ul>
    	</div>
        <div class="footeritem" style="background-image:url(img/footerimg.png); background-position:left; background-repeat: no-repeat; background-size:cover;">
        	<div class="footerheader">
                <div class="social">
                    <a href="https://twitter.com/DinnerWithGayle"><img src="img/twitter.png" alt="twitter" /></a>
                    <!--<a href=""><img src="img/google+.png" alt="google+" /></a>-->
                    <a href="https://www.facebook.com/dinnerwithgayle"><img src="img/facebook.png" alt="facebook" /></a>
                    <a href="https://www.linkedin.com/company/10354291?trk=vsrp_companies_res_name&trkInfo=VSRPsearchId%3A2868044051450095540717%2CVSRPtargetId%3A10354291%2CVSRPcmpt%3Aprimary"><img src="img/linkedin.png" alt="linkedin" /></a>
                    <!--<a href=""><img src="img/instagram.png" alt="instagram" /></a>-->
                </div>
            </div>
            <h1>Contact</h1>
            <div style="height:200px;width:500px;max-width:100%;list-style:none; transition: none;overflow:hidden; margin: 10px 0px 0px 20px;"><a href="https://www.google.com/maps?ll=-29.794322,30.82373&z=15&t=m&hl=en-US&gl=US&mapclient=embed&q=5+Abrey+Rd+Kloof+3640,+South+Africa"><img src="img/maps.png" /></a></div>
            <p class="contact">
            	5 Abrey Road<br />
                Abrey Eco Parl, Corel House,<br />
                Kloof, South Africa<br /><br />
                031 764 0702<br />
            </p>
            <a href="mailto:reservations@dinnerwithgayle.com" class="contactmail">reservations@dinnerwithgayle.com</a>
		</div>
	</div>

     <a href="#" class="back-to-top">Back to Top</a>
     
<script type="text/javascript">
jQuery(document).ready(function() {
    var offset = 220;
    var duration = 500;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) {
            jQuery('.back-to-top').fadeIn(duration);
        } else {
            jQuery('.back-to-top').fadeOut(duration);
        }
    });
    
    jQuery('.back-to-top').click(function(event) {
        event.preventDefault();
        jQuery('html, body').animate({scrollTop: 0}, duration);
        return false;
    })
});
$("#btnCreate").click(function() {
    	$('html, body').animate({
        	scrollTop: $("#createown").offset().top
    	}, 1000);
	});
$("#fishie").click(function() {
    	$('html, body').animate({
        	scrollTop: $("#topofall").offset().top
    	}, 1000);
	});
$("#btnContact").click(function() {
    	$('html, body').animate({
        	scrollTop: $("#footer").offset().top
    	}, 1000);
	});
	
	$("#menu").click(function() {
		$('html, body').animate({
			scrollTop: $("#menuall").offset().top
		}, 1000);
	});
</script>
    
    
    
</body>
</html>