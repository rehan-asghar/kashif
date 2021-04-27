<?php 
////////////////////save file for useraccount
session_start();
error_reporting(0);
include("../../connection.php");	
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$usertype = $_POST['usertype'];
$pass = $_POST['pass'];
$mobile = $_POST['mobile'];
if($_POST['type']!='update')
{
$query2 ="insert into users (fullname,user_name,user_email,user_type,mob,pass,Status) VALUES ('$name','$username','$email','$usertype','$mobile','$pass','Active') ";
$res=mysqli_query($connection,$query2);
}
else{
$id = $_POST['id'];
echo $quer_city = "update users set fullname='$name',user_email='$email',user_type='$usertype',mob='$mobile',pass='$pass' where user_id = '$id' ";	
$res=mysqli_query($connection,$quer_city);
}
?>