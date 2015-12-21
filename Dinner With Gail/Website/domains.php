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
<!--/JS SCRIPTS-->
</head>

<body>
<div class="se-pre-con"></div>
	<section class="herow">
		<header>
			<div class="wrapper">
				<a href="/"><img src="img/logo.png" class="logo" alt="" titl="" /></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="work.php">work</a></li>
						<li><a href="menu.php">our menu</a></li>
						<li><a href="/#createown">create your own</a></li>
						<li><a href="blog.php">blog</a></li>
						<li><a href="company.php">company</a></li>
                        <li><a href="#">web hosting</a></li>
                        <li class="endofnav"><a href="index.php#footer">contact us</a></li>
                        
					</ul>
					
				</nav>
                <div class="toppanel">
                	<p id="top">inquiries? call 031 764 0702&nbsp;<a href="mailto:reservations@dinnerwithgayle.com">reservations@dinnerwithgayle.com</a></p>
                </div>
			</div>
		</header><!--  end header section  -->
	</section><!--  end hero section  -->
    
    <div class="full">
    	<div class="wrapper">
        	<h1>Domain</h1>
        	<form action="https://my.mihost.co.za/domainchecker.php" method="post" style="margin: 0 auto;">
                 <input type="hidden" name="direct" value="true"  />
                 <center>
                 <input type="text" name="domain" size="20" class="domain" /> <div class="tlds"><select name="ext">
                                            <option>.co.za</option>
                                            <option>.com</option>
                                            <option>.co.uk</option>
                                            <option>.net.za</option>
                                            <option>.web.za</option>
                                            <option>.org.za</option>
                                            <option>.org</option>
                                            <option>.net</option>
                                            <option>.mobi</option>
                                            <option>.info</option>
                                            <option>.biz</option>
                                            <option>.joburg</option>
                                            <option>.capetown</option>
                                            <option>.durban</option>
                                            </select></div>
                                            </center>
                <br /><br /><br /><center><input type="submit" value="Check Domain" class="domainbutton" /></center>
            </form>
    		
        </div>
    </div>    
    
    <div class="footer">
    	<div class="footeritem">
        	<div class="footerheader">
            	<img src="img/logo.png" class="footerfish" />
                <h4>stay in touch</h4>
                <form action="">
                	<input type="text" class="footerinput" placeholder="email" />
                    <input type="submit" class="footersubmit" value=">" />
                </form>
            </div>
    		<p>dinnerwithgayle.com</p><br />
            <p>Meet our partners</p>
            <p>Why not meet some of our favourite dinner guests?</p><br />
			<ul>
            	<li>For Digital Marketing invite Iconic Media for dinner!</li><br /><br />
                <li>For Disruptive Advertising Solutions send an invite to Adloc8tor</li><br /><br />
                <li>For Print and Event Branding Solutions why not eat out with Dezzo Branding</li><br />
			</ul>
    	</div>
        <div class="footeritem" style="background-image:url(img/footerimg.png); background-position:left; background-repeat: no-repeat; background-size:cover;">
        	<div class="footerheader">
                <div class="social">
                    <a href=""><img src="img/twitter.png" alt="twitter" /></a>
                    <a href=""><img src="img/google+.png" alt="google+" /></a>
                    <a href=""><img src="img/facebook.png" alt="facebook" /></a>
                    <a href=""><img src="img/linkedin.png" alt="linkedin" /></a>
                    <a href=""><img src="img/instagram.png" alt="instagram" /></a>
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
</script>
</body>
</html>
