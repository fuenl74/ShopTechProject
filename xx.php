<?php
// xx.php - Website Landing Page
// Written by:  Luis Fuentes, November 2020	

// Start Session, Set session variables
	$pfx 		= "xx";						// Set Prefix for website file names
	
// Scripts
echo "  <link rel='stylesheet' href='xx.css'>
		<link href='css/bootstrap-4.0.0.css' rel='stylesheet' type='text/css'>
		<script>var __adobewebfontsappname__='dreamweaver'</script>
		<script src='http://use.edgefonts.net/aladin:n4:default;bubblegum-sans:n4:default.js' type='text/javascript'>
		</script>";

	include($pfx . "_session.php");			// Start Sessions

// Common Variables, Functions
	include($pfx . '_variables.php');		// Variable Declarations 
	include($pfx . '_functions.php');  		// Function Library
	include($pfx . '_mysqli_connect.php'); 	// Connect to Database
  
// Variables
	$online 	= TRUE;						// Set to FALSE to bring website down
	$landing 	= TRUE;						// Set variable for page authentication
  
// Get Input
	if (isset($_GET['p']))					$p = $_GET['p'];
	$page = $pfx . "_$p.php";
	if (!file_exists($page))				$page = $pfx . "_home.php";  
	if (!$online)							$page = $pfx . "_offline.php";  

// Output Page
	include($pfx . "_header.php"); 			// Page Header 
	include($pfx . "_navbar.php");			// Navigation Bar
	echo "<table class='content' align='center' width='1224' style='$page_style'><tr><td>\n";	
	include($page);							// Page Content
	echo "</td></tr></table>";
	include($pfx . "_footer.php");			// Page Footer
?>