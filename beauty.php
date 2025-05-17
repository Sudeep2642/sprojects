<?php
session_start();

   include("connection.php");
   include("functions.php");
   


?>
<!DOCTYPE html>
<html>
<head>

		<title>Beauty & Spa Website</title>
		<link rel="stylesheet" type="text/css" href="beauty.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" type="text/css" href="about us.html">
		<link rel="stylesheet" type="text/css" href="login.php">
		<link rel="stylesheet" type="text/css" href="C:\Users\Sudeep\Documents\scroll.html">
		<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

</head>
<body>
	<style> {
	/* background-image: url('banner.jpg'); */
	}
	
	</style> 
	<section id="banner">	
	<img src="images/logo.png" class="logo">
	<div class="banner-text">
		<h1>Serenity Salon and Spa</h1>
		<p>Beauty is about enhancing what you have. Let yourself shine through.</p>
	</div>

</section>
<div id="sideNav"> 
	<nav>
		<ul>
			<li><a href="#banner">HOME</a></li>
			<li><a href="#feature">FEATURES</a></li>
			<li><a href="#service">SERVICES</a></li>
			<li><a href="#testimonial">TESTIMONIAL</a></li>
			<li><a href="#footer">MEET US</a></li>
			<li><a href="about us.html">ABOUT US</a></li>
		</ul>
	</nav>
</div>
<div id="menuBtn">
	<img src="C:/xampp/htdocs/sprojects/images/menu.png" no-repeat id="menu">
</div>





<section id="feature">
<div class="title-text">
<p>FEATURES</p>
<h1>Why Choose Us</h1>
</div>
<div class="feature-box">
    <div class="features"> 
		<h1>Experienced Staff</h1>
		<div class="features-desc">
			<div class="features-icon">
		        <i class="fa fa-shield" ></i>	
			</div>

			<div class="features-text"></div>
			    <p> Staff is good and well trained.Co-operative and provide great service under maintained good level of hygiene</p>
		</div>
		<h1>Pre Booking Online</h1>
		<div class="features-desc">
			<div class="features-icon">
		        <i class="fa fa-check-square-o" ></i>	
			</div>

			<div class="features-text"></div>
			    <p> Option provided to schedule time before as per clients convinient</p>
		</div>
		<h1>Affordable Cost</h1>
		<div class="features-desc">
			<div class="features-icon">
		        <i class="fa fa-inr" ></i>	
			</div>

			<div class="features-text"></div>
			    <p> Affordable cost as it isn't much expensive for clients</p>
		</div>
    </div>
    <div class="features-img"> 
        <img src="images/pexels-thgusstavo-santana-2040189.jpg">
	</div>
</section>
<!--service -->

<section id="service">
	<div class="title-text">
	<p>SERVICES</p>
	<h1>Our Services</h1>
	</div>
	<a href="listing.html">
	<div class="service-box">
		<div class="single-service">
			<img src="images/pic-1.jpg">
			<div class="overlay"></div>
			<div class="service-desc">
				<h3>Hair Styling</h3>
				<hr>
				<p>Best Hair designing is done as per client's desire to create an Attractive presentation.
					It includes hair coloring,hair straightening and etc
				</p>
				<div class="banner-btn">
                    <span>Know more</span>
                </div>
			</div>
		</div>
	</a>
	<a href="listing2.html">
		<div class="single-service">
			<img src="images/body massage2.jpg">
			<div class="overlay"></div>
			<div class="service-desc">
				<h3>Body Massage</h3>
					<hr>
					<p>This service is for the purpose of relaxing muscles,nervous system,joints and other parts of body and therapy</p>
			</div>
				
		</div>
	</a>
	<a href="listing3.html">
		<div class="single-service">
			<img src="images/spa2.jpg">
			<div class="overlay"></div>
			<div class="service-desc">
				<h3>Facial</h3>
				<hr>
				<p>Face pack for the purpose of glowing skin.some services provided are 1.Turmeric and Besan face pack.
					2.Marigold Flower face pack .
				</p>
			</div>
		</div>
    </a>
	<a href="listing4.html">
		<div class="single-service">
			<img src="images/beauty-3.jpg">
			<div class="overlay"></div>
			<div class="service-desc">
				<h3>Pedicure and Manicure</h3>
				<hr>
				<p>The curation and care of a client's hands and feet. It includes skincare,nail care and artifial nail 
				enhancements that can be customized to a variety of preferences. 
				</p>
				</div>	
			</div>
        </div>
    </a>

