
<div class="container ">
<div class="col-lg-6">
<form action="" method="post" enctype="multipart/form-data" >


    <h1>Change password</h1>
    
    <hr>
<div class="form-group">
<label for="passowrd"><b>Old Password</b> </label>
    <input class="form-control" type="password"   value="" name="old_pass" required>
</div><div class="form-group">
<label for="passowrd"><b>New Password</b> </label>
    <input class="form-control" type="password"    value="" name="new_pass" >
</div><div class="form-group">
<label for="passowrd"><b>Confirm Password</b> </label>
    <input class="form-control" type="password"    value="" name="new_pass_again" >
</div>

    <div class="clearfix">
      <button class="form-control" type="submit" name="change_pass" class="btn btn-primary" style="width: 200px;">Change password</button>
    
    </div>

</form>
</div>
</div>


<?php 
include("connection.php");
 $c=$_SESSION['email'];


 if (isset($_POST['change_pass'])) {
 	
$old_pass=$_POST['old_pass'];
$new_pass=$_POST['new_pass'];
$new_pass_again=$_POST['new_pass_again'];


$get_real_pass="SELECT * FROM users WHERE pass='$old_pass'";


$run_real_pass=mysqli_query($connection,$get_real_pass);

$check_pass=mysqli_num_rows($run_real_pass); 


if ($check_pass==0) {
	echo "<Script>alert('Current Password is not valid,try again')</Script>";

exit();

}

if ($new_pass!=$new_pass_again) {
	echo "<Script>alert('New Passowrd didnt matched,try again')</Script>";
}

else
{


	$update_pass="UPDATE users SET pass='$new_pass' WHERE user_email='$c'";

$run_pass=mysqli_query($connection,$update_pass);


if ($run_pass) {
		echo "<Script>alert('Password updated')</Script>";
	echo "<Script>window.open('index.php','_self')</Script>";

}


}



 }




?>