<?php
if(isset($_POST['email'])){
	//Email and subject
	$email_to = "management@serenitygaming.co.za";
	
	$email_subject = $_POST['subject'];;
	
	//begin
	function died($error) {
		//error code
		header("Location: contact.php?error=true");
		die();
	}
	
	//validation
	if(!isset($_POST['contactname'])) {
		if(!isset($_POST['email'])) {
			header("Location: contact.php?error=name&error2=email");
			die();
		}
		header("Location: contact.php?error=name");
		die();
	} else if(!isset($_POST['email'])) {
		header("Location: contact.php?error=email");
		die();
	}
	
	$name = $_POST['contactname'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$comments = $_POST['comments'];
	
	
	$email_message = "<table><tr><th>Serenity Gaming contact form details.</th></tr>";
	
	$email_message .= "<tr><td>Name</td><td>".$name."</td></tr>";
	$email_message .= "<tr><td>Email Address</td><td>".$email."</td></tr>";
	$email_message .= "<tr><td>Subject</td><td>".$subject."</td></tr>";
	$email_message .= "<tr><td>Comment</td><td>".$comments."</td></tr></table>";
	
	$headers = 'From: '.$email."\r\n".'Reply-To: '.$email."\r\n" .'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject,$email_message, $headers);
	
	header("Location: contact.php?success=true");
}


	$error = "";
	$error2 = "";
	$message = "";
	$success = "";
	
	if(isset($_GET['error'])) {
		$error = $_GET['error'];
		if($error == "true") {
			$message = "There is a issue with the form you have submitted";
		} else if ($error == "name") {
			if (isset($_GET['error2'])) {
				$error2 = $_GET['error2'];
				if ($error2 == "email") {
					$message = "Your name and email are incorrect";
				}
			}
			$message = "Your name is incorrect";
		} else if ($error == "email") {
			$message = "There is an issue with your email address";
		}
	}
	
	if(isset($_GET['success'])) {
		$suc = $_GET['success'];
		if ($suc == "true") {
			$message = "Great stuff, your email has been sent";
		}
	}
	
	
	
	

?>
<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>SG Contact Us | The Ultimate Gaming clan in South Africa and EU</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="keywords" content="">
		<link rel="shortcut icon" href="img/favicon.png">
		<!-- CSS -->
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" type="text/css" media="all" />
	</head>
	<body class="single single-product postid-53 woocommerce woocommerce-page">
		<div id="main_wrapper">
			<div class="container logo">
			<!-- Logo -->
			<a class="brand" href="index.html">
			<img src="img/logo.png" alt="logo"  />
			</a>
			<!-- End Logo -->
			<div class="clear"></div>
		</div>
		<!-- NAVBAR -->
		<div class="navbar navbar-inverse container">
				<div class="navbar-inner">
					<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<div class="nav-collapse collapse">
						<div class="menu-main-container">
							<ul class="nav">
								<li> <a href="index.php">Home</a> </li>
            <li ><a href="sponsors.php">Sponsors</a></li>
            <li class="dropdown"> <a href="#">The clan</a>
              <ul class="sub-menu dropdown-menu">
                <li><a href="members.php">Members</a></li>
                <li><a href="game.php">Teams</a></li>
              </ul>
            </li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="forums.php">Forums</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li> <a href="#">News</a> </li>
            <li class="current-menu-parent"><a href="contact.php">Contact</a></li>
							</ul>
						</div>
						<a href="#myModalL" role="button" data-toggle="modal" class="account"><img src="./img/account.png"></a>
						<form method="get" id="header-searchform" action="http://skywarriorthemes.com/gameaddict/">
							<input autocomplete="off" value="" name="s" id="header-s" type="text">
							<input id="header-searchsubmit" value="Search" type="submit">
							
						</form>
					</div>
					<!--/.nav-collapse -->
				</div>
				<!-- /.navbar-inner -->
			</div>
		<div id="myModalL" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
				<h3>Login</h3>
			</div>
			<div class="modal-body">
				<div id="LoginWithAjax" class="default">
					<span id="LoginWithAjax_Status"></span>
					<form name="LoginWithAjax_Form" id="LoginWithAjax_Form" action="http://skywarriorthemes.com/gameaddict/wp-login.php?callback=?&amp;template=" method="post">
						<table cellpadding="0" cellspacing="0" width="100%">
							<tbody>
								<tr id="LoginWithAjax_Username">
									<td class="username_input">
										<input name="log" placeholder="Username" id="lwa_user_login" class="input" value="" type="text">
									</td>
								</tr>
								<tr id="LoginWithAjax_Password">
									<td class="password_input">
										<input placeholder="Password" name="pwd" id="lwa_user_pass" class="input" value="" type="password">
									</td>
								</tr>
								<tr>
									<td colspan="2"></td>
								</tr>
								<tr id="LoginWithAjax_Submit">
									<td id="LoginWithAjax_SubmitButton">
										<input name="rememberme" id="lwa_rememberme" value="forever" type="checkbox"> <label>Remember Me</label>
										<a href="#" title="Password Lost and Found">Lost your password?</a>
										<br><br>
										<input class="button-small"value="Log In" type="submit">
										<a class="reg-btn button-small" href="#">Register</a>
										<input name="redirect_to" value="#" type="hidden">
										<input name="testcookie" value="1" type="hidden">
										<input name="lwa_profile_link" value="" type="hidden">
									</td>
								</tr>
							</tbody>
						</table>
					</form>
				</div>
			</div>
		</div>
			<div class="title_wrapper container">
					<div class="span12">
						<div class="span6">
							<h1>Contact</h1>
						</div>
						<div class="breadcrumbs"><strong><a href="#">Home</a> / Contact</strong></div>
					</div>
			</div>
			<div class="container normal-page">
				<div class="row">
					<div class="span12 block-title centered">
						<h2>contact us for info</h2>
						<p>Why not leave a message or give us a call?</p>
					</div>
					<div class="span12 block-divider"></div>
                    <center><p><?php echo $message; ?></p></center>
                         <!-- <div class="gmap span12">
                             <div id="map-canvas"></div>
                        </div>
					<div class="span12 block-divider"></div>-->
					<div class="span12">
						<div class="template-wrapper">
							<div class="block block-contactform_block span7 first cf">
								<div class="title-wrapper">
									<h3 class="widget-title">CONTACT FORM</h3>
									<div class="clear"></div>
								</div>
								<div class="mcontainer">
						  <form action="" name="contactform" id="contactForm" class="contact" method="post" role="form">
                            <ul class="contactform controls">
                            <li class="input-prepend">
                                <span class="add-on"><i class="icon-user"></i></span>
                                <input type="text" name="contactName" placeholder="Name*" id="contactName" value="" class="required requiredField">
                                                            </li>
                            <li class="input-prepend">
                                <span class="add-on"><i class="icon-envelope"></i></span>
                                <input type="text" placeholder="Email*" name="email" id="email" value="" class="required requiredField email">
                                                            </li>
                            <li class="input-prepend">
                                <span class="add-on"><i class="icon-comment"></i></span>
                                <input type="text" placeholder="Subject" name="subject" id="subject" value="" class="subject">
                            </li>
                            <li class="input-prepend">
                                <span class="add-on"><i class="icon-align-justify"></i></span>
                                <textarea name="comments" placeholder="Your message*" id="commentsText" rows="20" cols="30" class="required requiredField"></textarea>
                                                            </li>
                            <li>
                                   <input type="submit" value="Send email">
                            </li>
                        </ul>
                    </form>
								</div>
							</div>
							<div class="block block-column_block span5  cf">
								<div class="block block-social_block span5 first cf">
									<div class="title-wrapper">
										<h3 class="widget-title">Find us on</h3>
										<div class="clear"></div>
									</div>
									<div class="wcontainer">
										<ul class="social-media">
											<li><a data-original-title="Youtube" data-toggle="tooltip" class="youtube" target="_blank" href="https://www.youtube.com/channel/UCtntoUGevcH7yzvwfZRka4Q"><i class="fa fa-youtube"></i> </a></li>
											<li> <a data-original-title="Google plus" data-toggle="tooltip" class="google-plus" target="_blank" href="https://plus.google.com/u/0/b/105330282794239200930/105330282794239200930/about"><i class="fa fa-google-plus"></i></a></li>
											<li><a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href="https://twitter.com/SerenityGamingZ"><i class="fa fa-twitter"></i></a></li>
											<li><a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href="https://www.facebook.com/SerenityGamingZA"><i class="fa fa-facebook"></i></a></li>
										</ul>
										<div class="clear"></div>
									</div>
								</div>
								<div class="block block-text_block span5 first cf">
									<div class="title-wrapper">
										<h3 class="widget-title">How to reach us</h3>
										<div class="clear"></div>
									</div>
									<div class="wcontainer">
										<p><span class="ctext">You can contact Serenity Gaming management on the email and contact number below.&nbsp;</span></p>
										<p><strong><i class="icon-envelope"></i> management@serenitygaming.co.za&nbsp;</strong></p>
										<p><strong><i class="icon-phone"></i>&nbsp;+27 79 036 6714</strong></p>
									</div>
								</div>
							</div>
							<div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
			</div>
			<footer class="container">
			<div class="span12">
					<div class="first footer_widget span3">
					<h3>Follow us on twitter!</h3>
						<a class="twitter-timeline"  href="https://twitter.com/SerenityGamingZ" data-widget-id="646261662404767744">Tweets by @SerenityGamingZ</a> 
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
      <div id="latest-twitter-follow-link"><a href="https://twitter.com/SerenityGamingZ">follow @SerenityGamingZ on twitter</a></div>
					</div>

				<div class="footer_widget span3">
					<h3> Latest posts</h3>
					<ul class="review">
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Eget ultrices mauris rhoncus non</a><br>
								<small><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 5 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-4"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Etiam massa mauris fermentum a congue id</a><br>
								<small><i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 3 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-45"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Mauris risus augue fermentum sit amet congue sit amet</a><br>
								<small><i class="icon-calendar"></i> January 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-45"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
						<li>
							<div class="img">
								<a rel="bookmark" href="#">
									<img src="./img/defaults/57x57.jpg">
									<span class="overlay-link"></span>
								</a>
							</div>
							<div class="info">
								<a href="#">Duis lacinia nisi vel lorem scelerisque interdum</a><br>
								<small><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
								<div class="overall-score">
									<div class="rating r-4"></div>
								</div>
							</div>
							<div class="clear"></div>
						</li>
					</ul>
				</div>
				<div class="footer_widget span3">
					<h3>From the forum</h3>
					<ul>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Pellentesque aliquam nibh eget nisi hendreri</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Curabitur sollicitudin mi vel auctor auctor</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Integer vitae neque ipsum</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Pellentesque placerat tincidunt magna quis condimentum</a></li>
						<li><a class="bbp-forum-title" href="#"><i class="icon-comment"></i>Closed topic</a></li>
					</ul>
				</div>
				<div class="widget-4 last footer_widget span3">
					<h3>instagram</h3>
					<div class="wcontent wprojects">
						<?php 
        					$username = 'SerenityGamingZA'; // your username
        					$access_token = '2178844755.1677ed0.7f4fa632ba6a429a89a06ba93c70d3a6'; // put your access token here
        					$count = 8; // number of images to show
							include 'instagram.php';
    					?>
        <?php
        					$ins_media = $insta->userMedia(); 
        					$i = 0; 
        					foreach ($ins_media['data'] as $vm): 
            					if($count == $i){ break;}
            						$i++;
            					$img = $vm['images']['low_resolution']['url'];
            					$link = $vm["link"];
        				?>
        <a target="_blank" href="<?php echo $link ?>"> <img src="<?php echo $img; ?>" width="175" style="float:left;" /> </a>
        <?php 
							endforeach 
						?>
					</div>
				</div>
			</div>
			<div class="copyright span12">
				<p>© &nbsp;Made by Paul Murdoch.&nbsp;</p>
				<div class="social">
					<a data-original-title="Youtube" data-toggle="tooltip" class="youtube" target="_blank" href="https://www.youtube.com/channel/UCtntoUGevcH7yzvwfZRka4Q"><i class="fa fa-youtube"></i> </a> <a data-original-title="Twitch" data-toggle="tooltip" class="twitch" target="_blank" href="http://www.dogamingleague.co.za/clan/sgza"><i class="fa fa-gamepad"></i></a> <a data-original-title="Google plus" data-toggle="tooltip" class="google-plus" target="_blank" href="https://plus.google.com/u/0/b/105330282794239200930/105330282794239200930/about"><i class="fa fa-google-plus"></i></a> <a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href="https://twitter.com/SerenityGamingZ"><i class="fa fa-twitter"></i></a> <a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href="https://www.facebook.com/SerenityGamingZA"><i class="fa fa-facebook"></i></a>
				</div>
			</div>
		</footer>
		</div>

				    <!--Google map -->
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
        <script>
            function initialize() {
          var mapOptions = {
            zoom: 12,
            center: new google.maps.LatLng("51.508742", "-0.125656"),
            mapTypeId: google.maps.MapTypeId.ROADMAP
          }
          var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
          var contentString = 'Hello!';
          var infowindow = new google.maps.InfoWindow({
              content: contentString
          });

          var image = "http://skywarriorthemes.com/gameaddict/wp-content/themes/gameaddict/img/marker.png";
          var myLatLng = new google.maps.LatLng("51.508742", "-0.125656");
          var marker = new google.maps.Marker({
              position: myLatLng,
              map: map,
              icon: image
          });
          google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
          });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
        </script>
		<!-- JavaScript -->
        <script type="text/javascript" src="js/jquery.js"></script>
        <script type="text/javascript" src="js/jquery-migrate.min.js"></script>
        <script type="text/javascript" src="js/login-with-ajax.js"></script>
        <script type="text/javascript" src="js/bootstrap-modal.js"></script>
        <script type="text/javascript" src="js/bootstrap-transition.js"></script>
        <script type="text/javascript" src="js/bootstrap-tooltip.js"></script>
        <script type="text/javascript" src="js/jquery.ui.totop.js"></script>
        <script type="text/javascript" src="js/jquery.validate.min.js"></script>
        <script type="text/javascript" src="js/jquery.validationEngine.js"></script>
        <script type="text/javascript" src="js/jquery.validationEngine-en.js"></script>
        <script type="text/javascript" src="js/main.js"></script>
        <script type="text/javascript" src="js/global.js"></script>
        <script type="text/javascript" src="js/theme.min.js"></script>
        <!-- End JavaScript -->
            <!--******* Javascript Code for the comment form *******-->
        <script type="text/javascript">
        jQuery(document).ready(function($) {

            // SUCCESS AJAX CALL, replace "success: false," by:     success : function() { callSuccessFunction() },
            $("#contactForm").validationEngine({

                ajaxSubmit: true,
                    ajaxSubmitFile: "http://skywarriorthemes.com/gameaddict/html/ajaxSubmit.php", //CHANGE IT TO YOUR URL!!!!!!!!!!
                    ajaxSubmitMessage: "Thank you, your post has been submitted!",
                success :  false, ajaxSubmitMessage: "Thank you, your post has been submitted!",
                failure : function() {}
            })


        });
        </script>
	</body>
</html>