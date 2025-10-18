<?php
session_start();
include("admin/inc/db.php");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Car Transko - Auto Transport Category Bootstrap Responsive Template | Home :: W3layouts </title>
    <!-- google fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,300&display=swap" rel="stylesheet">
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
    <!--/Header-->
  <?php include('inc/navbar.php'); ?>
    <!--//Header-->
    <!--/Banner-Start-->
    <!--/main-banner-->
    <div class="w3l-main-slider position-relative" id="home">
        <div class="w3l-bannerhny-content">
            <div class="container">
                <div class="w3l-bannerhny-info">
                    <h3 class="mb-md-5 mb-4">
                    Restore Your Ride's Glory</h3>
                </div>
                <a href="signup.php" class="btn btn-style btn-primary about-btn mt-3">Book Now</a>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mt-lg-0 mt-md-5 mt-4 ps-lg-5 mx-lg-0">
                    <p class="pr-lg-5"></p>
                </div>
            </div>

             <div class="car-img mx-0 text-center px-lg-5">
                <img src="assets/images/carfinal.jpg" width="100%" height="400" alt="" class="img-fluid">
            </div> 

        </div>
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>Contact Us</span></h6>
                <h3 class="title-w3l mb-2">Get In Touch With Us</h3>
                <p class="w3conatact-p mb-4">Start working with Us that can provide everything you need to generate awareness, drive traffic, connect.
                    We guarantee that you’ll be able to have any issue resolved within 24 hours.</p>
            </div>
            <div class="row">
                <div class="col-lg-5 pe-lg-5">
                    <div class="row">
                        <div class="cont-details">
                            <div class="cont-top" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Company Address</h6>
                                    <p>Car Transko,N-156 D/6 Antisara Surkikol Kolkata.</p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Call Us</h6>
                                    <p><a href="tel:+1(21) 343 5677">+(91) 97515 96554</a></p>
                                    <p><a href="tel:+1(21) 343 5678">+(91) 86343 05678</a></p>
                                </div>
                            </div>
                            <div class="cont-top margin-up" data-aos="fade-up"
     data-aos-duration="3000">
                                <div class="cont-left text-center">
                                    <i class="far fa-envelope"></i>
                                </div>
                                <div class="cont-right">
                                    <h6>Email Us</h6>
                                    <p><a href="mailto:example@mail.com" class="mail">Haswati@mail.com</a></p>
                                    <p><a href="mailto:example@mail2.com" class="mail">Shreejani@mail2.com</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="col-lg-7 mt-lg-0 mt-5" data-aos="fade-up"
     data-aos-duration="3000">
                    <form action="https://sendmail.w3layouts.com/submitForm" method="post" role="form" class="php-email-form">
                        <div class="row">
                            
                            <div class="col form-group">
                                <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email" required="">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Feed Back" required=""></textarea>
                        </div>
                        <div class="w3lhny-submit text-right">
                            <button type="submit" class="btn btn-primary btn-style ">Send Message</button>
                        </div>

                    </form>
                </div>

            </div>
            
        </div>
    </section>
    <!--//main-banner-->
    <!--/Client-Section-->
    <div class="map-iframe mt-5 pt-lg-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl" width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
            </div>
    <!--//contact-->
    <!--/footer-->
    <?php include('inc/footer.php'); ?>