<?php
// xx_session.php - Check for Logon and Load Session Variables
// Written by:  Luis Fuentes, December 2020

  session_start();
  
  if (isset($_SESSION['user'])) {
    $logon 	= TRUE;
	$sname 	= $_SESSION['name'];
	$suser 	= $_SESSION['user'];
	$srole 	= 'Member'; 
	}
	
	else {
	  $logon = FALSE;
	  $sname = $suser = 'Guest';
	  $srole	 = 'Public';
	  }
?>