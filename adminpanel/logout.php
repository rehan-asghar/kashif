<?php
session_start();
unset($_SESSION['news']);
header("location:index.php")	///////////redirect to login page 
?>