<?php

session_start();	
include '../connection.php';


$email = $_POST['email'];
$pass = $_POST['pass'];


$qry = "SELECT * FROM users WHERE user_email='$email' and pass='$pass' ";
$qry_run = mysqli_query($connection, $qry);
if(mysqli_num_rows($qry_run) > 0){
echo "Login Successfully";
$_SESSION['newsbang']='newsbang';
}
else{
echo "Please Enter Valid E-Mail or Pass";
unset($_SESSION['newsbang']);
header("location:index.php");
}
?>