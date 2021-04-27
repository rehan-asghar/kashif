<?php

session_start();
include("connection.php");
$updat="update users set Status='InActive' where user_id='".$_SESSION['user_id']."'";
$updat=mysqli_query($connection,$updat);

session_destroy();



header('Location:user_login.php');



?>