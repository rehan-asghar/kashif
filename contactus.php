
<?php 

$hostname="localhost";
$username="root";
$password="";
$db_name="newsbang";

$connection=mysqli_connect($hostname,$username,$password,$db_name);
if(isset($_POST['submit'])){
    
    $fname=$_POST['1'];
      $lname=$_POST['2'];
    $email=$_POST['3'];
$cat=$_POST['4'];
    $msg=$_POST['5'];

    
    
  $query="INSERT INTO `contact`( `First_name`, `Last_name`, `Email`, `Category`, `Message`) VALUES ('$fname','  $lname','$email','$cat',' $msg')";
    

    $result = $connection->query($query);

    if($result){
        
        echo "Message Submitted Successfully";
        
    }
        else{
            
            echo "error";
        }
}
?>







