<?php
	require_once("../base.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Amp Tags -->
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
		<!-- Header Meta Tags -->
		<title>What is Motivation?</title>
		<meta name="robots" content="index,follow" />
		<meta name="description" content="<?php echo $description; ?>"/>
		<meta name="keywords" content="<?php echo $keywords; ?>"/>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<!-- Social Meta Tags -->
		<meta property="og:title" content="<?php echo $websitename; ?>"/>
		<meta property="og:description" content="<?php echo $description; ?>"/>
		<meta property="og:image" content="<?php echo $host; ?>../images/social-logo.jpg"/>
		<meta property="og:url" content="<?php echo $host; ?>"/>
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta name="twitter:title" content="<?php echo $websitename; ?>"/>
		<meta name="twitter:description" content="<?php echo $description; ?>"/>
		<meta name="twitter:image" content="<?php echo $host; ?>../images/social-logo.jpg"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="../favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="../favicon-16x16.png">
		<link rel="manifest" href="../site.webmanifest">
		<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#999999">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#ffffff">
		<!-- Styles -->
		<style>
			html, body, * {box-sizing:border-box;}
			body {margin:0;padding:0;background:#fff;color:#222;font-family:Arial,sans-serif;font-size:16px;}
			a, a:hover, a:active, a:visited {color:rgb(63, 94, 251);text-decoration:none;}
			h1,h2,h3,h4,h5,h6 {margin:0;line-height:1.2em;}
			h1 a, h1 a:visited, h1 a:active, h1:hover a {color:black;}
			p {margin:0;}
			ul {margin: 30px auto;padding: 0;max-width:900px;width:100%;}
			ul li {margin: 10px auto;text-align: left;}
			hr {color:#f5f5f5;border:1px solid #f5f5f5;}
			button {-webkit-tap-highlight-color:  rgba(255, 255, 255, 0);}
			table, th, td { border:1px solid black;}
			table {width:100%;}
			a.button {display:inline-block;margin:10px 0;font-weight:700;font-size:16px;background:rgb(63, 94, 251);color:#fff!important;border:1px solid rgb(63, 94, 251);border-radius:5px;-webkit-border-radius:5px;padding:10px 30px;cursor:pointer;margin:0 0.5vw;letter-spacing:0.03em;-webkit-tap-highlight-color:  rgba(255, 255, 255, 0);box-shadow:0 1px 1px rgba(0,0,0,.3);}
			#header {text-align:center;max-width:940px;width:100%;padding:0 20px;margin:105px auto 10px auto;}
			.logoimage {vertical-align:middle;margin-right:12px;margin-bottom:3px;}
			.logotext {vertical-align:middle;}
			#content {text-align:center;}
			.content-inner {padding:0 20px;max-width:940px;margin:20px auto 0 auto;width:100%;min-height:auto;}
			.section.major {margin:25px 0 25px 0;}
			.section.minor {margin:16px 0 16px 0;line-height:1.6em}
			.subtitle-major {font-size:24px;}
			.subtext-major {font-size:18px;color:#444;font-weight:700;margin-top:15px;line-height:1.3em;}
			.subtitle-minor {font-size:20px;color:#444;}
			.subtext-minor {font-size:16px;color:#444;margin-top:15px;line-height:1.6em;}
			.subtext-wrapper {margin:25px 0;}
			a.related-timers {display:inline-block;margin:6px 9px;}
			.blogpost.subtext-wrapper {max-width: 600px;margin-left: auto;margin-right: auto;}
			.blog-post.subtext-minor {padding: 15px 0 15px 0;}
			.blog-post-title {margin-bottom:5px;display:block;}
			.blog-excerpt p {display:inline;}
			.blog-excerpt a {display:inline-block;}
			.footer {color:#fff;background:#444;}
			.footer .slide-inner {padding:50px 0 50px 0;text-align:center;width:calc(100% - 30px);margin:0 auto;}
			.footer .slide-inner a {color: #fff;margin: 6px 9px;display:inline-block;}
			.footer .slide-inner p {margin:30px 0 0 0;}
			.copyright {margin-top:100px;font-size:12px!important;}
			/* Menu */
			#menu-burger {display:block;position:absolute;font-size:30px;font-weight:700;top:0;right:40px;border-radius:50%;-webkit-border-radius:50%;background:#fff;color:#222;opacity:0.9;text-align:center;padding:3px 10px 4.5px 10px;width:47.5px;height:47.5px;cursor:pointer;-webkit-user-select: none;-moz-user-select: none;-ms-user-select: none;user-select: none;-webkit-tap-highlight-color:  rgba(255, 255, 255, 0);z-index:2;}
			#menu-nav {display:none;position:fixed;top:0;left:0;height:100vh;width:calc(100% - 90px);background:#fff;color:#222;max-width:800px;box-shadow:5px 0 5px rgba(0,0,0,0.05);-webkit-box-shadow:5px 0 5px rgba(0,0,0,0.05);z-index:99;overflow-y: scroll;}
			#cover {display:none;position:fixed;top:0;left:0;width:100vw;height:100vh;background:rgba(0,0,0,0.7);z-index:98;}
			.nav-inner {padding:20px;font-size: 16px;}
			.nav-header {font-weight:700;color:#888;line-height:1.6em;}
			a.nav-item {display:block;line-height:1.6em;padding:10px;background:#f5f5f5;border-radius:5px;-webkit-border-radius:5px;margin:4px 10px 4px 10px;}
			/* Tool */
			#tool {display:inline-block;vertical-align:top;color:black;margin:15px auto 3.5vw auto;width:100%;max-width:450px;}
			#control-panel {margin-top:0;}
			.control {display:inline-block;min-width:300px;font-weight:700;font-size:16px;background:#f1f1f1;color:#444;border:1px solid #f1f1f1;border-radius:5px;-webkit-border-radius:5px;padding:12px 30px;cursor:pointer;margin:0 0.5vw;letter-spacing:0.03em;box-shadow: 0 1px 1px rgba(0,0,0,.15);}
			.control:hover {background:#222;color:#fff;border-color:#222;}
			#control {color:#fff!important;background:rgb(63, 94, 251)!important;border-color:rgb(63, 94, 251)!important;box-shadow:0 1px 1px rgba(0,0,0,.3);}
			.control.sm {color:#222;font-size:13px!important;padding: 3px 15px!important;display:inline-block!important;line-height:1!important;margin:3px!important;}
			.control.sm:hover {color:#fff;background:rgb(63, 94, 251);border-color:rgb(63, 94, 251);}
			#form-title {font-size:20px;font-weight:700;margin-bottom:20px;}
			#form-wrapper {display:block;margin-bottom:10px;}
			input[type=date] {font-family: Verdana, sans-serif;font-size:18px;border-radius:4px;background:#fff;border:2px solid #ddd;padding:9px 5px;min-width:300px;text-align: center;}
			/* Ads */
			.ad-placeholder {width:100%;height:100%;background:#fafafa;}
			.topad {display:block;width:100%;max-width:900px;height:auto;min-height:250px;max-height:360px;margin:0 auto 15px auto;}
			.bottomad {width:100%;max-width:100%;margin:30px auto 0 auto;min-height: 250px;}
			.bottomad2 {width: 100%;max-width: 100%;margin: 25px auto 0 auto;min-height: 250px;}
			.leftad, .rightad {width:300px;height:250px;display:inline-block;vertical-align:top;}
			.leftad {margin-right:20px;}
			.rightad {margin-left:20px;}
			.fixedtopad {background:white;overflow:hidden;z-index:2;width:100%;max-width:100%;height:90px;max-height:90px;position:fixed;top:0;left:0;text-align:center;-webkit-overflow-scrolling: touch;}
			.fixedtopad .adsbygoogle {height:90px;max-height:90px;}
			.fixedbottomad {background:white;overflow:hidden;display:none;z-index:2;width:100%;max-width:100%;height:90px;max-height:90px;position:fixed;bottom:0;left:0;text-align:center;-webkit-overflow-scrolling: touch;}
			.fixedbottomad .adsbygoogle {display:none;height:90px;max-height:90px;}
			/* Dynamic Styles*/
			@media only screen and (max-width: 650px) and (min-height: 721px) {
				h1 {font-size:30px;}
				#menu-burger {color:#222;background:#fff;top:0;right:10px;}
				#header {text-align:left;margin: 70px auto 15px auto;}
				#tool {margin-top:15px;}
				.footer .slide-inner {padding:20px 0 80px 0;}
				.footer .slide-inner p {font-size:14px;line-height:1.3;}
				/* Ads */
				.topad {display:block;}
				.fixedbottomad, .fixedbottomad .adsbygoogle {display:block;}
				.fixedtopad, .fixedbottomad {background:#fff;}
				.fixedtopad, .fixedtopad .adsbygoogle, .fixedbottomad, .fixedbottomad .adsbygoogle {height:60px;max-height:60px;}
				.leftad, .rightad {display:none!important;}
			}
			@media only screen and (max-width: 650px) and (min-height: 667px) and (max-height: 720px) {
				h1 {font-size:28px;}
				#menu-burger {color:#222;background:#fff;top:0;right:10px;}
				#header {text-align:left;margin: 70px auto 15px auto;}
				#tool {margin-top:15px;}
				.footer .slide-inner {padding:20px 0 80px 0;}
				.footer .slide-inner p {font-size:14px;line-height:1.25;}
				/* Ads */
				.topad {display:block;}
				.fixedbottomad, .fixedbottomad .adsbygoogle {display:block;}
				.fixedtopad, .fixedbottomad {background:#fff;}
				.fixedtopad, .fixedtopad .adsbygoogle, .fixedbottomad, .fixedbottomad .adsbygoogle {height:60px;max-height:60px;}
				.leftad, .rightad {display:none!important;}
			}
			@media only screen and (max-width: 650px) and (min-height:635px) and (max-height: 666px) {
				h1 {font-size:26px;}
				#menu-burger {color:#222;background:#fff;top:0;right:10px;}
				#header {text-align:left;margin: 70px auto 15px auto;}
				#tool {margin-top:15px;}
				.footer .slide-inner {padding:20px 0 80px 0;}
				.footer .slide-inner p {font-size:14px;line-height:1.2;}
				/* Ads */
				.topad {display:block;}
				.fixedbottomad, .fixedbottomad .adsbygoogle {display:block;}
				.fixedtopad, .fixedbottomad {background:#fff;}
				.fixedtopad, .fixedtopad .adsbygoogle, .fixedbottomad, .fixedbottomad .adsbygoogle {height:60px;max-height:60px;}
				.leftad, .rightad {display:none!important;}
			}
			@media only screen and (max-width: 650px) and (max-height: 634px) {
				h1 {font-size:24px;}
				#menu-burger {color:#222;background:#fff;top:0;right:10px;}
				#header {text-align:left;margin: 70px auto 15px auto;}
				#tool {margin-top:15px;}
				.footer .slide-inner {padding:20px 0 80px 0;}
				.footer .slide-inner p {font-size:14px;line-height:1.2;}
				/* Ads */
				.topad {display:block;}
				.fixedbottomad, .fixedbottomad .adsbygoogle {display:block;}
				.fixedtopad, .fixedbottomad {background:#fff;}
				.fixedtopad, .fixedtopad .adsbygoogle, .fixedbottomad, .fixedbottomad .adsbygoogle {height:60px;max-height:60px;}
				.leftad, .rightad {display:none!important;}
			}
			@media only screen and (max-width: 1120px) {
				.leftad, .rightad {display:none;}
			}	
			@media only screen and (max-width: 420px) {
				.fixedbottomad, .fixedbottomad .adsbygoogle {display:block;}
				.fixedtopad, .fixedbottomad {background:#fff;}
				.fixedtopad, .fixedtopad .adsbygoogle, .fixedbottomad, .fixedbottomad .adsbygoogle {height:60px;max-height:60px;}
				#header {text-align:left;margin: 70px auto 15px auto;}
				.leftad, .rightad {display:none!important;}
			}
			@media only screen and (max-width: 360px) {
				
			}
			@media only screen and (min-width: 651px) and (max-height: 720px) {
				.leftad, .rightad {margin-top:-60px;}
				.bottomad {margin:30px auto 0 auto}
			}
			@media only screen and (min-width: 651px) and (max-width: 1300px) {
				#menu-burger {top:-3px; right: calc(50vw - 235px);}
			}
		</style>

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8599148673464639"
     crossorigin="anonymous"></script>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-0JLP74XDMZ"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-0JLP74XDMZ');
	</script>
	</head>
	<body id="body">
		<div>
			<?php
				include_once("../nav.php");
			?>
			<div class="fixedtopad">
				<!-- This is where your 320x50 header ad code from Adsense goes -->
			</div>
			<div id="header">
				<h1><a href="<?php echo $host; ?>"><img class="logoimage" src="<?php echo $host; ?>../images/icon64.png" width="40" height="40"><span class="logotext">BMI Finder</span></a></h1>
			</div>
			<div id="content">
				<div class="topad">
						<!-- This is where your 300x250 top ad code from Adsense goes -->
				</div>
				<div class="content-inner">
					<h1>What is Motivation?</h1>
					<div class="section minor">
						<p class="subtext-minor">
							We all have health goals, from running a marathon to nailing that challenging yoga pose to eating more greens. But keeping up a steady course of effort can feel a bit like driving a car down a curvy road with no straightaways in sight – an endless series of diversions. Take a breath, no need to panic. If you understand how motivation and behavior change work, you can turn those ‘I should…’ intentions into powerful ‘I can…’ realities that will make it easier to make your goals happen. 
							<br>
							<br>
							Intrinsic motivation comes from inside you. It’s driven by enjoyment, curiosity or purpose. Extrinsic motivation comes from outside you. It’s based on rewards or threats. While both have their roles, intrinsic motivation is the engine for longer-lasting change, research shows.
							<br>
							<br>
							Imagine your brain as a rewards engine. Addictive substances and behaviors pump dopamine – a feel good neurotransmitter –  so engaging in more positive, healthy, behaviors causes dopamine levels to soar. This is why it’s helpful to break things down as simply as possible: keeping your goals small and achievable. The more mini-celebrations you have, the more you’ll feed your dopamine engine with each milestone.
							<br>
							<br>
							Mental training is incredibly powerful; it drives our ability to execute a physical feat,’ said Attarian. ‘Give yourself some positive statements and discuss them during your workout: “It’s OK that I don’t have perfect technique. I’m just getting stronger with every set” or “I am tough. I recently completed a long hike and I feel strong.” When you say that, your brain starts saying, “OK, we don’t have the skilled technique but the brain wants to get better.” And that’s one of the best motivators, you feel like you have more efficacy.’ 
							<br>
							<br>
							Beyond personal encouragement, we are social creatures. Being able to reveal your goals and your struggles to a supportive community will help you feel more accountable and motivated, and having a workout buddy, an online forum or a friend who believes in you can serve as fuel for your motivation. 
							<br>
							<br>
							None of this will be easy. Yes, there will be obstacles, but don’t quit when one appears. Expect obstacles and plan for how to mitigate them. Run out of steam? Do some quick meditation or get pumped with a motivational playlist. Or, crave junk food? Stock the pantry with healthy alternatives. Obstacles are only temporary setbacks, so be resilient! 
							<br>
							<br>
							Remember, motivation is a process, not a punchline. So enjoy your peaks and ruts, applaud your improvements, and use this science-based advice to keep your health-journey train moving ahead. With a little knowledge of your mind, and a few simple tools, you really can keep moving toward your goals – and reap the rewards of a better life. 
						</p>
					</div>
					<hr/>
				</div>
				<div class="bottomad">					
							<!-- This is where your 320x50 bottom ad code from Adsense goes -->
				</div>
			</div>
		</div>
		<div class="fixedbottomad">
			<!-- This is where your 320x50 footer ad code from Adsense goes -->
		</div>
		<?php 
			include_once("../footer.php");
		?>
		<script>
			
			var nav = false;
		
			document.getElementById("menu-burger").addEventListener("click", function() {
				if(nav) {
					this.innerHTML = "&#9776;";
					document.getElementById("menu-nav").style.display = "none";
					document.getElementById("cover").style.display = "none";
				} else {
					this.innerHTML = "&#10005;";
					document.getElementById("menu-nav").style.display = "block";
					document.getElementById("cover").style.display = "block";
				}
				nav = !nav;
			});
			
			document.getElementById("cover").addEventListener("click", function() {
				if(nav) {
					document.getElementById("menu-burger").innerHTML = "&#9776;";
					document.getElementById("menu-nav").style.display = "none";
					document.getElementById("cover").style.display = "none";
				} else {
					document.getElementById("menu-burger").innerHTML = "&#10005;";
					document.getElementById("menu-nav").style.display = "block";
					document.getElementById("cover").style.display = "block";
				}
				nav = !nav;
			});
		</script>
	</body>
</html>