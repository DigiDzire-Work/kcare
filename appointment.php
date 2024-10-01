<?php
    include("connect.php");
    if(isset($_POST['sub']))
	{
		$nm=$_POST['nm'];
        $dt=$_POST['dt'];
		$pn=$_POST['pn'];
		$location=$_POST['location'];
        $department=$_POST['department'];
        $doctor=$_POST['doctor'];
        $message=$_POST['message'];
        $sql="insert into appointment(name, date_time, phone_number, location, department, doctor, message)values('$nm', '$dt', '$pn', '$location', '$department', '$doctor', '$message')";
        $res=mysqli_query($con,$sql);
        if($res)
        {
            $msg="Appointment Recorded";
        }
	}
?>

<!doctype html>
<html lang="zxx">

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 09:32:42 GMT -->
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="css/bootstrap.min.css">

<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;display=swap" rel="stylesheet">

<link rel="stylesheet" href="css/all.css">

<link rel="stylesheet" href="css/slick.css">
<link rel="stylesheet" href="css/slick-theme.css">

<link rel="stylesheet" href="css/magnific-popup.css" />
<link type="" rel="icon" href="images/KCare Icon.png"/>
<link rel="stylesheet" href="css/style.css">
<title>Appointment</title>
</head>
<body>


<section>
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="top-bar">
<div class="row">
<div class="col-lg-3 col-md-12">
<a class="navbar-brand" href="index.php"><img src="images/KCare Logo new (2).jpg" height="50px" width="100px"alt="#"></a>
</div>
<div class="col-md-9 d-flex align-items-end">
<ul class="ml-auto">
<li>
<img src="images/mail-icon.png" alt="#">
<div>
<span>Mail us</span>
<h4>mail@kcarehospital.com</h4>
</div>
</li>
<li>
<img src="images/call-icon.png" alt="#">
<div>
<span>Toll Free</span>
<h4>+91 9795614614</h4>
</div>
</li>
<li class="appointment-btn">
<a href="appointment.php" class="btn btn-primary">Make Appointment</a>
<i class="fas fa-search"></i>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<div class="light nav-big">
<div class="container">
<div class="row">
<div class="col-md-12">

<nav class="navbar navbar-expand-lg navbar-light">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto nav-sub">
<li class="nav-item">
<a class="nav-link" href="index.php">
Home
</a>
</li>
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Department <i class="fas fa-plus"></i>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<ul>
    <li><a class="dropdown-item" href="anesthesiology.php">Anesthesiology</a></li>
    <li><a class="dropdown-item" href="general.php">General Surgery</a></li>
    <li><a class="dropdown-item" href="orthopedics.php">Orthopedics</a></li>    
    <li><a class="dropdown-item" href="pulmonary.php">Pulmonology</a></li>
    <li><a class="dropdown-item" href="dermatology.php">Dermatology</a></li>
    <li><a class="dropdown-item" href="emergency-medicine.php">Emergency Medicine</a></li>
    <li><a class="dropdown-item" href="pediatrics-neonatology.php">Pediatrics & Neonatology</a></li></li>
</ul>
<ul>
    <li><a class="dropdown-item" href="gastroenterology.php">Gastroenterology</a></li>
    <li><a class="dropdown-item" href="neurology.php">Neurology</a></li>
    <li><a class="dropdown-item" href="gynaecology.php">Gynaecology & Obstetrics</a></li>
    <li><a class="dropdown-item" href="ear-nose-throat.php">Ear, Nose, Throat</a></li>
    <li><a class="dropdown-item" href="icu.php">Critical Care & ICU</a></li>
    <li><a class="dropdown-item" href="nephrology.php">Nephrology</a></li>
    <li><a class="dropdown-item" href="radiology-imaging.php">Radiology & Imaging</a></li></li>
