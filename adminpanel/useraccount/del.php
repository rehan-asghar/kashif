<?php 
include("../../connection.php");
$del="DELETE FROM users WHERE user_id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>