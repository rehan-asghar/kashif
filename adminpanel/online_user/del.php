<?php 
include("../../connection.php");
$del="DELETE FROM comments WHERE id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>