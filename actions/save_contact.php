<?php 
///////////save file for contact us
session_start();
error_reporting(0);
$uemail=$_SESSION['email'];
$user_id=$_SESSION['user_id'];
include("../connection.php");	
$name = $_POST['user'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$msg = $_POST['msg'];

if (!isset($_SESSION['email'])) {

  echo "<script>alert('First Login to your account')</script>";

    echo "<script>window.open('user_login.php','_self')</script>";
    exit();}
    else
    {
$query2 ="insert into contact (First_name,Last_name,Email,customer_id,Message,user_id) VALUES ('$name','$name','$email','$user_id','$msg','$user_id') ";
$query2=mysqli_query($connection,$query2);

  echo "<script>alert('Successfully')</script>";

    echo "<script>window.open('../index.php','_self')</script>";
	}
?>