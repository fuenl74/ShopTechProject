<?php
// xx_locations.php - location page
// Written by:  Luis Fuentes, November 2020	

// Verify that program was called from Landing Page and LOGON
	require('xx_landing.php');
//	require($pfx . '_verify_logon.php');	
//	variables
	
	$center		 		= "align='center'"; 
// STYLE

	echo "<style>
				.location ul li {
					margin: auto;
					padding: 10px;
					padding-right:7%;
					padding-left: 7%;
					margin-right: 5%;
					list-style-type: none;
					display: inline;
					background-color: rgba(0,0,255,0.80);
					color: white;
					border-radius: 16px;
				}
				.location ul li:hover {	
					background-color: rgba(0,18,255,0.50);	

				}
				.map1{
					margin:auto; 
					width: 80%;
				}
				.locationDesc{
					font-size: 18px;
					text-align: center;
					font-weight: bolder;
					background-color: slategrey;
					color: white;
					margin-top: 1em;
					border-radius: 15px;
					padding-bottom: 1em;
					padding-top: 1em;
				}
		  </style>";

// Output Page  
	echo "<div $center class='locationDesc'><b>Locations</b><br>\nPlease select any of the following locations if you would like to visit any of our physical stores</div>
		  <br><br>
		  <div $center>
		  <section class='location'>
		  <ul>
			<li  id='mapSelden' >Selden</li>
			<li id='mapSyosset'>Syosset</li>
			<li id='mapRiver'>Riverhead</li>
		  </ul>
		  <div>
		  <section class='map1'>
			<p><iframe class='map1' id='mapFig1' src='images/multimaps2.png'  frameborder='0' style='height: 450px; margin-top:2em; text-align:center;' allowfullscreen></iframe></p>
		  </section>
		  </div>
		</section>
		</div>";
		
//  Map Script
	echo "<script>
			{
				document.getElementById('mapSelden').addEventListener('click', myFunction);

				function myFunction() {
				document.getElementById('mapFig1').src='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.302508869413!2d-73.04984899944328!3d40.865235036062906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e84704d967378f%3A0xb8194bc0d1c54af!2sSelden%2C%20NY%2011784!5e0!3m2!1sen!2sus!4v1605917507132!5m2!1sen!2sus';
				}
			}
			{
				document.getElementById('mapSyosset').addEventListener('click', myFunction);

				function myFunction() {
				document.getElementById('mapFig1').src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48314.652484482955!2d-73.53899788353428!3d40.81333764153546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c28248240839f5%3A0x7faaf256b73aa7f5!2sSyosset!5e0!3m2!1sen!2sus!4v1605917725173!5m2!1sen!2sus';
				}	
			}
			{
				document.getElementById('mapRiver').addEventListener('click', myFunction);

				function myFunction() {
				document.getElementById('mapFig1').src = 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2737.525708251394!2d-72.67812427168667!3d40.933914176235334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89e88ac253f4fb5b%3A0x25ef1fb1785ee81d!2s1080-1140%20Old%20Country%20Rd%2C%20Riverhead%2C%20NY%2011901!5e0!3m2!1sen!2sus!4v1605917863895!5m2!1sen!2sus';
				}	
			}
			</script>";
		
		
// End of Page	
	 
?>