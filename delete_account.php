<div class="container ">
<div class="col-lg-6">
<form action="" method="POST" enctype="multipart/form-data"">


    <h1>Delete Account</h1>
    
    <hr>
<div class="form-group">

<label><h2>Are you sure You want to Delete your account?</h2></label>
    <div class="clearfix">
      <button class="form-control" type="submit" name="yes" class="btn btn-primary" style="width: 200px;">Yes</button>
    
    </div><div class="clearfix">
      <button class="form-control" type="submit" name="no" class="btn btn-primary" style="width: 200px;">No</button>
    
    </div>
</div>
</form>
</div>
</div>


<?php

include('connection.php');
$c=$_SESSION['customer_email'];


if (isset($_POST['yes'])) {
	

$delete_account="DELETE FROM customers WHERE customer_email='$c'";

$run_delete=mysqli_query($connection,$delete_account);

if ($run_delete) {
	session_destroy();
		echo "<Script>alert('Account deleted successfully..!Good Bye')</Script>";
	echo "<Script>window.open('index.php','_self')</Script>";

}}
if (isset($_POST['no'])) {
	echo "<Script>window.open('user_account.php','_self')</Script>";

}




  ?>