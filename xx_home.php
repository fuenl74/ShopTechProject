<?php
// xx_home.php - Home Page
// Written by:  Luis Fuentes, November 2020	

// Verify that program was called from xx.php
	require('xx_landing.php');
	
// variables
	$center	= "align='center'"; 

// Set Up Name   
	if (!$logon) $sname = 'Guest';

// Carousel Slideshow

echo "<style>
		
		.mySlides {display: none}
		img {vertical-align: middle;}

		/* Slideshow container */
		.slideshow-container {
		  max-width: 600px;
		  max-height: 400px;
		  position: relative;
		  margin: auto;
		}

		/* Next & previous buttons */
		.prev, .next {
		  cursor: pointer;
		  position: absolute;
		  top: 50%;
		  width: auto;
		  padding: 16px;
		  margin-top: -22px;
		  color: white;
		  font-weight: bold;
		  font-size: 18px;
		  transition: 0.6s ease;
		  border-radius: 0 3px 3px 0;
		  user-select: none;
		  color: white;
		  background-color: rgba(50, 50, 50, 0.7);
		  
		}

		/* Position the 'next button' to the right */
		.next {
		  right: 0;
		  border-radius: 3px 0 0 3px;
		}

		/* On hover, add a black background color with a little bit see-through */
		.prev:hover, .next:hover {
		  background-color: rgba(0,0,0,0.8);
		}

		/* Caption text */
		.text {
		  color: #f2f2f2;
		  font-size: 15px;
		  padding: 8px 12px;
		  position: absolute;
		  bottom: 8px;
		  width: 100%;
		  text-align: center;
		  background-color: rgba(50, 50, 50, 0.7);
		}

		/* Number text (1/3 etc) */
		.numbertext {
		  color: #f2f2f2;
		  background-color: rgba(50, 50, 50, 0.7);
		  font-size: 12px;
		  padding: 8px 12px;
		  position: absolute;
		  top: 0;
		}

		/* The dots/bullets/indicators */
		.dot {
		  cursor: pointer;
		  height: 15px;
		  width: 15px;
		  margin: 0 2px;		  
		  background-color: white;
		  border-radius: 50%;
		  display: inline-block;
		  transition: background-color 0.6s ease;
		}

		.active, .dot:hover {
		  background-color: rgba(50, 50, 50, 0.7);
		}

		/* Fading animation */
		.fade {
		  -webkit-animation-name: fade;
		  -webkit-animation-duration: 1.5s;
		  animation-name: fade;
		  animation-duration: 1.5s;
		}

		@-webkit-keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		@keyframes fade {
		  from {opacity: .4} 
		  to {opacity: 1}
		}

		/* On smaller screens, decrease text size */
		@media only screen and (max-width: 300px) {
		  .prev, .next,.text {font-size: 11px}
		}
		#dotBackground{
		  height: 120%;
		  max-width: 600px;
		  position: relative;
		  margin: auto;
		}
		h4{
			text-align: center;
			font-weight: bolder;
			padding: 2px;
			font-size: 120%;
			background-color: #B03026;			
		    max-width: 1000px;
		    position: relative;
		    margin: auto;
			color: white;
		}
		.title
		{
			font-family:Roboto; 
			font-size:150%;
			color: white;	
			background-color: rgba(40, 40, 255, 0.8);
		    max-width: 1000px;
		    position: relative;
		    margin: auto;
		}
		</style>";


// Output Page  
	echo "<div $center class='title'>
			<b>Welcome $sname!</b></div>\n
			<br></div>\n		
			<h4>Featured Products</h4>
			<br>
			<div class='slideshow-container'>	
			<div class='mySlides fade'>
			  <div class='numbertext'>1 / 6</div>
			  <img src='images/iphoneCar.jpeg' style='width:100%'>
			  <div class='text'>Apple Iphone X</div>
			</div>

			<div class='mySlides fade'>
			  <div class='numbertext'>2 / 6</div>
			  <img src='images/xperiaCar.jpeg' style='width:100%'>
			  <div class='text'>Sony Xperia</div>
			</div>

			<div class='mySlides fade'>
			  <div class='numbertext'>3 / 6</div>
			  <img src='images/noteCar.jpeg' style='width:100%'>
			  <div class='text'>Galaxy Note 9</div>
			</div>
			
			<div class='mySlides fade'>
			  <div class='numbertext'>4 / 6</div>
			  <img src='images/2car1.jpg' style='width:100%'>
			  <div class='text'>Samsung TV</div>
			</div>
			
			<div class='mySlides fade'>
			  <div class='numbertext'>5 / 6</div>
			  <img src='images/2car2.jpg' style='width:100%'>
			  <div class='text'>Sony TV</div>
			</div>
			
			<div class='mySlides fade'>
			  <div class='numbertext'>6 / 6</div>
			  <img src='images/2car3.jpg' style='width:100%'>
			  <div class='text'>Sharp TV</div>
			</div>

			<a class='prev' onclick='plusSlides(-1)'>&#10094;</a>
			<a class='next' onclick='plusSlides(1)'>&#10095;</a>

			</div>
			<br>
			<br>
			<br>
			<div style='text-align:center' id='dotBackground'>
			  <span class='dot' onclick='currentSlide(1)'></span> 
			  <span class='dot' onclick='currentSlide(2)'></span> 
			  <span class='dot' onclick='currentSlide(3)'></span> 
			  <span class='dot' onclick='currentSlide(4)'></span> 
			  <span class='dot' onclick='currentSlide(5)'></span> 
			  <span class='dot' onclick='currentSlide(6)'></span> 
			</div>				
			
			<br><br><br>";
		 
// Script for the carousel

	echo "<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
			  showSlides(slideIndex += n);
			}

			function currentSlide(n) {
			  showSlides(slideIndex = n);
			}

			function showSlides(n) {
			  var i;
			  var slides = document.getElementsByClassName('mySlides');
			  var dots = document.getElementsByClassName('dot');
			  if (n > slides.length) {slideIndex = 1}    
			  if (n < 1) {slideIndex = slides.length}
			  for (i = 0; i < slides.length; i++) {
				  slides[i].style.display = 'none';  
			  }
			  for (i = 0; i < dots.length; i++) {
				  dots[i].className = dots[i].className.replace(' active', '');
			  }
			  slides[slideIndex-1].style.display = 'block';  
			  dots[slideIndex-1].className += ' active';
			}
			</script>
			";
?>