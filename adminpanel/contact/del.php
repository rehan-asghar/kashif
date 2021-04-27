<?php 
include("../../connection.php");
$del="DELETE FROM contact WHERE id='".$_POST['no']."'";
$res=mysqli_query($connection,$del);
?>