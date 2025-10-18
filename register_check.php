    <?php 
    include("./admin/inc/db.php");


    $u=$_POST['user_name'];
    $e=$_POST['u_mail'];
    $ph=$_POST['ph_no'];
    $pass=$_POST['u_pass'];

    $ins="INSERT INTO sinup SET user_name='$u',u_mail='$e',ph_no='$ph',u_pass='$pass'";

    if($con->query($ins)){
        header("location:login.php");
    }



    ?>