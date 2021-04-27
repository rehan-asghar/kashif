<?php 
session_start();
error_reporting(0);
?>


<!DOCTYPE html>


<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Welcome to The News Bang</title>


   

      
 
      
      </style>
  </head>
<?php
$page_title='Home Page';
include('header.php'); 
?>
  <body  style="background-color: white">



    <!-- Page Content -->
    <div class="container" style="width:90%; background-color: white;">

   
          <!-- Comments Form -->
          <div class="card my-4 col-lg-8">

                        <h2 class="card-header"><strong> Contact us:</strong> </h2>


            <div class="card-body">
      <form action="actions/save_contact.php" onsubmit="return validation()"method="post">
        
        <div class="form-group">
          <label for="user" class="font-weight-bold"> Name: </label>
          <input type="text" name="user" class="form-control" id="user" autocomplete="off">
          <span id="username" class="text-danger font-weight-bold"> </span>
        </div>

        

        <div class="form-group">
          <label class="font-weight-bold"> Mobile Number: </label>
          <input type="text" name="mobile" class="form-control" id="mobileNumber" autocomplete="off">
          <span id="mobileno" class="text-danger font-weight-bold"> </span>
        </div>

        <div class="form-group">
          <label class="font-weight-bold"> Email: </label>
          <input type="text" name="email" class="form-control" id="emails" autocomplete="off">
          <span id="emailids" class="text-danger font-weight-bold"> </span>
        </div>
        <div class="form-group">
          <label class="font-weight-bold"> Message </label>
          <textarea type="text" class="form-control" name="msg" id="text" rows="5" autocomplete="off" >
          </textarea>
                    <span id="textarea" class="text-danger font-weight-bold"> </span>

        </div>

        <input type="submit" name="submit" value="Submit" class="btn btn-primary "   autocomplete="off">


      </form><br><br>

</form>


</div>



          </div>
          <div class=" col-lg-4">
            
<?php 

include('sidebar.php');
 ?>

          </div>

            </div>   
            <div  class="container"  style="width:90%; background-color: white;">
                <?php
$page_title='Home Page';
include('f.html'); 
?>
</div>
<style type="">
  
 input[type=text], input[type=password], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}
select{
    
    
    width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

</style>


      </div>
      <!-- /.row -->

   
    <!-- /.container -->

    <!-- Footer -->
 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    

    function validation(){
      var user = document.getElementById('user').value;
      
      var mobileNumber = document.getElementById('mobileNumber').value;
      var emails = document.getElementById('emails').value;
var textfield=document.getElementById('text').value;

      if(user == ""){
        document.getElementById('username').innerHTML =" ** Please fill the username field";
        return false;
      }
      if((user.length <= 2) || (user.length > 20)) {
        document.getElementById('username').innerHTML =" ** Username lenght must be between 2 and 20";
        return false; 
      }
      if(!isNaN(user)){
        document.getElementById('username').innerHTML =" ** only characters are allowed";
        return false;
      }










      if(mobileNumber == ""){
        document.getElementById('mobileno').innerHTML =" ** Please fill the mobile Number field";
        return false;
      }
      if(isNaN(mobileNumber)){
        document.getElementById('mobileno').innerHTML =" ** user must write digits only not characters";
        return false;
      }
      if(mobileNumber.length!=10){
        document.getElementById('mobileno').innerHTML =" ** Mobile Number must be 10 digits only";
        return false;
      }



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

      if(textfield == ""){
        document.getElementById('textarea').innerHTML =" ** Please fill this textarea field";
        return false;
      }
      if((textfield.length <= 1) || (textfield.length > 50)) {
        document.getElementById('textarea').innerHTML =" ** text lenght must be between 1 and 50";
        return false; 
      }
      if(!isNaN(textfield)){
        document.getElementById('textarea').innerHTML =" ** Only the characters are allowed";
        return false;
      }

    }

  </script>

  </body>

</html>

