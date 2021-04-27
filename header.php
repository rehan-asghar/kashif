<?php 
session_start();
/* if($_SESSION['newsbang']!='newsbang')
{         
printf("<script>location.href='index.php'</script>");
} */
include 'connection.php';
include 'functions.php';
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome to The News Bang</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
       

  <link rel="icon" type="image/png" href="http://pngimg.com/uploads/globe/globe_PNG33.png">

            <link rel="stylesheet" href="css/font-awesome.css">

 <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/animated.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" id="stylesheet1" href="style.css">
<link rel="stylesheet" type="text/css" href="css/sidebar.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    footer {
      background-color: #f2f2f2;
      padding: 25px;}

.dropdown:hover>.dropdown-menu {
  display: block;
}

.dropdown>.dropdown-toggle:active {
  pointer-events: none;
}

   #nav  .ul {margin: 0}

  

  </style>
</head>
<body style="background-color:#EEEDED;font-size:15px;font-family: helvetica;"> 



<style type="text/css">
  
#nav li a{
  color: white;
 font-size: 15px;
font-family:NotoSans-Bold


}
#navv li a{

font-family:NotoSans-Bold; 


}

#nav li a:hover{
 font-size: 18px;


}
@font-face{

font-family: 'ArchivoBlack';
    src:url(fonts/ArchivoBlack-Regular.ttf);


}
@font-face{
font-family:AveriaSerifLibre-Bold ;
    src:url(fonts/AveriaSerifLibre-Bold.ttf);
}@font-face{
font-family:LilitaOne-Regular ;
    src:url(fonts/LilitaOne-Regular.ttf);
}@font-face{
font-family:Merriweather-Regular ;
    src:url(fonts/Merriweather-Regular.ttf);
}@font-face{
font-family:OldStandard-Regular ;
    src:url(fonts/OldStandard-Regular.ttf);
}@font-face{
font-family:OldStandard-Bold ;
    src:url(fonts/OldStandard-Bold.ttf);
}@font-face{
font-family:NotoSans-Bold ;
    src:url(fonts/NotoSans-Bold.ttf);
}@font-face{
font-family:NotoSans-Regular ;
    src:url(fonts/NotoSans-Regular.ttf);
}

