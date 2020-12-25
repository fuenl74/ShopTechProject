<?php
// xx_variables.php - Common Website Variables
// Written by:  Luis Fuentes, November 2020	

// Set Default PHP Options
	date_default_timezone_set('America/New_York');
	error_reporting('ALL'); 
	
// Variables
	$pfx 				= 'xx';														// Set Prefix for website file names
	$p 					= 'home';													// Page to include for content
	$pgm				= $pfx . '.php';											// Landing Page
	$width 				= '1224';													// Page width
	$pixdir 			= 'images';													// Image directory
	$domain				= 'domain.com';												// Domain Name
	$sitename			= 'Website Name';											// Website Name	
	$webmaster 			= 'Webmaster';												// Webmaster Name
	$email				= "webmaster@$domain";										// Webmaster Email
	$desc_short			= 'Huntington, NY';										// Short Website Description
	$desc_long			= 'Enjoy a safe, convenient shopping experience this holiday season.';								// Long Website Description 
	$year				= date('Y');												// Current Year
	$footer				= "&copy; $year - $desc_short";								// Footer Message	

// Navbar Variables
	$pages				= array('Home', 'Products', 'Add Products', 'Update Products', 'Locations', 'logon');
	$restricted 		= array('Add Products', 'Update Products');													//'page4', 'page5'
	$role_reqrd			= array(NULL);
	$role_name			= array(NULL);
	$nb_text_color		= 'blue';
	$nb_text_color2		= 'red';

// Page Styles	
	$hdr_styleh1		= "color:white;   background-color:blue;    font-size:200%; font-style:italic; font-weight:normal; font-family:aladin;";	
	$hdr_style			= "color:blue;   background-color:yellow;    font-size:200%; font-style:italic; font-weight:bold; font-family:Arial,Helvetica;";
	$hdr_style2			= "color:yellow;  background-color:blue;    font-size:100%; font-weight:bold; font-family:Arial,Helvetica;";
	$pVariable			= "color: rgb(57, 165, 168);    font-size:120%; font-weight:bold; font-family:Roboto;";
	$pVariable1			= "color:red;    font-size:120%; font-weight:bold; font-family:Roboto;";
	$hdr_style3			= "color:black;  background-color:yellow;    font-size:75%;  font-weight:bold; font-family:Arial,Helvetica;";	
	$nav_style			= "color:white;   background-color:white;     font-size:120%; font-weight:normal; font-family:roboto; ";
	$ftr_style			= "color:white; background-color:green;      font-size:90%;  font-weight:bold; font-family:Arial,Helvetica; border:1px solid black;";
	$page_style			= "color:black;  background-color:lightgray; font-size:100%; font-family:Arial,Helvetica; border:1px solid black;";		
?>					