<?php
include('connection.php');

?>


<div class="container">

  	<div class="row">
  		<div class="col-lg-10">
        <?php

if (isset($_GET['edit_account'])) {
$customer_email=$_SESSION['email'];

$customer="SELECT * FROM users WHERE user_email='$customer_email' ";
$rc=mysqli_query($connection,$customer);
$row=mysqli_fetch_assoc($rc);

$id=$row['user_id'];
$name=$row['user_name'];
$lname=$row['fullname'];
$email=$row['user_email'];
$pass=$row['pass'];
$contact=$row['mob'];
$image=$row['user_image'];


}

  ?>
<form action="" method="post" enctype="multipart/form-data"">

    <h1>Edit Account</h1>
    <p>Update Your profile</p>
    <hr>
<div class="form-group">
<label for="Firstname"><b>Full Name</b> </label>
    <input class="form-control" type="text"   placeholder="Enter first name" value="<?php echo $name ; ?>" name="c_name" required>

<label for="Firstname"><b>User Name</b> </label>
    <input class="form-control" type="text"   placeholder="Enter last name" value="<?php echo $lname ; ?>" name="l_name" required>

  <label for="Email"><b>Email</b></label>
    <input class="form-control" type="text" value="<?php echo $email ; ?>"    name="c_email" >
       <label for="Password"><b>Customer Password</b></label>
    <input  class="form-control"	 type="text"  value="<?php echo $pass ; ?>"  name="c_pass" required>
      <label for="Mobilenumber"><b>Mobile Number</b></label>
    <input class="form-control" type="text" name="c_contact" value="<?php echo $contact ; ?>" required>
    
<br>


    <div class="clearfix">
      <button class="form-control" type="submit" name="update_account" class="btn btn-primary" style="width: 200px;">Update Now</button>
    </div>



</b>
</b>
</label>
</div>

</form>










<?php 

if (isset($_POST['update_account'])) {

$update_id=$id;
$c_name=$_POST['c_name'];
$l_name=$_POST['l_name'];
$c_email=$_POST['c_email'];
$c_pass=$_POST['c_pass'];
$c_contact=$_POST['c_contact'];

$update_c="UPDATE users SET  user_name='$c_name', fullname='$l_name', user_email='$c_email', pass='$c_pass', mob='$c_contact' WHERE user_id='$update_id'";

$run_c=mysqli_query($connection,$update_c);

if ($run_c) {
	echo "<Script>alert('your account has been updated')</Script>";
	echo "<Script>window.open('user_account.php','_self')</Script>";


}

}





?>
</div>
</div>

</div>

