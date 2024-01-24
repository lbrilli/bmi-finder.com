<?php
	include_once("../base.php");
	
	$name = "bmi-finder.com";	
	$websitename = "Limitations of BMI - ".$name;
	$description = "";
	$keywords = "";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Meta Tags -->
		<title><?php echo $websitename; ?></title>
		<meta name="robots" content="noindex,nofollow" />
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
		<meta property="fb:app_id" content="539741069902637" />
		<meta name="twitter:title" content="<?php echo $websitename; ?>"/>
		<meta name="twitter:description" content="<?php echo $description; ?>"/>
		<meta name="twitter:image" content="<?php echo $host; ?>images/social-logo.jpg"/>
		<meta name="twitter:card" content="summary_large_image"/>
		<!-- Picnic CSS -->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/picnic">
		<!-- Icons -->
		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $host; ?>apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $host; ?>favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $host; ?>favicon-16x16.png">
		<link rel="manifest" href="<?php echo $host; ?>site.webmanifest">
		<link rel='mask-icon' href='".$host."safari-pinned-tab.svg' color='#0088ff'>
		<meta name='msapplication-TileColor' content='#0088ff'>
		<meta name='theme-color' content='#0088ff'>
		<!-- Styles -->
		<style>
			body {background:#f1efed;}
			.clear {clear:both;height:10px;}
			h1 {line-height:1.25em;}
			h2.subtitle {padding-left:3px;padding-right:3px;}
			.black {color:#111;text-decoration:none;}
			.main {max-width:960px;width:100%;margin:0;}
			.intro {background:#ffffff;padding:20px 45px;border-radius:0.2em;-webkit-border-radius:0.2em;-moz-border-radius:0.2em;margin-bottom:0.6em;}
			.credit {font-size:10px;text-align:right;padding:5px 0;}
			.settings {margin:5px 0 0 0;}
			.modal .overlay ~ *, .card {border:none;}
			.modal .overlay ~ * header, .card header {border-bottom:1px solid #f1efed;}
			.custom-button {background:#f15025;}
			.ingredients-list label {margin: 5px 0;padding:5px 0;display: block;}
			.step {margin:10px 0;}
			.footer {background:#333;color:#fff;}
			.footer .sub-inner {padding:50px 0;text-align:center;}
			.footer a {color:#fff;margin:10px 12px;display:inline-block;}
			.footer .copyright {margin-top:50px;font-size:0.8em;}
		
			.toggle-text {margin-right:10px;vertical-align:bottom;height:34px;display:inline-block;margin-bottom:3px;}
			
			.logo2 {display:none;}
			
			@media (max-width: 60em) {
				.logo2 {display:block;text-align:center;}
			}
			
			@media only screen and (max-width: 960px) {
				h2.subtitle {padding-left:10px;padding-right:10px;}
			}
			
			@media only screen and (max-width: 650px) {
				.intro {padding:10px .8em;}
				.settings {text-align:center;}
			}
		</style>
	</head>
	<body>
		<div class="main">
			<div class="intro">
				<h1>Limitations of BMI</h1>
				<article class="card">
				</article>
			</div>
		</div>
	</body>
</html>
<?php
	include_once("footer.php");
	ob_end_flush();
?>
