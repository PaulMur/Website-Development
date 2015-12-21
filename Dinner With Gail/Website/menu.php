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

<!--PHP SNIPPIT-->
<?php 

	$item = $_GET['id'];
	$alltime = "";
    
    if($item == 1) {
		$backtext = "img/webpback.png";
    	$alltime = "<div class='full' style='background-image: url(" . $backtext . "); background-size:contain; background-repeat:no-repeat;background-position:right;'><div class='wrapper' style='padding: 0px 200px 0px 200px;'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>web development</h2><p style='font-size: 16px; line-height:25px;'>In today's technology-centered world, 
                    your website is often the first impression potential customers have of your business, and it must capture the user's attention and engage them instantly.</p>
                    <p style='font-size: 16px; line-height:25px;'>We are a web design company that specializes in distinctive and innovative 
                    websites with cutting edge features, tailored to your specific business. From responsive design to original artwork, our website design process is both 
                    creative and comprehensive.</p><p style='font-size: 16px; line-height:25px;'>Your business vision and goals will always be at the forefront of our designs. We aim to create an excellent user 
                    experience coupled with strong branding and messaging.  By tying the look and feel of the website together with your corporate logo and other marketing 
                    materials, your online impact will be remarkable.</p><p style='font-size: 16px; line-height:25px;'>We work with customers of all sizes across a variety of industries, and our services are 
                    customizable according to your needs. Your website will be optimized for best performance, from copywriting options to integrated marketing analysis tools. 
                    Thanks to us, your competition will be comprehensively beaten in no time!</p><p><br />
<a href='mailto:reservations@dinnerwithgayle.com' class='emailbutton' style='color: #fff;'>
                    Book your dinner with Gayle to get started!</a></p></div></div><br /></div>";
		$backlink = "img/webheader.png";
		
    }  else if ($item == 2) {
		$backtext = "img/ecommercepback.png";
    	$alltime = "<div class='full'  style='background-image: url(" . $backtext . "); background-size:contain; background-repeat:no-repeat;background-position:left;'><div class='wrapper' style='padding: 0px 200px 0px 200px;'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>e-commerce</h2><p style='font-size: 16px; line-height:25px;'>We understand that if your business wants to expand to sell your products online, your business hinges directly on the fluidity and functionality 
                    of your website. We focus on creating an easy to use and innovative user interface, that will attract new customers. We implement every e-commerce website 
                    with a backend CMS, that will allow for product management and direct connection to your current shipping solution. From the industry standard Magento, to custom 
                    solutions we will figure out the best way to take your business to new heights!</p><p><br />
<a href='mailto:reservations@dinnerwithgayle.com' class='emailbutton' style='color: #fff;'>
                    Book your dinner with Gayle to get started!</a></p></div></div><br /></div>";
		$backlink = "img/ecommerce.png";
    } else if ($item == 3) {
		$backtext = "img/iospback.png";
    	$alltime = "<div class='full'  style='background-image: url(" . $backtext . "); background-size:contain; background-repeat:no-repeat;background-position:left;'><div class='wrapper' style='padding: 0px 200px 0px 200px;'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>ios & android app design</h2><p style='font-size: 16px; line-height:25px;'>Let us help develop your iOS and Android Applications.  Our dinner table contains expert app developers across both platforms 
                    and this group are constantly looking for new and interesting Application projects to work on.  After submitting your project idea to us, we’ll review it and have 
                    one of our programmers contact you.  All our programmers are capable of assisting you with any aspect of Application Development, and this includes everything from 
                    planning out your idea, to graphic interface design, right through to the Apple App Store or Play Store submission process.</p><p>
                    <br /><a href='mailto:reservations@dinnerwithgayle.com' class='emailbutton' style='color: #fff;'>
                    Book your dinner with Gayle to get started!</a></p></div></div><br /></div>";
		$backlink = "img/ios.png";
    } else if ($item == 4) {
		$backtext = "img/graphicpback.png";
    	$alltime = "<div class='full'  style='background-image: url(" . $backtext . "); background-size:contain; background-repeat:no-repeat;background-position:right;'><div class='wrapper' style='padding: 0px 200px 0px 200px;'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>graphic design</h2><p style='font-size: 16px; line-height:25px;'>Our custom designs have a long standing reputation of effectively summarizing a company’s business philosophy while clearly identifying areas 
                    of expertise into their customized logo, corporate identities and brand creation services.  Branding is the process of turning your business and services into a 					household name by establishing a unique presence that makes you stand out from your competitors.  With the use of a unique logo, designed by the team at Dinner With 
                    Gayle, your business will acquire the brand recognition needed to support its competitive edge.  Whether you require branding or simply digital images 
                    for your social media channels, come have dinner with us for all your design solutions.</p><p>
                    <br /><a href='mailto:reservations@dinnerwithgayle.com' class='emailbutton' style='color: #fff;'>
                    Book your dinner with Gayle to get started!</a></p></div></div><br /></div>";
		$backlink = "img/graphic.png";
    } else if ($item == 5) {
		$backtext = "img/digitalpback.png";
    	$alltime = "<div class='full' style='background-image: url(" . $backtext . "); background-size:contain; background-repeat:no-repeat;background-position:right;'><div class='wrapper' style='padding: 0px 200px 0px 200px;'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>digital marketing</h2><p style='font-size: 16px; line-height:25px;'>The team at Gayle understands the importance of social & digital marketing and, therefore, urges all our clients to utilize it to drive 
                    more traffic to your website.  Your website should be the biggest tool your business has to generate sales and revenue.  This can only be achieved through a 
                    comprehensive digital marketing solution the includes social media, SEO, thought leadership, paid advertising, and much more.  While we use our team of experts to 
                    optimize all our sites for digital marketing, we allow our sister company Iconic Media to plan and execute your marketing strategy which will be specifically 
                    designed for your business and market.  Why not check them out to grow your sales immediately?  Tell them we sent you!</p><p>
                    <br /><a href='mailto:info@iconicmedia.co.za'  class='emailbutton' style='color: #fff;'>
                    Book your date with Iconic Media!</a></p></div></div><br /></div>";
		$backlink = "img/marketing.png";
    } else if ($item == 6) {
		$backtext = "img/creativepback.png";
    	$alltime = "<div class='full' style='background-image: url(" . $backtext . "); background-size:contain; background-repeat:no-repeat;'><div class='wrapper' style='padding: 0px 200px 0px 200px;'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>creative</h2><p style='font-size: 16px; line-height:25px;'>The Gayle team are aiming to be the best in the web, and we want to take you with us! Our collaborative, results-driven process is built 
                    on communication. Beginning with defining your goals, timeline and building a contract to support the scope of your project, we take off. Our designers develop 
                    mockups for your website, video aspects are storyboarded, copywriters interview relevant personnel and content development starts in 
                    earnest.</p><p style='line-height:25px;'>Our mantra at Gayle is a simple one - We believe in doing what we do well versus claiming to be experts in everything. 
                    (We’ve heard that story too many times when new clients come to us to save their sites when another designer has let them down.) 
                    To that end, we’ve established solid partnerships with expert digital marketers, photographers & videographers, 
                    illustrators, animators and other vendors to give you every connection of expertise possible.  We bring it all together 
                    so your business is the best at being online as it can be.</p><p>
                    <br /><a href='mailto:reservations@dinnerwithgayle.com' class='emailbutton' style='color: #fff;'>
                    Book your dinner with Gayle to get started!</a></p></div></div><br /></div>";
		$backlink = "img/creative.png";
		
    } else {
    	$alltime = "<div class='full'><div class='wrapper'><div class='center'>
            		<h2 style='font-size: 30px; margin-bottom: 20px;'>No menu item with the id of " . $item . "</h2><p style='font-size: 16px;'>Please try again</p><p>
                    <br />
<a href='mailto:reservations@dinnerwithgayle.com' style='background-color: #439393; padding: 10px 20px 10px 20px;color: #fff;border-radius: 6px;width: 600px;'>
                    Book your dinner with Gayle to get started!</a></p></div></div><br />
</div>";
		$backlink = "img/menuheader.png";
    }
    

