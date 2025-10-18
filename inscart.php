<?php
session_start();
include("./admin/inc/db.php");

extract($_POST);
$t = time();
$ins="INSERT INTO cart SET cid ='$cid',pid='$pid',order_time='$t'";
$con->query($ins);
header("location:mypackeage.php");


?>