img
{
border-radius: 7px;
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;


}
 img:hover {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
@media screen and (max-width:700px) {

    .carousel-inner img {
      width: 100%; 
      min-height: 200px;
    }
   

    .logo img{

  display: none;
    }
 }
@media screen and (max-width:800px) {
    .logo img{

  display: none;
    }
 }
 @media screen and (max-width:900px) {
    .logo img{

  display: none;
    }
 }
 @media screen and (max-width:1000px) {
    .logo img{

  display: none;
    }
 }
 @media screen and (max-width:1100px) {
    .logo img{

  display: none;
    }
 }
 @media screen and (max-width:1200px) {
    .logo img{

  display: none;
    }
 }
 @media screen and (max-width:1150px) {
    .logo img{

  display: none;
    }
 }
</style>




<nav style="background: linear-gradient(to left, #003366 18%, #0000ff 102%);border-radius: 2px;margin-bottom: 0px;margin-top: 0px;padding-top:  0px;padding-bottom: 0px;" xsss class="navbar navbar-expand-lg navbar-inverse fixed-top " id="navbaar">
 <div  class="col-xs-2 logo" style="padding-top: 0px;"> <a class="navbar-brand" href="index.php"><img src="img/globe.png" class="img-fluid" width="30px">
   </a> <a href="index.php"><img src="img/newsbang.png" class="img-fluid" width="100px;" style="margin-top:7px;"> </a> </div>
  <button style="background:white;"  class="navbar-toggler ml-auto hidden-sm-up float-xs-right"  type="button" data-toggle="collapse" data-target="#navbarSupportedContentt" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div  class="collapse navbar-collapse" id="navbarSupportedContentt">
    <ul class="navbar-nav mr-auto " id="nav">
     
  

           <li class="nav-item"><a class="nav-link" href="index.php"><i class="fa fa-home" aria-hidden="true"></i>

 Home</a></li>
                        
            <li class="nav-item"><a class="nav-link" href="Postpage.php?pakistan"><i class="fa fa-flag-o" aria-hidden="true"></i>
 Pakistan</a></li>


       
                        <li class="nav-item"><a class="nav-link" href="Postpage.php?cpec"><i class="fa fa-jpy" aria-hidden="true"></i>
 
  CPEC</a></li>
                        <li class="nav-item"><a class="nav-link" href="Postpage.php?panama"><i class="fa fa-newspaper-o" aria-hidden="true"></i> Panama</a></li>
                  
                        <li><a class="nav-link" href="Postpage.php?elections"><i class="fa fa-bar-chart" aria-hidden="true"></i>
Elections 2021</a></li>

                        <li><a class="nav-link" href="Postpage.php?geo"><i class="fa fa-television" aria-hidden="true"></i>
 Live TV </a>
</li>
<li><a class="nav-link" href="user_signup.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
New User</a></li>

<?php if (!isset($_SESSION['email'])) {
/////if user not login
 ?>
                        <li><a class="nav-link" href="user_login.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Login</a></li>
<?php }?>
<?php if (isset($_SESSION['email'])) {
//////if already user login 
$user_session=$_SESSION['email'];


$get_customer_pic="SELECT * FROM users WHERE user_email='$user_session' ";

$run_customer=mysqli_query($connection,$get_customer_pic);

$row_customer=mysqli_fetch_assoc($run_customer);

$customer_name=$row_customer['user_name'];


 ?>
                       
                        <li><a class="nav-link" href="user_logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
Logout</a></li>                      <li><a class="nav-link" href="user_account.php"><i aria-hidden="true"></i> Welcome
<?php echo $customer_name; ?></a></li></a></li>

<?php }?>


      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Themes</a>
    
 <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
       <div class="row">
   
   <div class="col-md-3">
<p><a href="javascript:void(0);" onclick="changecolor('default')">Default</a></p>
<p><a href="javascript:void(0);" onclick="changecolor('green')">Green</a></p>
<p><a href="javascript:void(0);" onclick="changecolor('red')">Red</a></p>
<p><a href="javascript:void(0);" onclick="changecolor('purple')">Purple</a></p>
<p><a href="javascript:void(0);" onclick="changecolor('pink')">Pink</a></p>
 


</div>

      </div>
      </div>
      </li>


    </ul>
     <form class="form-inline my-2 my-lg-0" method="get" action="result.php" enctype="multipart/form-data">
      <input class="form-control mr-sm-2" type="search" name="user_query" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit">Search</button>
    </form>
 
  </div>
</nav>


<div class=" container text-center" id="header" style="background: linear-gradient(to right, #000099 18%, #0099cc 102%) ;border-radius: 3px;margin-bottom: 0px;margin-top: 0px;padding-top:  55px;padding-bottom: 0px;  " >
 

   <div class="col-md-3 logo"  >
           <img  style="width:60%; " class="img-responsive animated fadeInLeft" style="width:"100% " src="img/globe.png" / >
           </div>
           <div class="col-md-6" >
         <img class="img-responsive animated fadeInLeft" style="width:70%;float: left;margin-right: 150px;padding: 10px; "  src="img/newsbang.png"   / >
</div>
     
    
        
   <div class="col-lg-4">
      
    </div>
    


</div>



<nav style="height:auto;" class="navbar navbar-expand-lg navbar-light bg-light container text-center" >
  <a class="navbar-brand" href="#">
   
  </a>
  <button  class="navbar-toggler ml-auto hidden-sm-up float-xs-right"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse " id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto" id="navv">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-spinner fa-spin fa-1x fa-fw"></i>Latest News</a>
    
 <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
       <div class="row">
   


   <div class="col-md-3">
    <p ><strong class="sub-menu-heading">By State  <i class="fa fa-plane" aria-hidden="true"></i></strong></p>
    <hr>



<?php 
include 'connection.php';
/////////////state news show
$state_news_cat="SELECT * FROM state_news_cat";
  $state_run_cat=mysqli_query($connection,$state_news_cat);
if (mysqli_num_rows($state_run_cat)> 0) {

while ($state_row=mysqli_fetch_array($state_run_cat)) {


 ucfirst ($state_row_cat=$state_row['state_news_item']);
 ucfirst ($state_id=$state_row['state_news_id']);

echo "   <p><a  href='index.php?state=$state_id'>$state_row_cat</a></p>";
  
}

  
}
///////end
?>


</div>

   <div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>


<?php 
include 'connection.php';
////city news first 7 news
$city_news_cat="SELECT * FROM cities LIMIT 0,7";
  $city_run_cat=mysqli_query($connection,$city_news_cat);
if (mysqli_num_rows($city_run_cat)> 0) {

while ($city_row=mysqli_fetch_array($city_run_cat)) {


 ucfirst ($city_row_cat=$city_row['city_title']);
 ucfirst ($city_id=$city_row['city_id']);

echo "   <p><a  href='index.php?city_id=$city_id'>$city_row_cat</a></p>";
  
}

  
}


?>



</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>


<?php 
include 'connection.php';

////city news next 7 news
$city_news_cat="SELECT * FROM cities LIMIT 7,7";
  $city_run_cat=mysqli_query($connection,$city_news_cat);
if (mysqli_num_rows($city_run_cat)> 0) {

while ($city_row=mysqli_fetch_array($city_run_cat)) {


 ucfirst ($city_row_cat=$city_row['city_title']);
 ucfirst ($city_id=$city_row['city_id']);

echo "   <p><a  href='index.php?city_id=$city_id'>$city_row_cat</a></p>";
  
}

  
}


?>



</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>

<?php 
include 'connection.php';

////city news next 7 news
$city_news_cat="SELECT * FROM cities LIMIT 14,7";
  $city_run_cat=mysqli_query($connection,$city_news_cat);
if (mysqli_num_rows($city_run_cat)> 0) {

while ($city_row=mysqli_fetch_array($city_run_cat)) {


 ucfirst ($city_row_cat=$city_row['city_title']);
 ucfirst ($city_id=$city_row['city_id']);

echo "   <p><a  href='index.php?city_id=$city_id'>$city_row_cat</a></p>";
  
}

  
}


?>
</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>


<?php 
include 'connection.php';

////city news next 7 news
$city_news_cat="SELECT * FROM cities LIMIT 21,7";
  $city_run_cat=mysqli_query($connection,$city_news_cat);
if (mysqli_num_rows($city_run_cat)> 0) {

while ($city_row=mysqli_fetch_array($city_run_cat)) {


 ucfirst ($city_row_cat=$city_row['city_title']);
 ucfirst ($city_id=$city_row['city_id']);

echo "   <p><a  href='index.php?city_id=$city_id'>$city_row_cat</a></p>";
  
}

  
}


?>








</div>
<div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>

<?php 
include 'connection.php';

////city news next 7 news
$city_news_cat="SELECT * FROM cities LIMIT 28,7";
  $city_run_cat=mysqli_query($connection,$city_news_cat);
if (mysqli_num_rows($city_run_cat)> 0) {

while ($city_row=mysqli_fetch_array($city_run_cat)) {


 ucfirst ($city_row_cat=$city_row['city_title']);
 ucfirst ($city_id=$city_row['city_id']);

echo "   <p><a  href='index.php?city_id=$city_id'>$city_row_cat</a></p>";
  
}

  
}


?>




</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>

</div>
<div class="col-md-3">
    <p ><strong class="sub-menu-heading">By City <i class="fa fa-map-marker" aria-hidden="true"></i></strong></p> <hr>


</div>

 


   </div>

       </div>
          
      </li>

   
      </li>    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">World</a>
    
 <div class="dropdown-menu mega-menu"  aria-labelledby="navbarDropdown">
       <div class="row">

    <?php 
$get="SELECT * FROM news_cat WHERE news_cate='2'";

$run=mysqli_query($connection,$get);
while ($row_products=mysqli_fetch_assoc($run)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];

echo "<div class='col-md-3'>
           

<a  href='post.php?item_id=$item_id'>

<img src='news_photos/$news_image' class='img-fluid'>
<h6  class='cap' style='color:white;font-family:AveriaSerifLibre-Bold;'>$news_title </h6>
</a>


         </div>";


}
    ?>
          
          </li>    

       
          
      </li>    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Business</a>
    
 <div class="dropdown-menu mega-menu"  aria-labelledby="navbarDropdown">
       <div class="row">
