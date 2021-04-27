<?php
session_start();
include("../connection.php");

$us=$_POST['email'];
$aa=$_POST['password'];
///////query to check credentials
$check="SELECT * FROM users where user_email='$us' and user_type='0'";
$run=mysqli_query($connection,$check);

if(mysqli_num_rows($run)>0)
{
$fet=mysqli_fetch_assoc($run);
if($fet['pass']==$aa)
{
$_SESSION['username']=$fet['user_name'];
$_SESSION['userid']=$fet['user_id'];
$_SESSION['email']=$fet['user_email'];
$_SESSION['news']='news';

printf('<script>location.href="header.php"</script>');
}
else
{
echo "error-password";
printf('<script>location.href="index.php?id=errorc"</script>');
}	
}
else
{
echo "error-user";
printf('<script>location.href="index.php?id=errorc"</script>');
}

?>