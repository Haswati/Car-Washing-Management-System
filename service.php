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

    <section id="services" class="services section-bg w3lpricing">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>What We Offer</span></h6>
                <h3 class="title-w3l two mb-4">High Quality Services</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-percent"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">Offers</a></h4>
                                <p class="mt-3">40% off on your first booking. </p>
                                <a href="offer.php" class="btn btn-style btn-primary about-btn mt-3"> Offer</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-md-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-exchange-alt"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">
                                        Reliable Transfers</a></h4>
                                <p class="mt-3">Experience the most reliable transfer at lowest cost. </p>
                                <a href="reliable.php" class="btn btn-style btn-primary about-btn mt-3"> Reliable Transfers </a>
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-lg-0 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-user-friends"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">Free Cancellation</a></h4>
                                <p class="mt-3">Cancel or change most bookings for free up to 48 hours before pick-up </p>
                                <a href="free.php" class="btn btn-style btn-primary about-btn mt-3"> Free Cancellation </a>
                            </div>
                        </div>

                    </div>
                </div>
                
               
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-car"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">
                                        Quality Vehicles</a></h4>
                                <p class="mt-3">Since all our workshops have the latest diagnostic tools, covering just about all makes and vehicles. </p>
                                <a href="quality.php" class="btn btn-style btn-primary about-btn mt-3"> Quality vehicles </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-trophy"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">

                                        Award winning</a></h4>
                                <p class="mt-3">we won the National Auto Spa 2024 and more...  </p>
                                <a href="award.php" class="btn btn-style btn-primary about-btn mt-3"> Award winning </a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mt-4">
                    <div class="box-wrap">
                        <div class="box-wrap-grid">
                            <div class="icon">
                                <span class="fas fa-headset"></span>
                            </div>
                            <div class="info">
                                <h4><a href="#url">
                                        Online Support 24/7</a></h4>
                                <p class="mt-3">we are always available to serve you. </p>
                                <a href="online.php" class="btn btn-style btn-primary about-btn mt-3"> Online Support 24/7 </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--//Services-Section -->
    <!--/-->
    <!--/Team-Section-->
    <section id="pricing" class="w3lpricing section-bg">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny two mb-2"><span>Our Plans</span></h6>
                <h3 class="title-w3l two mb-2">Pricing Plans</h3>
            </div>
            <div class="row mt-lg-4 mt-2">
            <?php 
			include("admin/inc/db.php");
			
			$sel = "SELECT * FROM  package";
			$res = $con->query($sel);
			while( $row = $res -> fetch_assoc() ) { 
			?>
                <div class="col-lg-3 col-md-6">
                    <div class="box">
                        <img src="admin/cimage/<?php echo $row['image']; ?>" style="width: 100%;height: 200px" alt="saty">
                        <h3><?php echo $row['pname']; ?></h3>
                        <h4><sup>₹</sup><?php echo $row['price']; ?></h4>
                        <ul>                            
                        <li> <?php echo $row['cname']; ?></li> 
                        <li> <?php echo $row['description']; ?> </li>
                        </ul>
                        <?php 
                        // $sid= $_SESSION['uid'];
                        if( isset($_SESSION['uid']) && ($_SESSION['uid'])!="") {
                        ?>

                    <form action="inscart.php" method="post">
                    <fieldset>
                    
                    <p> <input type="hidden" name="cid" class="form-control" value="<?php echo $_SESSION['uid']; ?>" ></p>
                
                    <p> <input type="hidden" name="pid" class="form-control" value="<?php echo $row['id']; ?>"></p>
                    
                    <p> <input type="submit" value="Book Packeage" class="btn btn-primary" > </p>
                                            
                    </fieldset>
                    </form>

                        <?php } else { ?> 
                        <div class="btn-wrap">
                            <a onclick="abc();" class="btn-buy btn btn-style btn-primary">Buy Now</a>
                        </div>
                        <?php } ?> 
                    </div>
                </div>
            <?php } ?>
                

            </div>

        </div>
    </section>
    <section id="team" class="w3l-team">
        <div class="container">
            <div class="section-title">
                <h6 class="title-subw3hny mb-2"><span>Talented Team</span></h6>
                <h3 class="title-w3l"> Our Experts</h3>
            </div>

            <div class="row team-row">
                <!--start-team member -->
                <div class="col-lg-4 col-sm-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team1.jpg" alt="" class="img-fluid radius-image">
                            <div class="overlay">
                                <div class="team-details text-center">
                                    <p>
                                       
                                    </p>
                                    <div class="socials mt-4">
                                        <a href="#url"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#url"><i class="fab fa-twitter"></i></a>
                                        <a href="#url"><i class="fab fa-instagram"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#team">
                            <h6 class="team-title">Carnel Johnson</h6>
                        </a>
                        <p>Founder</p>
                    </div>
                </div>
                <!-- end team member -->

                <div class="col-lg-4 col-sm-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team2.jpg" alt="" class="img-fluid radius-image">
                            <div class="overlay">
                                <div class="team-details text-center">
                                    <p>
                                        Our web design team will spend time with our digital marketing team.
                                    </p>
                                    <div class="socials mt-4">
                                        <a href="#url"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#url"><i class="fab fa-twitter"></i></a>
                                        <a href="#url"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#team">
                            <h6 class="team-title">Tete Sailo</h6>
                        </a>
                        <p>Manager</p>
                    </div>
                </div>
                <!-- end team member -->
                <div class="col-lg-4 col-sm-6 team-wrap mt-lg-5 mt-4">
                    <div class="team-member last text-center">
                        <div class="team-img">
                            <img src="assets/images/team4.jpg" alt="" class="img-fluid radius-image">
                            <div class="overlay">
                                <div class="team-details text-center">
                                    <p>
                                        Our web design team will spend time with our digital marketing team.
                                    </p>
                                    <div class="socials mt-4">
                                        <a href="#url"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#url"><i class="fab fa-twitter"></i></a>
                                        <a href="#url"><i class="fab fa-instagram"></i></a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#team">
                            <h6 class="team-title">Allen Jackson</h6>
                        </a>
                        <p>Advisor</p>

                    </div>
                </div>
                <!-- end team member -->

            </div>

        </div>
    </section>
   
    <?php include('inc/footer.php'); ?>

    <script>
        function abc(){
            alert("Please Login First!!!");
        }
    </script>