<?php


$get_products="SELECT * FROM news_cat WHERE news_cate='9' ORDER BY rand() LIMIT 0,8";

$run_products=mysqli_query($connection,$get_products);
while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  <div class='col-md-3'>
           

<a  href='post.php?item_id=$item_id'>

<img src='news_photos/$news_image' class='img-fluid'>
<h6  class='cap' style='color:white;font-family:AveriaSerifLibre-Bold;'>$news_title </h6>
</a>


         </div>  ";



}


?>




      
 
      </li>    

<!--
  <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lifestyle</a>
    
 <div class="dropdown-menu mega-menu" aria-labelledby="navbarDropdown">
       <div class="row">
   


   <div class="col-md-3">
    <p ><strong class="sub-menu-heading">Health </strong></p>
    <hr>
<p>
  <a href="#">Health problem</a>
 
</p>  
<p>
   <a href="#">Mind</a>
</p>
<p>
   <a href="#">Soul</a>
 
</p>
<p>  
    <a href="#">Diet</a>

</p><p>  
    <a href="#">Homeopathy</a>

</p><p>  
    <a href="#">Elopathy</a>

</p>

</div>

   <div class="col-md-3">
    <p ><strong class="sub-menu-heading">Fitness </strong></p> <hr>
<p>
       <a href="Postpage.php">Inspiration</a>
