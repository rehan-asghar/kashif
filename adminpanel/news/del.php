<?php 
include("../../connection.php");
$del="DELETE FROM news_cat WHERE item_id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>