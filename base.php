<?php

	header("Cache-Control: no-cache");
	header("Cache-Control: max-age=0");
	setcookie("wpSGCacheBypass", "1", ['expires' => time() + 3600 * 24 * 365, 'path' => '/', 'secure' => true, 'samesite' => 'Strict',]);
	setcookie("SIDCC", "", ['expires' => time() - 3600, 'path' => '/', 'secure' => true, 'samesite' => 'Strict',]);
	setcookie("SEARCH_SAMESITE", "", ['expires' => time() - 3600, 'path' => '/', 'secure' => true, 'samesite' => 'Strict',]);

	//GZIP PAGE
	if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
		ob_start("ob_gzhandler");
	} else {
		ob_start();
	}
	
	//START SESSION
	ini_set('session.use_only_cookies', 1);
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	
	//DEFINE DEFAULT CONTENT
	$host = "https://www.yourdomainname.com/"; //FILL THIS IN WITH YOUR DOMAIN
	$websitename = "YOUR WEBSITE NAME"; //FILL THIS IN WITH YOUR WEBSITE NAME, e.g. "Age Calculator - Calculate Age from Date of Birth"
	$websitename_short = "YOUR WEBSITE SHORT NAME"; //FILL THIS IN WITH YOUR WEBSITE SHORTNAME, e.g. "Age Calculator"
	$description = "YOUR WEBSITE DESCRIPTION"; //FILL THIS IN WITH YOUR WEBSITE DESCRIPTION e.g. "Calculate your exact age from date of birth with this free online age calculator. Find out how old you are in years, months, weeks and days."
	$keywords = ""; //FILL IN WITH KEYWORDS e.g. "age calculator, calculate age"
	date_default_timezone_set("America/Los_Angeles");
	
?>