</ul>
<ul>
    <li><a class="dropdown-item" href="cardiology.php">Cardiology</a></li>
    <li><a class="dropdown-item" href="psychiatrics.php">Psychiatry & Mental Health</a></li>
    <li><a class="dropdown-item" href="physiotherapy.php">Physiotherapy & Rehabilitation</a></li>
    <li><a class="dropdown-item" href="oncology.php">Oncology</a></li>
    <li><a class="dropdown-item" href="opthalmology.php">Opthalmology</a></li>
    <li><a class="dropdown-item" href="urology.php">Urology</a></li></li>
</ul>
</div>
</li>

<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="about.php" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
About <i class="fas fa-plus"></i> </a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="about.php">About Us</a>
<a class="dropdown-item" href="directors.php">Directors</a>
</div>
</li>

<li class="nav-item">
<a class="nav-link" href="index.php#services">
Services
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="patients-facilities.php">
Medical Facilities
</a>
</li>

<li class="nav-item">
<a class="nav-link " href="contact-us.php" > 
Contact-Us
</a>
</li>


</ul>
<ul class="nav-icon-wrap">
<li class="nav-item">
<a class="nav-link" href="https://www.facebook.com/kcarehealth"><i class="fab fa-facebook-f"></i></a>
</li>
<li class="nav-item">
<a class="nav-link" href="https://www.instagram.com/kcarehospital"><i class="fab fa-instagram"></i></a>
</li>
</ul>
</div>
</nav>

</div>
</div>
</div>
</div>

<section class="space sub-header">
<div class="container container-custom">
<div class="row">
<div class="col-md-6">
<div class="sub-header_content">
<p>APPOINTMENT</p>
<h3>Lorem ipsum dolor sit ametco nse<br> ctetur adipisicing elitsed.</h3>
<span><i>Home / About Us</i></span>
</div>
</div>
<div class="col-md-6">
<div class="sub-header_main">
<h2>Appointment</h2>
</div>
</div>
</div>
</div>
</section>