?>
<!--/PHP SNIPPET-->


</head>

<body>
<div class="se-pre-con"></div>
	<section class="herom" style="background-image: url(<?php echo $backlink; ?>);">
		<header>
			<div class="wrapper">
				<a href="/"><img src="img/logo.png" class="logo" alt="" titl="" /></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="work.php">work</a></li>
						<li class="current"><a href="index.php#menuall">our menu</a></li>
						<li><a href="index.php#createown">create your own</a></li>
						<li><a href="blog.php?id=0">blog</a></li>
						<li><a href="company.php">company</a></li>
                        <li><a href="webhosting.php">web hosting</a></li>
                        <li class="endofnav"><a href="index.php#footer">contact us</a></li>
                        
					</ul>
					
				</nav>
                <div class="toppanel">
                	<p id="top">inquiries? call 031 764 0702&nbsp;<a href="mailto:reservations@dinnerwithgayle.com">reservations@dinnerwithgayle.com</a></p>
                </div>
			</div>
		</header><!--  end header section  -->
	</section><!--  end hero section  -->
    <div id="web"></div>
    
	<?php echo $alltime; ?>    
    
    
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
            <a href="webhosting.php">
                <div class="reachbut2">
					is your domain available?
                </div>
            </a>
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
</script>
</body>
</html>
