<?php
	require_once("base.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Amp Tags -->
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<script async custom-element="amp-ad" src="https://cdn.ampproject.org/v0/amp-ad-0.1.js"></script>
		<!-- Header Meta Tags -->
		<title><?php echo $websitename; ?></title>
		<meta name="robots" content="index,follow" />
		<meta name="description" content="<?php echo $description; ?>"/>
		<meta name="keywords" content="<?php echo $keywords; ?>"/>
		<meta charset="utf-8"/>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
		<!-- Social Meta Tags -->
		<meta property="og:title" content="<?php echo $websitename; ?>"/>
		<meta property="og:description" content="<?php echo $description; ?>"/>
		<meta property="og:image" content="<?php echo $host; ?>images/social-logo.jpg"/>
		<meta property="og:url" content="<?php echo $host; ?>"/>
		<meta property="og:locale" content="en" />
		<meta property="og:type" content="website" />
		<meta name="twitter:title" content="<?php echo $websitename; ?>"/>
		<meta name="twitter:description" content="<?php echo $description; ?>"/>
		<meta name="twitter:image" content="<?php echo $host; ?>images/social-logo.jpg"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#999999">
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
			#result {font-weight: bold;}
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

	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4405355158264562"
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
				include_once("nav.php");
			?>
			<div class="fixedtopad">
				<!-- This is where your 320x50 header ad code from Adsense goes -->
			</div>
			<div id="header">
				<h1><a href="<?php echo $host; ?>"><img class="logoimage" src="<?php echo $host; ?>images/icon64.png" width="40" height="40"><span class="logotext">BMI Finder</span></a></h1>
			</div>
			<div id="content">
				<div id="tool-wrapper">
					<div id="tool">

					<p>Select Imperial or Metric Units of Measure</p>
					<br>
					<input type="radio" id="measure" name="units" value="metric" checked>
					<label for="metricunits">Metric</label>
					<input type="radio" id="imperial" name="units" value="imperial">
					<label for="imperialunits">Imperial</label><br>
					<br>
					<!-- Option for providing height 
							and weight to the user-->
					<p>Height (in cm or inches)</p>
					<br>
					<input type="text" id="height">
					<br>
					<br>
					<p>Weight (in kg or pounds)</p>
					<br>
					<input type="text" id="weight">
					<br>
					<br>
					<button id="btn" onclick="gtag('event','calculateBMI',{'event_category':'calculateBMI','event_label':'calculateBMI'})">Calculate</button>

					<br>
					<br>

					<div id="result"></div>
						
						<div id="control-panel">
							<script>
								window.onload = () => {
								let button = document.querySelector("#btn");
								
								// Function for calculating BMI
								button.addEventListener("click", calculateBMI);
								};
								
								function calculateBMI() {
									
									/* Getting input from user into height variable.
									Input is string so typecasting is necessary. */
									let height = parseInt(document
											.querySelector("#height").value);
								
									/* Getting input from user into weight variable. 
									Input is string so typecasting is necessary.*/
									let weight = parseInt(document
											.querySelector("#weight").value);
								
									let result = document.querySelector("#result");
								
									// Checking the user providing a proper
									// value or not
									if (height === "" || isNaN(height)) 
										result.innerHTML = "Provide a valid Height!";
								
									else if (weight === "" || isNaN(weight)) 
										result.innerHTML = "Provide a valid Weight!";
								
									// If both input is valid, calculate the bmi
									
									//check if value is imperial
									else if (document.getElementById('imperial').checked) {
										let bmi = ((weight / (height * height)) * 703).toFixed(2);
									
										// Dividing as per the bmi conditions
										if (bmi < 18.5) result.innerHTML =
											`Under Weight : <span>${bmi}</span>`;
								
										else if (bmi >= 18.5 && bmi < 24.9) 
											result.innerHTML = 
												`Normal : <span>${bmi}</span>`;
								
										else if (bmi >= 25 && bmi < 29.9)
											result.innerHTML =
												`Overweight : <span>${bmi}</span>`;
										else result.innerHTML = 
												`Obese : <span>${bmi}</span>`;
									}
									
									else {
								
										// Fixing upto 2 decimal places
										let bmi = (weight / ((height * height) 
															/ 10000)).toFixed(2);
								
										// Dividing as per the bmi conditions
										if (bmi < 18.6) result.innerHTML =
											`Under Weight : <span>${bmi}</span>`;
								
										else if (bmi >= 18.6 && bmi < 24.9) 
											result.innerHTML = 
												`Normal : <span>${bmi}</span>`;

										else if (bmi >= 18.5 && bmi < 24.9) 
											result.innerHTML = 
												`Normal : <span>${bmi}</span>`;
								
										else if (bmi >= 25 && bmi < 29.9)
											result.innerHTML =
												`Overweight : <span>${bmi}</span>`;

										else result.innerHTML = 
												`Obese : <span>${bmi}</span>`;
									}
								}
							</script>
						</div>
					<div class="content-inner">
						<div class="section-minor">
							<p>
							Check out our other pages to learn to
							<a href="<?php echo $host; ?>interpretation/">interpret your results,</a> to understand the
							<a href="<?php echo $host; ?>limitations/">limitations</a> and
							<a href="<?php echo $host; ?>myths/"> myths</a> of BMI, and to see
							<a href="<?php echo $host; ?>body-positivity/">strategies for body positivity</a> and
							<a href="<?php echo $host; ?>weight-management/">weight management.</a>
                            <br>
                            <br>
							</p>
							<table>
								<tr>
									<th>Result</th>
									<th>About Results</th>
								</tr>
								<tr>
									<td>Underweight</td>
									<td>BMI is less than 18.5</td>
								</tr>
								<tr>
									<td>Normal weight</td>
									<td>BMI is 18.5 to 24.9</td>
								</tr>
								<tr>
									<td>Overweight</td>
									<td>BMI is 25 to 29.9</td>
								</tr>
								<tr>
									<td>Obese</td>
									<td>BMI is 30 or more</td>
								</tr>
							</table>
							<caption>*These are not definitive labels and do not take into account individual factors. Consult a healthcare professional to learn more about your results.</caption>
						</div>
					</div>
				</div>
				<div class="content-inner">
					<!-- This is where we can place supporting content about the tool, FAQ etc. -->
					<div class="section minor">
						<h3 class="subtitle-minor">About BMI Finder</h3>
						<p class="subtext-minor">Calculate your body mass index from your height and weight using this free online 
							calculator. Find your BMI using either imperial or metric measurements. BMI (body mass index) is a 
							simple calculation that uses a person's height and weight to assess their weight status. It does not 
							measure body fat directly, but it is a good indicator of where someone may stand. Learn more about
							 <a href="<?php echo $host; ?>interpretation/">how to interpret your results,
							</a> <a href="<?php echo $host; ?>limitations/">their limitations</a>, and
							 <a href="<?php echo $host; ?>myths/">myths about BMI</a> on our site.
						</p>
					</div>
					<hr/>
					<div class="section minor">
						<h3 class="subtitle-minor">What can I use my BMI for?</h3>
							<p class="subtext-minor">
								<ul>
									<li>You can screen for weight-related health risks. A high BMI can be a sign of increased risk for chronic diseases such as heart disease, stroke, type 2 diabetes, and some types of cancer. It is important to get regular checkups and to talk to your doctor about your weight and health risks. Eating a balanced diet and exercising regularly can help maintain a healthy weight..</li>
									<li>You can track your weight loss or gain over time, which can help you stay motivated in your weight loss or weight gain goals. Learn more strategies for healthy weight managment <a href="<?php echo $host; ?>weight-management/">here</a>.</li>
									<li>You can compare your BMI to the BMI’s of the general population, which can help you understand where you fall compared to others.</li>
									<li>It is important to note that BMI is not a perfect measure of body fat makeup. It does not take into account muscle mass, bone density, or body composition. Therefore, it is important to talk to your doctor about your weight status and any concerns you may have. Learn more about its limitations <a href="<?php echo $host; ?>limitations/">here</a>.</li>
								</ul>
							</p>
					</div>
					<hr/>
					<div class="section minor">
						<h3 class="subtitle-minor">What can I use BMI Finder for?</h3>
						<p class="subtext-minor">
							<ul>
								<li>You can find out which of four weight categories your BMI falls in: underweight, normal weight, overweight, and obese. Your weight category can help you understand your risk for health problems related to your weight.</li>
								<li>You can track positive and negative BMI changes, which can help you stay motivated in your weight loss or your weight gain goals. Remember, not all “weight” is created equal – so this should just be a directional measure.</li>
								<li>You can compare your newly found BMI to the average BMI for your age and sex, which can help you understand if your weight is within a healthy range.</li>
								<li>If you are concerned about your weight or weight status, talk to your doctor. They can help you understand your BMI and what it means for your health.</li>
							</ul>
						</p>
					</div>
					<hr/>
					<div class="section minor">
						<h3 class="subtitle-minor">Navigating the Delicious World of Nutrition: Basics and Choices for YOU</h3>
						<p class="subtext-minor">The first step to forming good nutritional habits is knowing your own personal attributes such as age, activity level, and medical conditions. For example, the average adult requires complex carbohydrates for long-term energy and muscle repair. Conversely, the average child nearly always requires a balanced diet of protein, carbohydrates, healthy fats, vitamins, and minerals. Our grandparents, on the other hand, should focus on consuming a nutrient-dense diet to maintain healthy bones. In addition to these generalizations, active people often require more protein and carbs, while less active people require meals high in fiber. However, much of this might change for you if you have a health condition such as diabetes or heart disease, for example (there are many other possible health conditions that could influence your nutrition). This blog post will explore all of these things, and ideally give you an idea of where to start on your journey to better nutrition. 
							<br>
							<a href="<?php echo $host; ?>fuel-your-life/">Read the full post</a>
						</p>
					</div>
					<hr/>
					<div class="section minor">
						<h3 class="subtitle-minor">From Couch Potato to Champion: Real People, Real Transformations</h3>
						<p class="subtext-minor">If you’re like me, you need to see results. You want to see real people who have transformed their lives. You want to see the power of small, consistent changes, finding activities you enjoy, and having a community to support you. You want simple workout routines for at home – no gym required! This blog post checks all those boxes. You should come away ready to crush your workouts! Just remember, it's important for you to start slow on your workouts, and gradually increase your intensity and duration. Track your progress, and make sure to celebrate wins and have fun along the way. 
							<br>
							<a href="<?php echo $host; ?>couch-potato/">Read the full post</a>
						</p>
					</div>
					<hr/>
					<div class="section minor">
						<h3 class="subtitle-minor">The Connection Between Mental Health and Physical Well-being</h3>
						<p class="subtext-minor">This post is about how your mental health affects your physical well being. It is a scientific fact that mental health is important and taking care of it can reduce physical symptoms such as headaches, fatigue and a weak immune function. To help reduce these pesky symptoms, it is crucial to exercise. Exercising releases endorphins which will make you feel better. People who want to exercise need nutrition to fuel their bodies and quality rest so they are energized the next day, so make sure to do that. These simple things help mental health a lot because they help you gain confidence within yourself. Mental health is just as important as physical health so if you incorporate these tips into your daily life then it can be the base of your well-being.
						<br>
						<a href="<?php echo $host; ?>mind-and-body/">Read the full post</a>
						</p>
					</div>
					<hr/>
				</div>
			</div>
		</div>
		<div class="fixedbottomad">
			<!-- This is where your 320x50 footer ad code from Adsense goes -->
		</div>
		<?php 
			include_once("footer.php");
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