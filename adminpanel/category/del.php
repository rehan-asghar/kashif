<?php 
include("../../connection.php");
$del="DELETE FROM news_category WHERE cate_id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>