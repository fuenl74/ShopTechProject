<?php
// xx_landing.php - Verify that program was called by Landing Page, if not transfer to Landing Page
// Written by: Luis Fuentes, December 2020

// $landing is SET in Landing Page, if not set, then program was called directly and send back to home page
  if (!isset($landing)) {
    header('Location: xx.php'); 
	exit;
	} 

?>