<?php 
session_start();
error_reporting(0);
include("../../connection.php");	
$comment = $_POST['comment'];
if($_POST['type']!='update')
{

}
else{
$id = $_POST['id'];
$quer_city = "update comments set comment='$comment' where id = '$id' ";	
$res=mysqli_query($connection,$quer_city);
}
?>