</section>

<!-- Testimonial -->

<section id="testimonial">
	<div class="title-text">
	<p>Testimonial</p>
	<h1>What Client Says</h1>	
	</div>
	<div class="testimonial-row">
		<div class="testimonial-col">
			<div class="user">
				<img src="images/img-1.jpg">
				<div class="user-info">
					<h4>Christopher James <i class="fa fa-twitter" ></i></h4>
					<small>@christopherjames</small>
				</div>
			</div>
			<p>Good Spa and Salon price is little on higher side,but the offer 
				discounts, proffesional services,I love relaxing massages here.</p>
		</div>
		<div class="testimonial-col">
			<div class="user">
				<img src="images/img-2.jpg">
				<div class="user-info">
					<h4>Sophia Karian <i class="fa fa-twitter" ></i></h4>
					<small>@sophiakarian</small>
				</div>
			</div>
			<p> Nice steam of make up artist and hair dresser,awesome make up done,
				beauty with brain.Keep it up best wishes for future.</p>
		</div>
		<div class="testimonial-col">
			<div class="user">
				<img src="images/img-3.jpg">
				<div class="user-info">
					<h4>Reynold Danial <i class="fa fa-twitter" ></i></h4>
					<small>@reynolddanial</small>
				</div>
			</div>
			<p>Hospitable and proffesional staff, good services, professional and branded products used.</p>
		</div>
	</div>

</section>


<!--footer-->

<section id="footer">
	<img src="images/logo2.png" class="footer-img">
	<div class="title-text">
		<p>CONTACT</p>
		<h1>Visit Shop Today</h1>
		</div>
	<div class="footer-row">
	<div class="footer-left">
		<h1>Opening Hours</h1>
		<p><i class="fa fa-clock-o" ></i>Monday to Friday - 9am to 9pm</p>
		<p><i class="fa fa-clock-o" ></i>Saturday and Sunday - 8am to 10pm</p>
	</div>	
	<div class="footer-right">
		<h1>Get In Touch</h1>
		<p>Serenity Salon,2nd Gate ,Belagavi-590006<i class="fa fa-map-marker" ></i></p>
		<p>sudeepbhimannavar@gmail.com<i class="fa fa-paper-plane" ></i></p>
		<p>+91 7619167809<i class="fa fa-phone" ></i></p>
	</div>	

	</div>	

	<div class="social-links">
	<a href="https://www.instagram.com/invites/contact/?i=1t0yynza86h2t&utm_content=3v61rz9">
		<i class="fa fa-instagram"></i>
	</a>
		<i class="fa fa-facebook"></i>
	<a href="https://twitter.com/Sudeep65812922?s=08">
		<i class="fa fa-twitter"></i>
	</a>
		<i class="fa fa-youtube-play"></i>
		<p>Serenity Salon And Spa</p>
	</div>

</section>

<script>
	var menuBtn = document.getElementById("menuBtn")
	var sideNav = document.getElementById("sideNav")
	var menu =document.getElementById("menu")
	
	sideNav.style.right = "-250px"
	
	menuBtn.onclick = function() {
		if(sideNav.style.right == "-250px"){
			sideNav.style.right = "0";
			menu.src = "images/close.png";
		}
		else{
			sideNav.style.right = "-250px";
			menu.src = "images/menu.png";
	
		}
	}

	var scroll = new SmoothScroll('a[href*="#"]', {
	speed: 500,
	speedAsDuration: true,
})
	</script>

</body>
</html>