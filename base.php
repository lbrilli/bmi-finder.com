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
	$host = "https://www.bmi-finder.com/";
	$websitename = "BMI Calculator - Calculate BMI with your height and weight";
	$websitename_short = "BMI Calculator"; 
	$description = "Calculate your Body Mass Index using your height and weight using this free online calculator. Find our your BMI using either standard or metric measurements.";
	$keywords = "bmi calculator, calculate bmi, bmi finder, bmi";
	date_default_timezone_set("America/Los_Angeles");
	
?>