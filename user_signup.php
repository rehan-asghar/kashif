<?php


include('header.php'); 
?> 
<div class="container" style="background-color:white;text-align:;">
<style type="text/css">
  
.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width:50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}


</style>
<div class="row">
<?php 

@session_start();

 ?>

<div class="col-lg-8">


<form style="margin: 20px;" action="user_signup.php" class="login-form-2"  method="POST" enctype="multipart/form-data">

    <h1 style="color:white"><i class="fa fa-user-plus" aria-hidden="true"></i>
Create Profile</h1>
    <p style="color:white;">Please fill in this form to create account.</p>
    <hr>
<div class="form-group">
    <input class="form-control" type="text"   placeholder="Full Name" name="c_name" required> </div><div class="form-group">
    <input class="form-control" type="text"   placeholder="User Name" name="l_name" required> </div>
<div class="form-group">
    <input class="form-control" type="text"   placeholder="Enter email address" name="c_email" ></div>
  <div class="form-group">     
    <input class="form-control" type="text"   placeholder="Enter password" name="c_pass" required></div>
    <div class="form-group">  
  <select class="form-control" name="c_country">
    <option value="">Select a country</option>
    <option value="Pakistan">Pakistan</option>
    <option value="India">India</option>
    <option value="China">China</option>
    <option value="UAE">UAE</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="US">US</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Iran">Iran</option>

  </select>

</div>
  <div class="form-group">  
    <input class="form-control" type="text" pattern="[A-Za-z]{4,50}" placeholder="Enter City Name" name="c_city" required></div>
   <div class="form-group">    
    <input class="form-control" type="text" placeholder="Enter Mobile Numer" name="c_contact" required>
</div>
    
<div class="form-group">

  <input class="form-control" type="file" name="c_image" id="file"  accept="image/x-png,image/gif,image/jpeg" required>
</div>

    <div class="clearfix">
      <button type="submit" name="register" class="signupbtn" style="width: 200px;">Create</button>
    </div>
  </div>
</form>

</div>
<?php 
if(isset($_POST['register'])){
  
$c_name=$_POST['c_name'];
$l_name=$_POST['l_name'];
$c_email=$_POST['c_email'];
$c_pass=$_POST['c_pass'];
$c_country=$_POST['c_country'];
$c_city=$_POST['c_city'];
$c_contact=$_POST['c_contact'];
$c_image=$_FILES['c_image']['name'];
$c_image_tmp=$_FILES['c_image']['tmp_name'];

$c_ip=getUserIP();

$select_user="SELECT * FROM users WHERE user_email='$c_email'";

$check_user=mysqli_query($connection,$select_user);

 $row=$check_user->fetch_assoc();
if ($check_user->num_rows>0) {

//while loop chlegi hr row ka data fetch kregi

 $user_email1=$row['user_email'];



 }   //$email_1 ka variable bnaygny ju sirf us row ka data store krega js mei email huga
    

//agar email already exisit krta hai tw,,,Comparison krne k lyeeee
if ($user_email1 == $c_email) {

//agar $email_1 se enter ke gai value $email mei already mojod hai tu
$_SESSION['email']=$user_email;

 echo "<script>alert('Email already exists..Please Login')</script>";
echo "<script>window.open('user_login.php','_Self')</script>";

}




else
{


$insert_customer="INSERT INTO `users`( `fullname`,`user_name`, `user_email`, `pass`, `country`, `city`, `mob`, `user_image`, `user_ip`,user_type) VALUES ('$c_name','$l_name','$c_email','$c_pass','$c_country','$c_city','$c_contact','$c_image','$c_ip','1')";

$run_customer=mysqli_query($connection,$insert_customer);
move_uploaded_file($c_image_tmp,"user_photos/$c_image" );

echo "<script>alert('Account created successfully')</script>";
echo "<script>window.open('index.php','_Self')</script>";
}

}

 ?>


</div>
</div>
</div>











</div>

<br>
<br>

<hr>
    <?php

include('f.html'); 
?>

 
</div>


















</div>



</div>





</body>
</html>



