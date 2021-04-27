<?php 
include("../../connection.php");
$del="DELETE FROM state_news_cat WHERE state_news_id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>