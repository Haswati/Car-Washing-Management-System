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
    <!--//main-banner-->
    <!--/Client-Section-->
    <section id="contact" class="contact">
    <div class="container">
    <div class="row">
    <table class="table">
   <th>
    <tr>
        <td><b>Package</b></td>
        <td><b>Categories</b></td>
        <td><b>Image</b></td>
        <td><b>Price</b></td>
        <td><b>Description</b></td>
    </tr>
   </th>
    <tbody>
    <?php 
    $uid = $_SESSION['uid'];
    $sel = "SELECT cart.* , package.* FROM cart LEFT JOIN package ON cart.pid=package.id  WHERE cid='$uid'";
    $res = $con->query($sel);
    while( $row = $res -> fetch_assoc() ) { ?>

    <tr>
    <td> <?php echo $row['pname']; ?> </td>
    <td> <?php echo $row['cname']; ?> </td>
    <td> <img src="admin/cimage/<?php echo $row['image']; ?>" style="width: 100px;" > </td>
    <td> <?php echo $row['price']; ?> </td>
    <td> <?php echo $row['description']; ?> </td>
    </tr>

    <?php  }  ?>
    </tbody>
  </table>

    </div>
    </div>
    </section>


  
    <!--//client-Section-->
    <!--/About-Section-->
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
                        <h4><sup>$</sup><?php echo $row['price']; ?><span> / Per Day</span></h4>
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

    <?php include('inc/footer.php'); ?>