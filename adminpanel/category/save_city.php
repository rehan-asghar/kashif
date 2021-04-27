<?php 
session_start();
$userid=$_SESSION['userid'];
error_reporting(0);
include("../../connection.php");	
$name = $_POST['name'];
if($_POST['type']!='update')
{
$check = "select * from news_category where cate_title = '$name'";
$check=mysqli_query($connection,$check);
if(mysqli_num_rows($check)==0)
{
$query2 ="insert into news_category (user_id,cate_title) VALUES ('$userid','$name') ";
$query2=mysqli_query($connection,$query2);
}
else{
echo "error";
}
}
else{	
$id = $_POST['id'];
$check = "select * from news_category where cate_title = '$name'";
$check=mysqli_query($connection,$check);
if(mysqli_num_rows($check)==0)
{
$query2 = "update news_category set cate_title = '$name' where cate_id = '$id' ";
$query2=mysqli_query($connection,$query2);
}
else {
echo "error";
}	
}
?>