<section class="space">
<div class="container container-custom">
<div class="row">
<div class="col-md-6">
<div class="news-img-block">
<img src="images/play-img.png" class="img-fluid" alt="#" />
<a class="video-play-button popup-youtube" href="https://www.youtube.com/watch?v=pBFQdxA-apI">
<span></span>
</a>
<div id="video-overlay" class="video-overlay">
<a class="video-overlay-close">&times;</a>
</div>
</div>
</div>
<div class="col-md-6">
<div class="video-play-text">
<span>Who we are -----</span>
<h2>We Have Advanced Technologies</h2>
<p>
KCare is equipped with cutting-edge technologies that enhance patient care and treatment outcomes. From state-of-the-art diagnostic tools and modular operating theatres to advanced imaging systems and patient monitoring devices, our facility integrates the latest innovations to ensure precise, efficient, and effective medical services.
</p>
<p>
This commitment to technological advancement supports our mission to provide top-tier healthcare and improve the overall patient experience.
</p>
<hr/>
<div class="newsletter-subscribe">
<h4>Subscribe to our Newsletter</h4>
<div class="newsletter-subscribe_form">
<input type="text" class="form-control" placeholder="Enter Your Email" />
<a href="#"><i class="fas fa-chevron-right"></i></a>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="space background-bg4">
<div class="container container-custom">
<div class="row">
<div class="col-md-12 col-lg-6">
<div class="appointment-form_wrap">
<div class="heading-style1">
<span>Online Booking</span>
<h2>Make an Appointment</h2>
</div>
<form action="#" method="POST">
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-cutom">
<input type="text" name="nm" class="form-control form-custom" placeholder="Enter Your Name">
<i class="far fa-user"></i>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-cutom">
<input type="text" name="dt" class="form-control form-custom " placeholder="Date and time">
<i class="far fa-clock"></i>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-cutom">
<input type="text" name="pn" class="form-control form-custom" placeholder="Enter phone number">
<i class="fas fa-phone"></i>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-cutom">
<input type="text" name="location" class="form-control form-custom" placeholder="Location">
<i class="fas fa-map-marker-alt"></i>
</div>
</div>
</div>
<div class="row">
<div class="col-md-6">
<div class="form-group form-group-cutom">
<input type="text" name="department" class="form-control form-custom" placeholder="Choose department">
<i class="far fa-circle"></i>
</div>
</div>
<div class="col-md-6">
<div class="form-group form-group-cutom">
<input type="text" name="doctor" class="form-control form-custom" placeholder="Select doctor">
<i class="far fa-user"></i>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="form-group form-group-cutom">
<label for="exampleFormControlTextarea1">Your Message</label>
<textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<button type="submit" name="sub" class="btn btn-success">Submit</button>
<p><?php  if(isset($msg)) echo $msg; ?></p>
</div>
</div>
</form>
</div>
</div>
<div class="col-md-12 col-lg-6">
<div class="why-choose_block">
<div class="heading-style1">
<span>Why Us</span>
<h2>Why Choose Us</h2>
<p>Choose us for advanced medical care and a patient-focused approach. Our team combines expertise with compassion to deliver exceptional healthcare tailored to your needs.</p>
<hr>
</div>
<div class="whychoose-wrap">
<img src="images/icon1.png" alt="#">
<div class="whychoose-text_block">
<h4>Fastest Growing Clinic</h4>
<p>Excepteur sint occaecat cupidatat non proident, su</p>
</div>
</div>
<div class="whychoose-wrap">
<img src="images/icon2.png" alt="#">
<div class="whychoose-text_block">
<h4>Fastest Growing Clinic</h4>
<p>Excepteur sint occaecat cupidatat non proident, su</p>
</div>
</div>
<div class="whychoose-wrap">
<img src="images/icon3.png" alt="#">
<div class="whychoose-text_block">
<h4>Fastest Growing Clinic</h4>
<p>Excepteur sint occaecat cupidatat non proident, su</p>
</div>
</div>
<div class="whychoose-wrap">
<img src="images/icon4.png" alt="#">
<div class="whychoose-text_block">
<h4>Fastest Growing Clinic</h4>
<p>Excepteur sint occaecat cupidatat non proident, su</p>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="space">
<div class="container container-custom">
<div class="col-md-12">
<div class="heading-style1">
<span>Testimonials</span>
<h2>What Our Clients Say</h2>
</div>
<div class="testi-slider">
<div class="testimonial-wrap">
<img src="images/testi-img1.jpg" class="img-fluid testi-img-icon" alt="#" />
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
</ul>
<p>
<span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
</p>
<span class="testi-name">Mary Jane (ceo)</span>
<div class="testi-styled-bg">
<img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
</div>
</div>
<div class="testimonial-wrap quaternary-br-color">
<img src="images/testi-img2.jpg" class="img-fluid testi-img-icon" alt="#" />
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
</ul>
<p>
<span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
</p>
<span class="testi-name">Mary Jane (ceo)</span>
<div class="testi-styled-bg">
<img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
</div>
</div>
<div class="testimonial-wrap">
<img src="images/testi-img1.jpg" class="img-fluid testi-img-icon" alt="#" />
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
</ul>
<p>
<span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
</p>
<span class="testi-name">Mary Jane (ceo)</span>
<div class="testi-styled-bg">
<img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
</div>
</div>
<div class="testimonial-wrap quaternary-br-color">
<img src="images/testi-img2.jpg" class="img-fluid testi-img-icon" alt="#" />
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
</ul>
<p>
<span>L</span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
</p>
<span class="testi-name">Mary Jane (ceo)</span>
<div class="testi-styled-bg">
<img src="images/testi-side-img_05.png" class="img-fluid" alt="#" />
</div>
</div>
</div>
</div>
</div>
</section>


