<?php

include '../connection.php';


$email = $_POST['email'];
$username = $_POST['username'];
$pass = $_POST['pass'];


$qry = "SELECT * FROM users WHERE user_email='$email' ";
$qry_run = mysqli_query($connection, $qry);
if(mysqli_num_rows($qry_run) == 0){
$qry2 = "insert into users (user_name,user_email,pass,user_type,Status) VALUES ('$username','$email','$pass','1','Active') ";
$qry_run2 = mysqli_query($connection, $qry2);
}
else{
echo "error";
}
?>