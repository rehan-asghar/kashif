<?php

include("connection.php");
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
    width: 50%;
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





                <div class="col-md-8 login-form-2" style="margin: 17px;">
                     <h1 style="color:white">Sign in</h1>
    <p  style="color:white">Please fill in this form to Log in.</p>
    <hr>

                    <form class="form animated shake" action="user_login.php"  onsubmit="return validation()" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text"  placeholder="Your Email *" name="c_email" 
                            id="email" />
                                              <span id="emailids" class="text-danger font-weight-bold"> </span>

                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="" name="c_pass" id="pass" />
                                              <span id="passw" class="text-danger font-weight-bold"> </span>

                        </div>
                        <b>  <a style="color: white" href="forgot_pass.php">Forgot Password</a>
</b>
<b><a style="color:white;float: right;" href="user_signup.php">New User?Register Here</a></b>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" name="c_login" value="Login" />
                        </div>
                   
                    </form>
                </div>
    
<br>


<?php 
if (isset($_POST['c_login'])) {

  $customer_email=$_POST['c_email'];
  $customer_pass=$_POST['c_pass'];

$sel_customer="SELECT user_type,user_id FROM users WHERE user_email='$customer_email' AND pass='$customer_pass'";
$run_customer=mysqli_query($connection,$sel_customer);
$check_customer= mysqli_num_rows($run_customer); 
$rec= mysqli_fetch_array($run_customer); 
$usertyp=$rec['user_type'];
$user_id=$rec['user_id'];

if ($check_customer==0) {


  echo"<script>alert('Email or password is not correct,Try Again.!!')</script>";


}
else
{
$updat="update users set Status='Active' where user_id='$user_id'";
$updat=mysqli_query($connection,$updat);
$_SESSION['user_id']=$user_id;
$_SESSION['usertyp']=$usertyp;
$_SESSION['email']=$customer_email;
echo "<script>alert('Logged in Sucessfully')</script>";
echo "<script>window.open('index.php','_self')</script>";


}
}



 ?>





<div class="col-md-3" style="margin: 10px;">
                  
         <?php 


         //include ('sidebar.php') ?>
                                   
                
                    
</div>






</div>

<br>
<br>

<hr>
    <?php

include('f.html'); 
?>

 
</div>






<script type="text/javascript">
    

    function validation(){

      var emails = document.getElementById('email').value;
      
      var pass = document.getElementById('pass').value;

  if(emails == ""){
        document.getElementById('emailids').innerHTML =" ** Please fill the email field";
        return false;
      }
      if(emails.indexOf('@') <= 0 ){
        document.getElementById('emailids').innerHTML =" ** @ Invalid at Position";
        return false;
      }

      if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
        document.getElementById('emailids').innerHTML =" ** . Invalid Position";
        return false;
      }

if(pass == ""){
        document.getElementById('passw').innerHTML =" ** Please put your password";
        return false;
      }
      if((pass.length <= 3) || (pass.length > 20)) {
        document.getElementById('passw').innerHTML =" ** Password is incomplete";
        return false; 
      }
  



}

        </script>











</div>



</div>





</body>
</html>



