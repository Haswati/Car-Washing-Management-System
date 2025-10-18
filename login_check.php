<?php
session_start();
include("admin/inc/db.php");
extract($_POST);
$sel = "SELECT * FROM user WHERE (email='$uname' OR username='$uname') AND password='$password'";
$res = $con->query($sel);
if($res->num_rows>0){
$row = $res->fetch_assoc();

$_SESSION['uid'] = $row['id'];
$_SESSION['uname'] = $row['username'];

header("location: index.php");
 } else { ?>
<script>
    
    alert("enter valid informations....!!!!");
    window.location = "login.php";
</script>
<?php } ?>