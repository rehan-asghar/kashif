<?php 
session_start();
$userid=$_SESSION['userid'];
error_reporting(0);
include("../../connection.php");	
$name = $_POST['name'];
if($_POST['type']!='update')
{
$check = "select * from cities where city_title = '$name'";
$check=mysqli_query($connection,$check);
if(mysqli_num_rows($check)==0)
{
$query2 ="insert into cities (user_id,city_title) VALUES ('$userid','$name') ";
$query2=mysqli_query($connection,$query2);
}
else{
echo "error";
}
}
else{	
$id = $_POST['id'];
$check = "select * from cities where city_title = '$name'";
$check=mysqli_query($connection,$check);
if(mysqli_num_rows($check)==0)
{
$query2 = "update cities set city_title = '$name' where city_id = '$id' ";
$query2=mysqli_query($connection,$query2);
}
else {
echo "error";
}	
}
?>