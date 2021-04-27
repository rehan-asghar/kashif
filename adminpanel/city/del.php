<?php 
include("../../connection.php");
$del="DELETE FROM cities WHERE city_id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>