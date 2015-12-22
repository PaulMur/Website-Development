<!doctype html>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<title>SG Gallery | The Ultimate Gaming clan in South Africa and EU</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="keywords" content="">
<link rel="shortcut icon" href="img/favicon.png">
<!-- CSS -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="isotope_gallery/css/isotopegallery.css">
<link rel="stylesheet" id="custom-style-css"  href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" type="text/css" media="all" />
</head>
<body class="home page page-id-26 page-template page-template-tmp-no-title-php">
<div id="main_wrapper">
  <div class="container logo"> 
    <!-- Logo --> 
    <a class="brand" href="index.html"> <img src="img/logo.png" alt="logo"  /> </a> 
    <!-- End Logo -->
    <div class="clear"></div>
  </div>
  <!-- NAVBAR -->
  <div class="navbar navbar-inverse container">
    <div class="navbar-inner">
      <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
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
          <li class="current-menu-parent"><a href="gallery.php">Gallery</a></li>
          <li><a href="forums.php">Forums</a></li>
          <li><a href="shop.php">Shop</a></li>
          <li> <a href="#">Blog</a> </li>
          <li><a href="contact.php">Contact</a></li>
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
      <div id="LoginWithAjax" class="default"> <span id="LoginWithAjax_Status"></span>
        <form name="LoginWithAjax_Form" id="LoginWithAjax_Form" action="http://skywarriorthemes.com/gameaddict/wp-login.php?callback=?&amp;template=" method="post">
          <table cellpadding="0" cellspacing="0" width="100%">
            <tbody>
              <tr id="LoginWithAjax_Username">
                <td class="username_input"><input name="log" placeholder="Username" id="lwa_user_login" class="input" value="" type="text"></td>
              </tr>
              <tr id="LoginWithAjax_Password">
                <td class="password_input"><input placeholder="Password" name="pwd" id="lwa_user_pass" class="input" value="" type="password"></td>
              </tr>
              <tr>
                <td colspan="2"></td>
              </tr>
              <tr id="LoginWithAjax_Submit">
                <td id="LoginWithAjax_SubmitButton"><input name="rememberme" id="lwa_rememberme" value="forever" type="checkbox">
                  <label>Remember Me</label>
                  <a href="#" title="Password Lost and Found">Lost your password?</a> <br>
                  <br>
                  <input class="button-small"value="Log In" type="submit">
                  <a class="reg-btn button-small" href="#">Register</a>
                  <input name="redirect_to" value="#" type="hidden">
                  <input name="testcookie" value="1" type="hidden">
                  <input name="lwa_profile_link" value="" type="hidden"></td>
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
        <h1>Gallery</h1>
      </div>
      <div class="breadcrumbs"> <strong><a href="#">Home</a> / Gallery</strong> </div>
    </div>
  </div>
  <div class="page normal-page container">
    <div class="row">
      <div class="span12">
        <div class="template-wrapper">
          <div class="block block-page_header_block span12 first cf">
            <div class="span12 block-title centered">
              <h2>Instagram Gallery</h2>
              <p>All our instagram posts. Keep up to date with us.</p>
            </div>
            <div class="span12 block-divider"></div>
          </div>
          <div class="clear"></div>
        </div>
        <br>
        <div class="rx_isotope_ui">
          <div class="isotope_top_space"></div>
          <div class="isotopeContainer isotope" style="position: relative; overflow: hidden; height: 890px;">
          
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
        	<a target="_blank" href="<?php echo $link ?>"> 
            	<!--<img src="" width="84" style="float:left;" />-->
            </a>
            
            <div class="isotopeItem _groupNJW0XRQ5BUGJ3WMPM75FDY2BMPLWPW7Y isotope-item" style="width: 262px; height: 262px; margin: 5px; position: relative; opacity: 1; display: inline-block;"> <img src="<?php echo $img; ?>" class="isotopeThumb">
              <div style="background: none repeat scroll 0% 0% rgba(52, 64, 80, 0.15); opacity: 0; display: block;" data-full_url="<?php echo $img; ?>" data-indx="0" class="isotopeItemOverlay">
                <div class="rx_isotope_beacon" style="left: 84px; top: 92px;">
                  <div data-href="#" class="genericBeaconIsotope">
                    <div style="background: none repeat scroll 0% 0% rgba(52, 64, 80, 0.4); opacity: 1; top: 0px; transform: matrix(1, 0, 0, 1, 0, 0);" class="beaconCircle1"></div>
                    <div style="background: none repeat scroll 0% 0% rgba(52, 64, 80, 0.8); opacity: 1; top: 12.05px; transform: matrix(1, 0, 0, 1, 0, 0);" class="beaconCircle2"> <img alt="" src="http://skywarriorthemes.com/gameaddict/wp-content/plugins/sk_isotope_gallery/images/link_icon_beacon.png" class="isotopeItemOpenLink"> </div>
                  </div>
                </div>
              </div>
            </div>
            <?php 
				endforeach 
			?>
            
          </div>
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
            <div class="img"> <a rel="bookmark" href="#"> <img src="./img/defaults/57x57.jpg"> <span class="overlay-link"></span> </a> </div>
            <div class="info"> <a href="#">Eget ultrices mauris rhoncus non</a><br>
              <small><i class="icon-calendar"></i> May 4, 2013 - <i class="icon-comment"></i> 5 Comments</small><br>
              <div class="overall-score">
                <div class="rating r-4"></div>
              </div>
            </div>
            <div class="clear"></div>
          </li>
          <li>
            <div class="img"> <a rel="bookmark" href="#"> <img src="./img/defaults/57x57.jpg"> <span class="overlay-link"></span> </a> </div>
            <div class="info"> <a href="#">Etiam massa mauris fermentum a congue id</a><br>
              <small><i class="icon-calendar"></i> June 17, 2013 - <i class="icon-comment"></i> 3 Comments</small><br>
              <div class="overall-score">
                <div class="rating r-45"></div>
              </div>
            </div>
            <div class="clear"></div>
          </li>
          <li>
            <div class="img"> <a rel="bookmark" href="#"> <img src="./img/defaults/57x57.jpg"> <span class="overlay-link"></span> </a> </div>
            <div class="info"> <a href="#">Mauris risus augue fermentum sit amet congue sit amet</a><br>
              <small><i class="icon-calendar"></i> January 4, 2013 - <i class="icon-comment"></i> 2 Comments</small><br>
              <div class="overall-score">
                <div class="rating r-45"></div>
              </div>
            </div>
            <div class="clear"></div>
          </li>
          <li>
            <div class="img"> <a rel="bookmark" href="#"> <img src="./img/defaults/57x57.jpg"> <span class="overlay-link"></span> </a> </div>
            <div class="info"> <a href="#">Duis lacinia nisi vel lorem scelerisque interdum</a><br>
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
      <div class="social"> <a data-original-title="Youtube" data-toggle="tooltip" class="youtube" target="_blank" href="https://www.youtube.com/channel/UCtntoUGevcH7yzvwfZRka4Q"><i class="fa fa-youtube"></i> </a> <a data-original-title="Twitch" data-toggle="tooltip" class="twitch" target="_blank" href="http://www.dogamingleague.co.za/clan/sgza"><i class="fa fa-gamepad"></i></a> <a data-original-title="Google plus" data-toggle="tooltip" class="google-plus" target="_blank" href="https://plus.google.com/u/0/b/105330282794239200930/105330282794239200930/about"><i class="fa fa-google-plus"></i></a> <a data-original-title="Twitter" data-toggle="tooltip" class="twitter" target="_blank" href="https://twitter.com/SerenityGamingZ"><i class="fa fa-twitter"></i></a> <a data-original-title="Facebook" data-toggle="tooltip" class="facebook" target="_blank" href="https://www.facebook.com/SerenityGamingZA"><i class="fa fa-facebook"></i></a> </div>
    </div>
  </footer>
</div>
<!-- JavaScript --> 
<script type="text/javascript" src="js/jquery.js"></script> 
<script type="text/javascript" src="js/jquery-migrate.min.js"></script> 
<script type="text/javascript" src="js/login-with-ajax.js"></script> 
<script type="text/javascript" src="js/bootstrap-modal.js"></script> 
<script type="text/javascript" src="js/bootstrap-transition.js"></script> 
<script type="text/javascript" src="js/bootstrap-tooltip.js"></script> 
<script type="text/javascript" src="js/jquery.ui.totop.js"></script> 
<script type="text/javascript" src="js/global.js"></script> 
<script type="text/javascript" src="js/theme.min.js"></script> 
<script type="text/javascript" src="js/isotope.js"></script> 
<script type="text/javascript" src="isotope_gallery/js/rx_isotope_gallery.js"></script> 
<script type="text/javascript" src="isotope_gallery/com/riaextended/js/tween/TweenMax.min.js"></script> 
<!-- End JavaScript -->
</body>
</html>