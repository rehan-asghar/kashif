<?php
//////databse connection
$hostname="localhost";
$username="root";
$password="";
$db_name="newsbang";

// Create connection
$connection = new mysqli($hostname, $username, $password,$db_name);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 

?>