</p>
<p>
  <a href="Postpage.php">Weight loss</a>

</p>
<p>
 <a href="Postpage.php">Excercise</a>

</p>
<p>  
<a href="Postpage.php">Workout</a>

</p>
<p>
  <a href="Postpage.php">Gym hacks</a>


</p><p>
<a href="Postpage.php">Day Routine</a> 


</p>
</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">Parenting </strong></p> <hr>
<p>
       <a href="Postpage.php">Pregnency</a>
</p>
<p>
  <a href="Postpage.php">Babies</a>

</p>
<p>
 <a href="Postpage.php">Kids</a>

</p>
<p>  
<a href="Postpage.php">Teens</a>

</p>
<p>
  <a href="Postpage.php">School life</a>


</p><p>
<a href="Postpage.php">Parent guide</a>


</p>
</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">Food </strong></p> <hr>


<p>
          <a href="Postpage.php">Recepies</a>
</p>
<p>
 <a href="Postpage.php">Street food</a>

</p>
<p>
<a href="Postpage.php">Fast foods</a>

</p>
<p>  

<a href="Postpage.php">Eat</a>

</p>
<p>

<a href="Postpage.php">Drinks</a>


</p><p>
<a href="Postpage.php">Warnings</a>



</p>
</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">Fashion </strong></p> <hr>


<p>
          <a href="Postpage.php">Fashions shows</a>
</p>
<p>
 <a href="Postpage.php">Designers</a>

</p>
<p>
<a href="Postpage.php">Fashion trends</a>

</p>
<p>  

<a href="Postpage.php">People</a>

</p>



</div>
<div class="col-md-3">
    <p ><strong class="sub-menu-heading">Beauty </strong></p> <hr>

<p>
  <a href="Postpage.php">Face & Body</a>

