<?php 
session_start();
$user_id=$_SESSION['user_id'];
include('functions.php');



$hostname="localhost";
$username="root";
$password="";
$db_name="newsbang";

//connection with database
$connection=mysqli_connect($hostname,$username,$password,$db_name);
if(isset($_POST['submit'])){
    

if (!isset($_SESSION['email'])) {

  echo "<script>alert('First Login to your account')</script>";

    echo "<script>window.open('user_login.php','_self')</script>";
    exit();}
    else
    {



    $name=$_POST['1'];
    $email=$_POST['2'];
    $comment=$_POST['3'];
    $itemid=$_POST['itemid'];

    
    
  $query="INSERT INTO `comments`( `name`, `email`, `comment`,user_id,item_id) VALUES ('$name','$email','$comment','$user_id','$itemid')";
    

    $result = $connection->query($query);

    if($result){
        
        echo "<Script>alert('Comment submitted successfully.Thank You..!!!')</Script>";
        echo "<Script>window.open('index.php','_self')</Script>";
        
    }
        else{
            
            echo "<Script>alert('Something went wrong,Try again.')</Script>";
        }
    }

}



?>