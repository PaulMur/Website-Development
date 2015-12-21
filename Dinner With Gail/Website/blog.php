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
	$item = $_GET['id'];
	$itemcontent = '';
	
	if ($item == 0) {
		$itemcontent = "
    <div class='blog'style='padding-bottom: 10px;'>
	<h3 style='font-size: 30px;'>blog</h3>
        <div class='wrapper' >
        <div class='center1'>
            <div class='blogitempage'>
                <h1>02-Dec</h1>
				<a href='blog.php?id=1' style='position: absolute; margin-top: 120px; margin-left: -13%;'><img src='img/learnmore.png' style='height: 30px; ' alt='learn more' /></a>
                <h4>The Social Struggle</h4>
                <p>For years, we have been told that social marketing is the way forward - but is there a limit?</p><br />
            </div>
            <div class='blogitempage'>
                <h1>28-Nov</h1>
				<a href='blog.php?id=2' style='position: absolute; margin-top: 120px; margin-left: -13%;'><img src='img/learnmore.png' style='height: 30px; ' alt='learn more' /></a>
                <h4>Emotive Barriers</h4>
                <p>Working day-to-day as a User Experience (UX) in digital, I find it apparent that today’s...</p><br />
            </div>
            <div class='blogitempage'>
                <h1>16-Nov</h1>
				<a href='blog.php?id=3' style='position: absolute; margin-top: 120px; margin-left: -13%;'><img src='img/learnmore.png' style='height: 30px; ' alt='learn more' /></a>
                <h4>DIY Websites</h4>
                <p>Deciding whether to tackle building a website yourself starts well before choosing a platform to build it with</p><br />
            </div>
        </div>
     	</div>
    </div><div class='blog' style='padding-bottom: 50px;'>
    	
        <div class='wrapper' >
        <div class='center1'>
            <div class='blogitempage'>
                <h1>26-Oct</h1>
				<a href='blog.php?id=4' style='position: absolute; margin-top: 120px; margin-left: -13%;'><img src='img/learnmore.png' style='height: 30px; ' alt='learn more' /></a>
                <h4>Persausive Conversion</h4>
                <p>When do persuasive conversion optimisation techniques become unethical?</p><br />
            </div>
            <div class='blogitempage'>
                <h1>14-Oct</h1>
				<a href='blog.php?id=5' style='position: absolute; margin-top: 120px; margin-left: -13%;'><img src='img/learnmore.png' style='height: 30px; ' alt='learn more' /></a>
                <h4>Conversion Rate</h4>
                <p>There are many metrics that businesses talk about when discussing the overall performance of their website.</p>
            </div>
            <div class='blogitempage'>
                <h1>11-Oct</h1>
				<a href='blog.php?id=6' style='position: absolute; margin-top: 120px; margin-left: -13%;'><img src='img/learnmore.png' style='height: 30px; ' alt='learn more' /></a>
                <h4>Overnight SEO Success</h4>
                <p>We’re long past the 3 and a half years since Google first rolled out their Penguin algorithm. In that time, the doom...</p>
            </div>
        </div>
     	</div>
    </div>";
	} else if($item == 1) {
		$itemcontent = "<div class='full'><div class='wrapper' style='padding: 0px 200px 0px 200px;line-height: 25px;'><h1>DIY websites: are they worth the risk?</h1><p>02-December-2015</p><p>Deciding whether to tackle building a website yourself starts well before choosing a platform to build it with.  As with any marketing decision, you first need to decide what you want your website to do.</p><p>If your goals are simple—promote your business, yourself, your cause—you may find a DIY solution that does the job just fine. But as soon as you start adding goals like offering more than a handful of things for sale, taking payments online, and making your business stand out and grow, things start getting more complicated.</p><center><b>Web Design and Development Differences</b></center><br /><p>One of the first things you need to understand is the difference between design and development. Design has to do with how your site looks, and development is about how it works.</p><center><b>DIY vs. Professional Website Design</b></center><br /><p>There are lots of web design tools that let an inexperienced person build a site that looks nice. It’s largely a matter of how good an eye you have. From there, it’s mostly a “paint-by-the-numbers” process. That’s also a limitation, though, since you’re restricted to the “numbers” they give you to paint with. Those are the same numbers (usually called “templates”) they give to thousands—or in some cases, millions—of other people. The result? You end up with a cookie-cutter design that’s just like hundreds of other sites and lacks many of the features today’s shoppers have come to expect.
A professional website designer can create a site with visual impact and layout that’s unique to you. Plus, they’re up-to-date on the latest design trends and techniques because it’s their job.</p><center><b>Professional and DIY Website Development</b></center><br /><p>Website development has to do with all the hidden things that make your website work. It’s what you see when you lift up the hood and start seeing where all those hundreds of lines of code are, what they do, and whether they’re working right.
On a DIY website, you’re copying code from a template and presuming it’s optimized for your needs. It’s part one-size-fits-all and part MacGyver-style making do with what’s lying around. Here again, if your needs are simple, that may work.
</p><p>But what if you want a product database to show what you have to sell? OK, there’s a plug-in for that. How about a shopping cart, or a payment system? There are plug-ins for those, too. But unless you know how to read, write, and analyze code, do you really know what you’re getting? Does plug-in A work well with plug-in B? Does the plug-in you added for email blasts share your mail list and other customer data with the guy you got it from? What sort of access are you potentially granting a stranger to your system? Does it have built-in safeguards against hackers and will it let you know if there’s an intrusion?</p><center><b>Benefits of Hiring a Professional Web Developer</b></center><br /><p>Professional website developers know how to build sites that take all these factors into consideration so that your site functions properly and safely, making your users’ experience a pleasant one that makes them want to keep coming back. And they know how to optimize your site so it ranks high on searches instead of getting lost in the crowd.</p><p>The Gayle team can help ensure that your company’s e-commerce business delivers all its potential. Our design and development teams will make your site user-friendly and content-rich to drive up its rankings.</p></div></div>";
	} else if ($item == 2) {
		$itemcontent = "<div class='full'><div class='wrapper' style='padding: 0px 200px 0px 200px;line-height: 25px;'><h1>Can adding 'emotive barriers' improve user experience?</h1><p>28-November-2015</p><p>Working day-to-day as a User Experience (UX) in digital, I find it apparent that today’s websites are becoming categorised by a pre-defined niche, with designs heavily influenced by competitors. This ‘sheep-like’ behaviour is making the web more and more bland - with similar-style websites cropping up all over the place. I’d say that 95% of the commercial web is becoming ever more similar, managing to fit into one of the following categories:</p><center><ul style='margin: 0 auto; width: 100%; list-style: none; color:#439393 ;'><li>Brand awareness</li><li>Marketing campaigns</li><li>Content-driven</li><li>Service-based application</li><li>Commerce</li></ul></center><br /><p>The term ‘best practice’ (in huge, house-sized inverted commas) is also a large influencing factor to design decision-making. “It worked for these guys, so it will definitely work for us”. That ‘best practice’ design change or extra piece of functionality will most likely have a positive impact, but is that impact the best approach for the business? Could you stand out more?</p><p>As web professionals, we need to think holistically about our end-user, and always remind ourselves that they are a real, cognitive person, rather than a metaphorical ‘thing’, on the other side of the screen. We focus too much on the safest routes to meet business objectives and only the very basic wants and needs of our end-user. Yes... People want to consume information faster than ever, but by fully adhering to this principle alone, you are losing personality and becoming ‘beige’. Your brand-new website becomes the same as the next one. Isn’t it time to start standing out? Isn’t it time to start being brave? As Steve Jobs famously stated: “Innovation distinguishes between a leader and a follower”.
HOLISTIC HURDLES
The term ‘barrier’ is nearly always recognised as a negative phrase - but it really doesn’t need to be. When I talk about barriers, don’t think 20ft prison wall. Instead, think front-garden gate.
There are always many lessons we can learn from similar industries that instigate human interaction, but we need to focus on which key element is missing from the current conversation and conversion process. What is this key element in web design? Enacting emotion.
</p><center style='color: #439393;'>'Joy is but the sign that creative emotion is fulfilling its purpose.' - Charles Du Bos</center><br /><p>Even the internet had a tricky start emotively connecting with it’s users, it’s origins in CERN were not the most personable.</p><center style='color: #439393;'>“I just had to take the Hypertext idea and connect it to the Transmission Control Protocol and Domain Name System ideas and—ta-da!—the World Wide Web”
Tim Berners-Lee
</center><br /><p>Nice one Tim, can’t thank you enough. However, the more our online environment is re-purposed and the more time our audiences spend accessing content the more savvy the web industry must become.</p><p>People seemingly want their website to have an “easy-to-use” and “flawless” user experience. But shouldn’t this be implied by now? When we talk about modern UX design, we need to push deeper and actually define these statements. 
BEING HUMAN
On the surface we are all very different. But underneath these individual mental guises lies ubiquitous traits that can all be challenged in the same way. The games industry are true leaders in approaching emotion. Agreed, their challenges (and budgets!) are very different to that of the Digital industry but we can learn some vital lessons. Video games seem to understand what a learning curve can do for engaging a user. Basic interactions that we learn within the first minute of using the web are continually reinvented and coupled with other emerging functionality patterns. Dare I even mention the emotional impact of audio? No?... OK - Nevermind then.
</p><p>CHANGE FOR THE BETTER
People like change - they just don’t realise it. Well... they do if you get it right! Change causes a cognitive change which influences the user in a positive way. These emotional experiences have a deep impact on our memory, and can be achieved through many delivery mechanisms, aesthetics, interactions or pure & simple emotive copy. The more conversations start to sound colloquial, the more our users can feel immersed whilst interacting with our web experiences.
</p><p>Creating a better web experience is simply a case of finding the right balance between consuming the user’s limited time whilst also creating an emotive pull. It’s not simply a case of focusing on edge-case scenarios and personas, but instead focusing on the majority and getting that part very right. This doesn’t just apply to the web. In all walks of life, if you can deliver your personality correctly, both conversationally and aesthetically, and at the same time remember that the learning process is iterative then the majority of the hard work is done. We need to start accepting that our end-user’s are smart and want a more fulfilled experience.</p><p>Although the introduction of these ‘positive barriers’ seems a bit counterintuitive at first glance it can improve user engagement considerably. With close attention to detail, iteration and heavy analysis, you can ultimately improve goal conversion and online engagement. This has already been echoed in the web app world, with gamification helping to give rewards for people taking the time to learn a service.</p><center style='color: #439393;'>“I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel”
Maya Angelou
</center><br /><p>With emerging technical capabilities within browsers and networks, and the encroaching behavioural science advances, digital is going to become increasingly exciting over the next 12 months.</p></div></div>";
	} else if ($item == 3) {
		$itemcontent = "<div class='full'><div class='wrapper' style='padding: 0px 200px 0px 200px;line-height: 25px;'><h1>DIY websites: are they worth the risk?</h1><p>16-November-2015</p><p>Deciding whether to tackle building a website yourself starts well before choosing a platform to build it with.  As with any marketing decision, you first need to decide what you want your website to do.</p><p>If your goals are simple—promote your business, yourself, your cause—you may find a DIY solution that does the job just fine. But as soon as you start adding goals like offering more than a handful of things for sale, taking payments online, and making your business stand out and grow, things start getting more complicated.</p><center><b>Web Design and Development Differences</b></center><br /><p>One of the first things you need to understand is the difference between design and development. Design has to do with how your site looks, and development is about how it works.</p><center><b>DIY vs. Professional Website Design</b></center><br /><p>There are lots of web design tools that let an inexperienced person build a site that looks nice. It’s largely a matter of how good an eye you have. From there, it’s mostly a “paint-by-the-numbers” process. That’s also a limitation, though, since you’re restricted to the “numbers” they give you to paint with. Those are the same numbers (usually called “templates”) they give to thousands—or in some cases, millions—of other people. The result? You end up with a cookie-cutter design that’s just like hundreds of other sites and lacks many of the features today’s shoppers have come to expect.
A professional website designer can create a site with visual impact and layout that’s unique to you. Plus, they’re up-to-date on the latest design trends and techniques because it’s their job.
</p><center><b>Professional and DIY Website Development</b></center><br /><p>Website development has to do with all the hidden things that make your website work. It’s what you see when you lift up the hood and start seeing where all those hundreds of lines of code are, what they do, and whether they’re working right.
On a DIY website, you’re copying code from a template and presuming it’s optimized for your needs. It’s part one-size-fits-all and part MacGyver-style making do with what’s lying around. Here again, if your needs are simple, that may work.
</p><p>But what if you want a product database to show what you have to sell? OK, there’s a plug-in for that. How about a shopping cart, or a payment system? There are plug-ins for those, too. But unless you know how to read, write, and analyze code, do you really know what you’re getting? Does plug-in A work well with plug-in B? Does the plug-in you added for email blasts share your mail list and other customer data with the guy you got it from? What sort of access are you potentially granting a stranger to your system? Does it have built-in safeguards against hackers and will it let you know if there’s an intrusion?</p><center><b>Benefits of Hiring a Professional Web Developer</b></center><br /><p>Professional website developers know how to build sites that take all these factors into consideration so that your site functions properly and safely, making your users’ experience a pleasant one that makes them want to keep coming back. And they know how to optimize your site so it ranks high on searches instead of getting lost in the crowd.</p><p>The Gayle team can help ensure that your company’s e-commerce business delivers all its potential. Our design and development teams will make your site user-friendly and content-rich to drive up its rankings.</p></div></div>";
	} else if ($item == 4) {
		$itemcontent = "<div class='full'><div class='wrapper' style='padding: 0px 200px 0px 200px;line-height: 25px;'><h1>When do persuasive conversion optimisation techniques become unethical?</h1><p>14-October-2015</p><p>A careful balance we all need to take when designing an application or a website, is making sure we know how to draw the line between unethical and persuasive User Experience (UX). For some, there is no difference, for others, it’s a fine line to which we need to tread carefully. And for the user, it simply comes down to enjoying an honest experience.
So what are the main differences, if any? Isn’t it the job of a UX practitioner to persuade a user to complete a certain task? To buy a certain product? How much influence does a design have on a user’s free will? Surely the whole point of UX is to influence within the boundaries of free will, to create the optimum environment whereby the user can make a positive decision.
</p><p>It should be easy to establish whether or not one is being forgivably persuasive or downright unethical in design - we should be helping the user to make an informed decision, working in favour of their personal goals, as opposed to creating an environment where the user makes a positive decision solely in favour of the site’s goal, where it may or may not necessarily be the most ‘informed’ choice. Is the tiny tick box to ‘automatically resubscribe’ helping the goal of the site’s objective rather than a convenient piece of UI for the user’s benefit? I’d say yes, and this is what I mean. Yet, for some reason, this is tolerated. If you were lucky enough to spot it and you didn’t want it, you’d simply untick and exclaim ‘you nearly got me there!’ - but what we should really do is vote with our close button. Why is open online trickery still tolerated?</p><p>But this is where it gets tricky. Any agency worth their salt understand the value of conversion optimisation - ensuring the highest number of visitors complete a positive action. No client brief favours a ‘well informed’ decision as a KPI. Clients come to agencies to create designs that do influence positively the free will of the user to suit the needs of the business.</p><p>Some would argue that UX cannot influence free will. If someone wants a service, they buy it, if someone doesn’t, then they won’t - no matter how well designed the site. If that was really the case, then there would be no UX industry, and arguably not even an advertising industry. Unfortunately (or fortunately depending on your angle), humans are subject to manipulation.</p><p>For me, psychological manipulation is fine, so long as the user understands what they’re doing, and nothing is intentionally hidden or misrepresented. That’s all above board and part of the game. Where it starts to get unethical, is when we intentionally guide the user away from an informed decision. Yet it still happens, in UX and customer experience as a whole. There will be others that disagree as everyone has a place on the spectrum, but I still think it’s interesting to see what is generally considered good practice vs damn right cheeky.</p><center><b>Respect your users</b></center><br /><p>The bottom line for me is, it’s fine to persuade, because that’s just the art of selling, but to intentionally sell something you know the user doesn’t really want is a mark of a bad business across the board - not just in UX. Be that a retail shop automatically including a warranty, or a phone company using clever wording to tie you into a gimpsuit of a contract, it’s a sign that they simply do not respect their customers.
Chasing only high conversion rates, and ignoring a quality customer experience is a sure-fire route to long term failure. It’s a shame that job satisfaction, or the want to provide a great service doesn’t carry more currency with people. If we only have short-term profits in mind, we become a faceless corporation. Happier customers create a longer term revenue stream, and I would have zero pride or job satisfaction in creating a high converting website if I had to use unethical or underhand methods to achieve it - It’s disrespectful to the user. As internet literacy grows, I hope this becomes universally intolerable, and not just an eye-rolling annoyance.
</p></div></div>";
	} else if ($item == 5) {
		$itemcontent = "<div class='full'><div class='wrapper' style='padding: 0px 200px 0px 200px;line-height: 25px;'><h1>Why your conversion rate is pobably misleading you</h1><p>14-October-2015</p><p>There are many metrics that businesses talk about when discussing the overall performance of their website. However, when we speak to businesses, there are always two specific metrics that they mention off the top of their heads. Traffic levels and conversion rates. There are plenty of different services that will accurately measure how many people are visiting your website. The problem is, conversion rate is a little bit more complex than you might think.</p><p>Conversion rate is generally understood to align with the following formula:
Conversion Rate = Website Goal Completion / Number of Visits
Even free services such as Google Analytics give this sort of information and typically this is the metric that most businesses will look at to prove online success. Measuring your conversion rate, and then optimising it (known as conversion rate optimisation - CRO) is a fantastic way to help improve your websites overall performance. We advocate this, but in isolation, it can be a very misleading metric. Here’s why.
</p><center><b>Conversion confusion</b></center><br /><p>Digital marketeers typically invest their budgets on traffic sources that manage to convert at the highest rate. This is called ‘last click attribution’ and is what 95% of businesses are doing. It’s the traditional way of doing things and seems to make sense, you’ll likely be getting a better ROI on these channels right? Not necessarily. The 7 most expensive words in business are: “We have always done it that way”
When you analyse the browsing behaviors of your visitors, it’s very likely that many of them will actually need to visit your website multiple times before reaching a goal/converting. This will be most significant in competitive or price sensitive markets, but does apply to everyone.
</p><p>When people visit your website multiple times, it’s very likely that they have come from different sources on each occasion. For example, it’s common for someone to find a site through PPC (Pay Per Click) advertising, leave, and then come back via a brand name organic search on Google. Often customer journeys are much more complex than this - but you get the general idea!</p><center><b>So how can I track these fragmented conversions?</b></center><br /><p>Using the last click attribution, Google Analytics will be telling you that in the above scenario, your PPC traffic is converting poorly, and organic traffic converting highly. In this instance, if you were to switch off your ‘poorly-converting’ PPC advertising, your converting traffic will start to plummet. This is one of the reasons why PPC has a bad name for some and is seen as overly expensive.</p><p>If you track your traffic sources across multiple visits, you can start to develop an accurate picture of what marketing channels are contribution to a multi-visit conversion. This is called an Assisted Conversion because each source plays a part in securing the customer or lead. This overall approach is called Beyond Last Click and can be visualised in Google Analytics using Multi-Channel Reports and Attribution Models. The great thing is, it works out of the box so long as you have decent Goal Tracking in place.
Log-in to Google Analytics and start exploring the Multi-Channel reports to see your ‘beyond last click’ conversion rate. It is far less misleading than the generic conversion rate metric.
</p></div></div>";
	} else if ($item == 6) {
		$itemcontent = "<div class='full'><div class='wrapper' style='padding: 0px 200px 0px 200px;line-height: 25px;'><h1>SEO success won't happen overnight</h1><p>11-October-2015</p><p>We’re long past the 3 and a half years since Google first rolled out their Penguin algorithm. In that time, the doom and gloom merchants have circled and everyone has proclaimed that SEO is dead and not worth the time and effort. At least what many always thought of as SEO; buying thousands of 'exact match anchor text' links from India and the Far East which point to 'money pages', stuffing title, meta and h1 tags with keywords, writing gibberish content and generally having little concern for user experience and their journey through your website. Sounds painful and not particularly productive but sadly effective in certain circumstances.</p><p>The sad fact is that those approaches used to work, and for many, they worked exceptionally well and because of this, many business owners are still stuck in the mindset that SEO is a quick and cheap way to bring in business. Its a bit like those that brought followers and likes for Social Media - so doable and yet meaningly pointless in terms of quality conversion. However when working with algorithms and computer systems, you play the game and system. Getting number Google page positions is not a fair game, there are numerous instances of businesses who have experienced prime ranking positions across very competitive, commercial terms which made them hundreds of thousands, if not millions of pounds. Were they the best in their field? Did they deserve to be there? No, of course not. They simply knew where to buy links from and 'gamed' the system.</p><p>Let’s not dwell on the past though as Google has stayed true to its word and the majority of these businesses have received either a manual or an algorithmic penalty with some having recovered and others still stuck with rankings way, way below where they used to be. Are they still turning over the money they were back in what they'll dub their 'glory days' of top rankings? To know if they are still successful - it is impossible to tell but their organic rankings have depleted and the revenue streams are probably not as fluent as they once were.</p><p>What is staggering though is the attitude of some of these companies - many refuse to accept that SEO has changed. Long gone are the days when a website's rankings can be sustained by 'breaking the rules' or 'gaming the system' and it's debatable as to whether SEO, on it's own, is even a marketing approach anymore. To us, SEO is one piece in the digital marketing jigsaw, where a progressive and long-term plan will bring results that are sustainable and long-lasting.</p><p>If you want quick results; put your money into AdWords. Be warned, however. You may see almost instantaneous results (if you know what you're doing) but in the long-run, it will cost you far more than it would have done to build up an organic presence in a natural and organic manner; through the creation, distribution and sharing of high quality content. Enabling your website to best work with SEO though is of paramount importance - too many times we see sites that are badly built behind the scenes to let SEO work in the way they hope. What is it that they say about the emperor's new clothes…</p><p>The days of 'Black hat' approaches should never have worked to rocket businesses to the top of the search engines but they did...until Google decided that enough was enough and came down like a tonne of bricks on those deemed to be offenders of violating their guidelines. Too many agencies told clients that the links were natural, safe and worthwhile - knowing fully well that what they were doing strongly violated Google's guidelines but it delivered quick and cheap results for clients...making them look like heroes and SEO wizards.
</p><p>The problem still remains though that too many people are stuck in their old ways, thinking the same conditions apply and refusing to accept that changes and conditions have been made and you need to play by the new rules defined by Google. SEO takes time - even in uncompetitive niches (if they even exist anymore) but you probably won’t see an ROI on your efforts for at least 6 months. SEO has changed and evolved almost beyond recognition over the past three years and it's now simply one part of a wider digital marketing strategy. Yes, there's no denying that strong search engine rankings are very valuable to a business, but that doesn't mean you can cut corners and get away with it.</p><p>As an agency we pride ourselves on the hard work we do for clients - but expectations need to be realistic and we won’t commit to delivering instant results unlike some of our counterparts. If you want that option - be our guest and then when you receive a penalty after a few months and the revenues slide back to zero and your digital footprint is forever tarnished - we’ll try and not smugly say ‘ Told you so!’ Be realistic, patient and look at the long term plan and try to remember that Rome wasn't built in a day and neither was a sustainable organic search engine presence.</p><p>If you're not prepared to invest in SEO (alongside the wider approaches needed to see your business succeed online) for at least 6 months without seeing a return,you're playing a very dangerous game. As an agency we try and educate clients on how it'll take 6 months or more to see successes are the ones you need to be working with...not those who tell you you'll be on page one within 4 weeks for your main money term.</p><p>It takes time to build up the authority of a site on the search engines but trust us when we say that the returns from strong positions in 2015 are far greater than they've ever been before and so long as you take the right approach which works alongside Google’s guidelines, you'll see successes continue for a long time, without having to worry about the next web spam update that Google drop.</p></div></div>";
	} else {
		$itemcontent = "Error";
	}


?>
<!--/PHP SCRIPT-->
</head>

<body>
<div class="se-pre-con"></div>
	<section class="herob">
		<header>
			<div class="wrapper">
				<a href="/"><img src="img/logo.png" class="logo" alt="" titl=""/></a>
				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="work.php">work</a></li>
						<li><a href="index.php#menuall">our menu</a></li>
						<li><a href="index.php#createown">create your own</a></li>
						<li class="current"><a href="blog.php?id=0">blog</a></li>
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
    
    
    <?php echo $itemcontent; ?>
    
    
    
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
</script>
</body>
</html>
