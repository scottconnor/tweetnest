<?php
	// PONGSOCKET TWEET ARCHIVE
	// Hour page
	
	require "inc/preheader.php";
	
	//$hour = ltrim($_GET['hour'], "0");
	$hour = $_GET['hour'];
	
	if(!is_numeric($hour) || (is_numeric($hour) && ($hour > 23 || $hour < -1)) ){ 
		errorPage("Invalid hour. Please specify a valid hour." . $hour); 
	}
	
	$query = "SELECT `".DTP."tweets`.*, `".DTP."tweetusers`.`screenname`, `".DTP."tweetusers`.`realname`, `".DTP."tweetusers`.`profileimage` FROM `".DTP."tweets` LEFT JOIN `".DTP."tweetusers` ON `".DTP."tweets`.`userid` = `".DTP."tweetusers`.`userid` WHERE  HOUR(FROM_UNIXTIME(`time`)) = '" . s($hour) . "' ORDER BY `".DTP."tweets`.`time` DESC";
	//echo $query . ' DB: ' . DB_OFFSET;
	
	$q = $db->query($query);
	
	
	
	$selectedDate = array("y" => $_GET['y'], "m" => $m, "d" => $d);
	$pageTitle    = $hour . ':00 - ' . $hour . ':59';
	//$preBody      = displayDays($_GET['y'], $m);
	$preBody      = displayHours();
	
	
	require "inc/header.php";
	echo tweetsHTML($q, "day");
	require "inc/footer.php";