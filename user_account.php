<?php 

if (isset($_SESSION['email'])) {

$email=$_SESSION['email'];
/////user fetch here 
   
$user_check="SELECT * FROM users WHERE user_email='$email'";
$run_user=mysqli_query($connection,$user_check);
$check=mysqli_num_rows($run_user);


if ($check==0) {
    

header('Location: user_login.php');

}




}




?>

<?php

include('header.php'); 
?> 
<div class="container" style="background-color:white;text-align:;">
<style type="text/css">
	
body{
}
.emp-profile{
    padding: 3%;
    margin-top: 1%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 50%;
    height: 70%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -15%;
    width: 60%;
    border: none;
    border-radius: 10;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}


</style>




<?php

$user_session=$_SESSION['email'];


$get_customer_pic="SELECT * FROM users WHERE user_email='$user_session' ";

$run_customer=mysqli_query($connection,$get_customer_pic);

$row_customer=mysqli_fetch_assoc($run_customer);

$customer_pic=$row_customer['user_image'];
$customer_id=$row_customer['user_id'];
$customer_contact=$row_customer['mob'];
$customer_name=$row_customer['fullname'];
$customer_email=$row_customer['user_email'];

 ?>


<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">



                    <div style="background-color: #E9EBEE;  border-radius: 10;" class="col-md-3">
                        <div class="profile-img">
                          <?php echo "<img src='user_photos/$customer_pic' width='50'/>
                            <div class='file btn btn-lg btn-primary'>
                                $customer_name
                            </div> "; ?> 
                        </div>
                    </div>
                    <div class="col-md-6">
                  
   <div style="background-color: #E9EBEE;  border-radius: 10;"  class="profile-head">

<h4>  <?= $customer_name; ?>
                                    </h4>                            
                                    <h6>
<?= $customer_email; ?> </h6>
                   
                        </div>
                    </div>

                      <?php

if (!isset($_GET['edit_account'])) {
if (!isset($_GET['change_pass'])) {
    if (!isset($_GET['delete_account'])) {
echo "";



                 ?>
                    <div class="col-md-2">
                       
                    </div>
                </div>

              
                <div style="  border-radius: 10;" class="row">
                    <div style="background-color: #E9EBEE;  border-radius: 10;" class="col-md-3">
                         <div class="profile-work">
                            <a href="user_account.php?my_items">Saved Items</a><br/>
                            <a href="user_account.php?edit_account">Edit Profile</a><br/>
                            <a href="user_account.php?change_pass">Change Password</a><br/>
                         <!--<a href="user_account.php?delete_account">Delete Account</a><br/>-->
                            <a href="customer_logout.php">Logout</a>
                         
                        </div>



                    </div>
                    <div class="col-md-6">
                     <div class="row">
                                            <div class="col-md-6">
                                                <label>User Id</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $customer_id ; ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $customer_name ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $customer_email ; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $customer_contact ; ?></p>
                                            </div>
                                        </div>
                            </div>
                </div>
            </form> 

<?php }}} ?>

                <?php 
if (isset($_GET['my_items'])) {
  

include("my_items.php");

}

if (isset($_GET['edit_account'])) {
  

include("edit_account.php");

}
if (isset($_GET['change_pass'])) {
  

include("change_pass.php");

}

if (isset($_GET['delete_account'])) {
  

include("delete_account.php");

}
if (isset($_GET['del'])) {
  $del=$_GET['del'];
$delete="DELETE FROM cart WHERE p_id='$del'";

$rdelete=mysqli_query($connection,$delete);
if ($rdelete) {
  
echo "<script>alert('Items delted succcessfully')</script>";
echo "<script>window.open('user_account.php?my_items','_self')</script>";

}
else
{
echo "<script>alert('Something went wrong')</script>";
echo "<script>window.open('user_account.php?my_items','_self')</script>";



}

}

 ?>


        </div>

<?php
include('f.html');

if (isset($_GET['del'])) {

  $del=$_GET['del'];
  $del="DELETE FROM cart WHERE p_id='$del'";
  $run_del=mysqli_query($connection,$del);



}



 ?>


</body>
</html>



