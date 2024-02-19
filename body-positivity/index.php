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
		<title>Body Positivity and Self-Acceptance</title>
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
					<h1>Body Positivity and Self-Acceptance</h1>
					<div class="section minor">
					<p>At a time when we are obsessed by appearances and seduced by the power of numbers on the scale, it’s all too easy to forget just how amazing a body is, and how much it is truly capable of. Let’s put an end to the toxic focus on weight and embrace true body positivity and self-acceptance as part of a wider, healthier relationship with life. 
					<br>
					<br>
					<h3 class="subtitle-minor">Remember, you are more than a number:</h3>
						<p class="subtext-minor">
						It doesn’t matter what size or shape your body is. Your worth as a person comes from who you are – your unique personality, talents, goals, and contributions to the world. 
						<br>
						And instead of obsessing about your physical attributes, focus on what you can DO with your body (not what it looks like). Putting your sweaty hands in the air is a thing of beauty. Moving a brick. Whooping with pleasure. Or comforting a crying child. Small miracles – thank you! 
						<br>
						But, seriously, take care of the amazing machine we call your body: give it good food, move it regularly with whatever activities you like the most, and take care of it in good faith. 
						</p>
					</div>
					<hr/>
				</div>
				<div class="content-inner">
					<div class="section minor">
						<h3 class="subtitle-minor">Shift focus to well-being:</h3>
						<p class="subtext-minor">
						What do you believe health is? It’s not just the absence of disease; it's vibrant, energetic, feeling well, feeling useful, feeling able to do that work that matters to you, that is what health is.
						<br>
							<ul>
								<li>Don’t move your body for weight loss: move it for joy. Choose activities you like, whether it’s dancing, swimming, or just walking in a beautiful place.</li>
								<li>Feed your body intentionally. Eat whole, unprocessed foods to fuel your energy and make you feel good.</li>
								<li>Listen to your body. Sleep, reduce stress, do things that calm your nervous system. </li>
							</ul>				
						</p>
					</div>
					<hr/>
				</div>
				<div class="content-inner">
					<div class="section minor">
						<h3 class="subtitle-minor">Embrace the beautiful diversity of bodies:</h3>
						<p class="subtext-minor">
							<ul>
								<li>Challenge unrealistic beauty standards. Recognize that every body is unique and deserves respect.</li>
								<li>Build your virtual village. Ask for support from friends and family. Surround yourself with media and communities that promote body diversity and celebrate fitness in all sizes. </li>
								<li>Challenge negative self-talk. Replace critical thoughts with affirmations of self-compassion and appreciation.</li>
							</ul>				
						</p>
					</div>
					<hr/>
				</div>
				<div class="content-inner">
					<div class="section minor">
						<h3 class="subtitle-minor">Remember, the journey to body positivity is a marathon, not a sprint:</h3>
						<p class="subtext-minor">
							<ul>
								<li>Be gentle with yourself. It’s to be expected that things will get better and sometimes worse, so celebrate your triumphs, forgive yourself your slips – and never give up.</li>
								<li>Surround yourself with support. See a therapist, join a body-positive community or circle of supportive individuals who are willing to be a part of your journey. </li>
							</ul>				
						</p>
					</div>
					<hr/>
				</div>
				<div class="content-inner">
					<div class="section minor">
						<h3 class="subtitle-minor">You are awesomely okay as you are. It’s time to get off the scale and rejoice in the glorious adventure of humanity. In all its wonderful variation. </h3>
						<br>
						<h3 class="subtitle-minor">Additional Resources:</h3>
						<p class="subtext-minor">
							<ul>
								<li>The National Eating Disorders Association: <a href="https://www.nationaleatingdisorders.org/" target="_blank">https://www.nationaleatingdisorders.org/</a></li>
								<li>The Body Positive: <a href="https://www.thebodypositive.org/" target="_blank">https://www.thebodypositive.org/</a></li>
								<li>Love Your Body: <a href="https://now.org/now-foundation/love-your-body/" target="_blank">https://now.org/now-foundation/love-your-body/</a></li>
							</ul>
							Remember, you’re not walking this path alone. Take the self-compassion and confidence boost you need to love the unbelievable person you are!
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