<?php
// xx_header.php - Page Header
// Written by:  Luis Fuentes, November 2020	
	
// Page Header
	echo "<!doctype html>  
		  <body>
		  <style type='text/css'>
			A:link 	  {color:black; text-decoration:none; font-weight:bold;}
			A:visited {color:black; text-decoration:none; font-weight:bold;}
			A:active  {color:black; text-decoration:none;}
			A:hover   {color:green; text-decoration:none; font-weight:bold}
		  </style>"; 
		  
	echo "<table width='$width' align='center' cellpadding='0' cellspacing='0' style='border:1px solid black;'>\n
		  <tr><td><img class='headerImg' src='images/logo.png'width='200' height='200' alt='LOGO' /><a href='xx_home.php'><h1 class='headerH1'>SHOPTECH.COM</h1></a></td></tr>\n 
		  <tr><td align='center' style='$hdr_style2 font-family: roboto; font-size: 140%;'><br>Hello, $sname [$srole]<br><br></td></tr>
		  <tr><td align='center' style='$hdr_styleh1'>$desc_long</td></tr>\n\n 
		  </table>";
?>