<section class="counter">
<div class="container container-custom">
<div class="row">
<div class="col-sm-4 col-md-3 col-lg-3">
<div class="counter-block">
<img src="images/counter1.png" alt="#">
<div class="counter-text">
<h2>60+</h2>
<p>Expert Doctors</p>
</div>
</div>
</div>
<div class="col-sm-4 col-md-3 col-lg-3">
<div class="counter-block">
<img src="images/counter2.png" alt="#">
<div class="counter-text">
<h2>1000+</h2>
<p>Happy Patients</p>
</div>
</div>
</div>
<div class="col-sm-4 col-md-3 col-lg-3">
<div class="counter-block">
<img src="images/counter3.png" alt="#">
<div class="counter-text">
<h2>150+</h2>
<p>Award Winner</p>
</div>
</div>
</div>
<div class="col-sm-12 col-md-3 col-lg-3 d-flex align-items-center justify-content-end">
<div class="counter-btn_block">
<a href="#" class="btn btn-success">BOOK NOW</a>
</div>
</div>
</div>
</div>
</section>


<footer>
<div class="container container-custom">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-4">
<div class="foot-contact-block">
<img src="images/KCare Logo new (2).jpg" height="40px" width="100px"  alt="#" />
<p>
Lorem ipsum dolor sit amet, consect <br/> etur adipisicing elit, sed do eius mod <br/>
tempor incididunt ut labore et dolore<br/> magna aliqua. Ut enim ad minim
</p>
<a href="#">
<h4><i class="fas fa-phone"></i>+91 9795614614</h4>
</a>
<a href="#">
<h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="89e0e7efe6c9e4ecedecede0e7a7eae6e4">mail@kcarehospital.com</span></h4>
</a>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-2 offset-lg-1">
<div class="foot-link-box">
<h4>Quick Links</h4>
<ul>
<li>
<a href="about.php"><i class="fas fa-angle-double-right"></i>About Us</a>
</li>
<li>
<a href="#"><i class="fas fa-angle-double-right"></i>Our Mission</a>
</li>
<li>
<a href="index.php#services"><i class="fas fa-angle-double-right"></i>Our Services</a>
</li>
<li>
<a href="#"><i class="fas fa-angle-double-right"></i>Blogs & News</a>
</li>
<li>
<a href="contact-us.php"><i class="fas fa-angle-double-right"></i>Contact Us</a>
</li>
<li>
<a href="#"><i class="fas fa-angle-double-right"></i>Faq</a>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-md-4 col-lg-2">
<div class="foot-link-box">
<h4>Our Services</h4>
<ul>
<li>
<a href="general.php"><i class="fas fa-angle-double-right"></i>General</a>
</li>
<li>
<a href="dermatology.php"><i class="fas fa-angle-double-right"></i>Dermatology</a>
</li>
<li>
<a href="cardiology.php"><i class="fas fa-angle-double-right"></i>Cardiology</a>
</li>
<li>
<a href="physiotherapy.php"><i class="fas fa-angle-double-right"></i>Physiotherapy</a>
</li>
<li>
<a href="neurology.php"><i class="fas fa-angle-double-right"></i>Neurology</a>
</li>
<li>
<a href="gynaecology.php"><i class="fas fa-angle-double-right"></i>Gynaecology</a>
</li>
</ul>
</div>
</div>
<div class="col-md-4 col-lg-2 offset-lg-1">
<div class="foot-link-box footlink-box_btn">
<a href="#" class="btn btn-outline-success">Find a Doctor</a>
<a href="career.php" class="btn btn-outline-success">Career</a>
<a href="#" class="btn btn-outline-success">Newsletter</a>
<ul>
<li>
<a href="https://www.facebook.com/kcarehealth"><i class="fab fa-facebook-f"></i></a>
</li>
<li>
<a href="https://www.instagram.com/kcarehospital"><i class="fab fa-instagram"></i></a>
</li>
<li>
<p class="text-light">Follow Us</p>
</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="copyright">
<p>© copyright Reserved by Digidzire</p>
<a href="#" id="scroll"><i class="fas fa-angle-double-up"></i></a>
</div>
</div>
</div>
</div>
</footer>



<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/jquery-3.5.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="js/slick.min.js"></script>

<script src="js/jquery.magnific-popup.min.js"></script>

<script src="js/script.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8bdcef02ee063c77","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"1a2187940c214caa9d3fed19b4904902","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 09:32:42 GMT -->
</html>