<?php
include("connect.php");
if (isset($_POST['sub'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $em = $_POST['em'];
    $pn = $_POST['pn'];
    $message = $_POST['message'];
    $sql = "insert into contact(first_name, last_name, email, phone_number, suggestion)values('$first_name', '$last_name', '$em', '$pn', '$message')";
    $res = mysqli_query($con, $sql);
    if ($res) {
        $msg = "Suggestion Recorded";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- favicon is here -->
    <link type="" rel="icon" href="images/Icon.png" />
    <title> Contact || Kcare Multispecial Hospital ||</title>
</head>
<body>
    
 <?php 
 include("header.php");
 ?>

    <section class="space sub-header">
        <div class="container container-custom">
            <div class=" row">
                <div class="col-md-6">
                    <div class="sub-header_content">
                        <p>CONTACT US</p>
                        <h3>Lorem ipsum dolor sit ametco nse<br> ctetur adipisicing elitsed.</h3>
                        <span><i>Home / Contact Us</i></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="sub-header_main">
                        <h2>Contact Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="space">
        <div class="container container-custom">
            <div class=" row">
                <div class="col-md-8">
                    <div class="map-img-wrap">
                        <img src="images/contact-map.png" class="img-fluid" alt="#">
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li><i class="fas fa-map-marker-alt"></i></li>
                            <li><i class="fas fa-map-marker-alt"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="contact-box">
                        <p>Get in Touch – Contact Us for Any Inquiries or Appointments. We're Here to Assist You.</p>
                        <hr>
                        <div class="contact-title">
                            <h4>Contact Information</h4>
                            <i class="fas fa-phone-volume"></i>
                            <div class="contact-title_icon">
                                <p>Phone</p>
                                <h6>+91 9795614614</h6>
                            </div>
                        </div>
                        <div class="contact-title">
                            <i class="fas fa-envelope"></i>
                            <div class="contact-title_icon">
                                <p>Email</p>
                                <h6><a href="" class="__cf_email__" data-cfemail="99f0f7fff6d9fce1f8f4e9f5fcb7faf6f4">mail@kcarehospital.com</a></h6>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="contact-box">
                        <div class="contact-title">
                            <h4>Head Office</h4>
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="contact-title_icon">
                                <p>Location</p>
                                <h6>16/111, Civil Lines <br>
                                    Opp. Christ Church College, Bada Chauraha <br>
                                    Kanpur - 208001</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section>
        <iframe width="100%" height="450" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14285.90245024021!2d80.3532567!3d26.4726271!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399c396064f20955%3A0x2205045d1761431!2sKCare%20Multispecialty%20Hospital!5e0!3m2!1sen!2sin!4v1727698257255!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="container container-custom">
            <div class="row">
                <div class="col-md-7 offset-md-5 col-lg-6 offset-lg-6">
                    <div class="get-in-touch">
                        <img src="images/contact-form-bg.png" class="img-fluid get-in-bg" alt="#">
                        <h3>Get in Touch with Us</h3>
                        <form method="POST">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
                                        <i class="far fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="em" placeholder="Your Email" required>
                                        <i class="far fa-envelope"></i>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="number" class="form-control" name="pn" placeholder="Your Phone Number" required>
                                        <i class="fas fa-phone"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group textarea-icon">
                                        <textarea class="form-control" name="message" required placeholder="Your Message" id rows="3"></textarea>
                                        <i class="far fa-envelope"></i>
                                        <button type="submit" name="sub" class="btn btn-primary">Submit</button>
                                        <p><?php if (isset($msg)) echo $msg; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div id="result" class="text-white"></div>
                        </form>
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
                        <img src="images/KCare Logo new (2).jpg" height="40px" width="100px" alt="#" />
                        <p>
                            Lorem ipsum dolor sit amet, consect <br /> etur adipisicing elit, sed do eius mod <br />
                            tempor incididunt ut labore et dolore<br /> magna aliqua. Ut enim ad minim
                        </p>
                        <a href="#">
                            <h4><i class="fas fa-phone"></i>+91 9795614614</h4>
                        </a>
                        <a href="#">
                            <h4><i class="far fa-envelope"></i><span class="__cf_email__" data-cfemail="c7aea9a1a887aaa2a3a2a3aea9e9a4a8aa">mail@kcarehospital.com</span></h4>
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



    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"rayId":"8bdcef203b4b040f","version":"2024.8.0","r":1,"serverTiming":{"name":{"cfL4":true}},"token":"1a2187940c214caa9d3fed19b4904902","b":1}' crossorigin="anonymous"></script>
</body>

<!-- Mirrored from demo.web3canvas.com/themeforest/medenin/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 04 Sep 2024 09:32:51 GMT -->

</html>