</p>
<p>
<a href="Postpage.php">For men</a>

</p>
<p>
<a href="Postpage.php">For women</a>

</p>
<p>  

<a href="Postpage.php">Cosmetic surgery</a>

</p>

</div><div class="col-md-3">
    <p ><strong class="sub-menu-heading">Relationships </strong></p> <hr>

<p>
  <a href="Postpage.php">Family</a>

</p>
<p>
<a href="Postpage.php">Friends</a>

</p>
<p>
<a href="Postpage.php">Marriages</a>

</p>
<p>  

<a href="Postpage.php">Advices</a>

</p>

</div>
<div class="col-md-3">
    <p ><strong class="sub-menu-heading">Home </strong></p> <hr>

<p>
<a href="Postpage.php">Interior</a>

</p>
<p>
<a href="Postpage.php">Outdoors</a>

</p>
<p>  

<a href="Postpage.php">Pets</a>

</p>
<p>

<a href="Postpage.php">True stories</a>


</p>
</div>

 


   </div>

       </div>
          
      </li>
-->
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sports</a>
    
 <div class="dropdown-menu mega-menu"  aria-labelledby="navbarDropdown">
       <div class="row">
         
<?php


$get_products="SELECT * FROM news_cat WHERE news_cate='11' ORDER BY rand() LIMIT 0,8";

$run_products=mysqli_query($connection,$get_products);
while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "         <div class='col-md-3'>
           

<a  href='post.php?item_id=$item_id'>

<img src='news_photos/$news_image' class='img-fluid'>
<h6 style='color:white;font-family:AveriaSerifLibre-Bold;'>$news_title </h6>
</a>


         </div>  ";



}


?>


         </div>

 
      </li>            <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trending</a>
    
 <div class="dropdown-menu mega-menu"  aria-labelledby="navbarDropdown">
       <div class="row">
        


<?php


$get_products="SELECT * FROM news_cat WHERE news_cate='7' ORDER BY rand() LIMIT 0,8";

$run_products=mysqli_query($connection,$get_products);
while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "         <div class='col-md-3'>
           

<a  href='post.php?item_id=$item_id'>

<img src='news_photos/$news_image' class='img-fluid'>
<h6  class='cap' style='color:white;font-family:AveriaSerifLibre-Bold;'>$news_title </h6>
</a>


         </div>  ";



}


?>

         </div>

 
      </li>      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Entertainment</a>
    
 <div class="dropdown-menu mega-menu"  aria-labelledby="navbarDropdown">
       <div class="row">
<?php


$get_products="SELECT * FROM news_cat WHERE news_cate='12' ORDER BY rand() LIMIT 0,8";

$run_products=mysqli_query($connection,$get_products);
while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "         <div class='col-md-3'>
           

<a  href='post.php?item_id=$item_id'>

<img src='news_photos/$news_image' class='img-fluid'>
<h3 class='cap' style='color:white;font-family:AveriaSerifLibre-Bold;'>$news_title </h3>
</a>


         </div>  ";



}


?>



        </div>
 
      </li>      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Technology</a>
    
 <div class="dropdown-menu mega-menu"  aria-labelledby="navbarDropdown">
       <div class="row">
         <?php


$get_products="SELECT * FROM news_cat WHERE news_cate='13' ORDER BY rand() LIMIT 0,8";

$run_products=mysqli_query($connection,$get_products);
while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "         <div class='col-md-3'>
           

<a  href='post.php?item_id=$item_id'>

<img src='news_photos/$news_image' class='img-fluid'>
<h6  class='cap' style='color:white;font-family:AveriaSerifLibre-Bold;'>$news_title </h6>
</a>


         </div>  ";



}


?>
         </div>
      </li>     
      
   <li class="nav-item active">
        <a class="nav-link" href="contact.php">Contact <span class="sr-only"></span></a>
      </li>
</ul>
</div>
</nav>


  

        


 

<script src="js/color.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>


        
   