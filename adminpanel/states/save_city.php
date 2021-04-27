<?php 
session_start();
$userid=$_SESSION['userid'];
error_reporting(0);
include("../../connection.php");	
$name = $_POST['name'];
if($_POST['type']!='update')
{
$check = "select * from state_news_cat where state_news_item = '$name'";
$check=mysqli_query($connection,$check);
if(mysqli_num_rows($check)==0)
{
$query2 ="insert into state_news_cat (state_news_item) VALUES ('$name') ";
$query2=mysqli_query($connection,$query2);
}
else{
echo "error";
}
}
else{	
$id = $_POST['id'];
$check = "select * from state_news_cat where cate_title = '$name'";
$check=mysqli_query($connection,$check);
if(mysqli_num_rows($check)==0)
{
$query2 = "update state_news_cat set state_news_item = '$name' where state_news_id = '$id' ";
$query2=mysqli_query($connection,$query2);
}
else {
echo "error";
}	
}
?>