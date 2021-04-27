



<?php
/////for user ip
function getUserIP()
{

//ip address get krne ka function
    // Get real visitor IP behind CloudFlare network
    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
              $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
              $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
    }
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}

$user_ip = getUserIP();
//////connection to database from php
$hostname="localhost";
$username="root";
$password="";
$db_name="newsbang";

// Create connection
$connection = new mysqli($hostname, $username, $password,$db_name);
// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} 
//getting national news data
function national(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='1' ORDER BY rand() LIMIT 0,6";

$run_products=mysqli_query($connection,$get_products);




   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}




while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  <div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 style='font-family:NotoSans-Bold;' class='card-title'>
                <a href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p>Posted On: <i class='fa fa-clock-o'></i> 





                 </p>
     </div>
          </div>
        </div>   
 
        <div></div>
  ";



}


}
//saved 
 function cart(){

global $connection;
  if (isset($_GET['save'])) {
  
$ip_add=getUserIP();
$p_id=$_GET['save'];

if (isset($_SESSION['email'])) {

$user_session=$_SESSION['email'];

$user="SELECT * FROM users WHERE user_email='$user_session'";
$run_user=mysqli_query($connection,$user);

$row=mysqli_fetch_assoc($run_user);
$cid=$row['user_id'];
$cname=$row['user_name'];

$check_pro="SELECT * FROM cart WHERE cid='$cid' AND p_id='$p_id'";
$run_check=mysqli_query($connection,$check_pro);


if (mysqli_num_rows($run_check)>0) {
  echo "<script>alert('News is already saved')</script>";
  echo "<script>window.open('index.php','_self')</script>";
exit();

}
else
{

$q="INSERT INTO `cart`(`p_id`,`cid`,`ip_add`) VALUES ('$p_id','$cid','0')";

$run_q=mysqli_query($connection,$q);
  echo "<script>alert('Post Saved Successfully')</script>";
    echo "<script>window.open('index.php','_self')</script>";


}

  }
  else
  {
          echo "<script>alert('First Login to your account')</script>";

    echo "<script>window.open('user_login.php','_self')</script>";

  }
 }



}
//national 1 ka data
function national1(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='1' ORDER BY rand() LIMIT 0,10";

$run_products=mysqli_query($connection,$get_products);




   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}



while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  <div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 style='font-family:NotoSans-Bold;' class='card-title'>
                <a href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p>Posted On: <i class='fa fa-clock-o'></i> $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>
  ";



}


}

function national2(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='1' ORDER BY rand() LIMIT 0,16";

$run_products=mysqli_query($connection,$get_products);




   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}


while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  <div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p>Posted On: <i class='fa fa-clock-o'></i> $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>
  ";



}


}
//Getting trending post data
function trending(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='7' ORDER BY rand() LIMIT 0,8";

$run_products=mysqli_query($connection,$get_products);

   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}



while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  

       <div class='col-lg-3 portfolio-item'>
          <div class='card h-100'>
            <a href='#''><img class='card-img-top' src='news_photos/$news_image' alt='World news image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href='#''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc        <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p> <i class='fa fa-clock-o'></i>  $news_date</p>

            </div>
          </div>
        </div>  











  ";



}


}
function trending1(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='7' ORDER BY rand() LIMIT 0,2";

$run_products=mysqli_query($connection,$get_products);




   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}
while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  

       <div class='col-lg-3 portfolio-item'>
          <div class='card h-100'>
            <a href='#''><img class='card-img-top' src='news_photos/$news_image' alt='World news image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href='#''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc        <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p> <i class='fa fa-clock-o'></i>  $news_date</p>

            </div>
          </div>
        </div>  











  ";



}


}
function trending2(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='7' ORDER BY rand() LIMIT 0,3";

$run_products=mysqli_query($connection,$get_products);



   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}




while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  

       <div class='col-lg-3 portfolio-item'>
          <div class='card h-100'>
            <a href='#''><img class='card-img-top' src='news_photos/$news_image' alt='World news image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href='#''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc        <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p> <i class='fa fa-clock-o'></i>  $news_date</p>

            </div>
          </div>
        </div>  











  ";



}


}
//getting slider data from DB
//data for sidebar popular posts
function popular(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='7' ORDER BY rand() LIMIT 0,5";

$run_products=mysqli_query($connection,$get_products);



   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}




while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  
                           <div class='row'>
                                <div class='col-sm-4'>
                                    <a href='post.php?item_id=$item_id'><img src='news_photos/$news_image' alt='Image 1'></a>
                                </div>
                              <div class='col-sm-8 details'>

                                    <a style='font-family:NotoSans-Bold;color:black;'  href='post.php?item_id=$item_id'><h5>$news_title</h5></a>
                                    <p><i class='fa fa-clock-o'></i>
$news_date</p>
                                </div>
                            </div>    










  ";



}


}
//getting world data from news
function world(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='2' ORDER BY rand() LIMIT 0,6";

$run_products=mysqli_query($connection,$get_products);




   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}



while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo "  

       <div class='col-lg-6 portfolio-item'>
          <div class='card h-100'>
            <a href=''><img class='card-img-top' src='news_photos/$news_image' alt='world news'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href='#'>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p><p> <i class='fa fa-clock-o'></i>  $news_date</p>

            </div>
          </div>
        </div>  










  ";



}


}
//state news hasil krne ka code
function state_news(){


global $connection;


if (isset($_GET['state'])) {
  # code...

    $state_id=$_GET['state'];
  


$get_brand_pro="SELECT * FROM news_cat WHERE state_id=$state_id";

$run_brand_pro=mysqli_query($connection,$get_brand_pro);

$state_name="SELECT * FROM state_news_cat WHERE state_news_id='$state_id'";
$run_state=mysqli_query($connection,$state_name);
$rows=mysqli_fetch_assoc($run_state);
$state_ka_title=$rows['state_news_item'];
$count=mysqli_num_rows($run_brand_pro);

if ($count==0) {



  echo"<h4>Sorry!! No item found for <b>$state_ka_title</b>.</h4>
";


  # code...
}
while ($row_brand_pro=mysqli_fetch_assoc($run_brand_pro)) {

$item_id=$row_brand_pro['item_id'];
$news_title=$row_brand_pro['news_title'];
$city_cat=$row_brand_pro['city_id'];
$state_id=$row_brand_pro['state_id'];
$news_desc=$row_brand_pro['news_desc'];
$news_date=$row_brand_pro['news_date'];

$news_image=$row_brand_pro['news_img'];





echo "

<div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4  class='card-title'>
                <a style='font-family:NotoSans-Bold;' href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p>Posted On: <i class='fa fa-clock-o'></i>    







  </p>
     </div>
          </div>
        </div>   
 
        <div></div>


";

}
} 




}
//city k lye data get karhengy
function city_news(){


global $connection;


if (isset($_GET['city_id'])) {
  # code...

    $city_id=$_GET['city_id'];
  


$get_city_pro="SELECT * FROM news_cat WHERE city_id='$city_id'";

$run_city_pro=mysqli_query($connection,$get_city_pro);

$cityy="SELECT * FROM cities WHERE city_id='$city_id' ";
$run_city=mysqli_query($connection,$cityy);
$row_fetch=mysqli_fetch_assoc($run_city);

$city_ka_nam=$row_fetch['city_title'];
$count=mysqli_num_rows($run_city_pro);

if ($count==0) {



  echo"  

           
  <h4>There is nothing to show for <b> $city_ka_nam</b>.</h4>
";


  # code...
}
while ($row_city_pro=mysqli_fetch_assoc($run_city_pro)) {

$item_id=$row_city_pro['item_id'];
$news_title=$row_city_pro['news_title'];
$city_cat=$row_city_pro['city_id'];
$state_id=$row_city_pro['state_id'];
$news_desc=$row_city_pro['news_desc'];
$news_date=$row_city_pro['news_date'];

$news_image=$row_city_pro['news_img'];





echo "

<div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p>Posted On: <i class='fa fa-clock-o'></i> $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>


";

}
} 




}
//getting full post data
function fullpost()
{
global $connection;

if (isset($_GET['item_id'])) {
$item_id=$_GET['item_id'];
$get_products="SELECT * FROM news_cat WHERE item_id='$item_id' ";
$run_products=mysqli_query($connection,$get_products);

$count=mysqli_num_rows($run_products);
if ($count==0) {
echo "There is nothing to display for this category";
}
while ($row_products=mysqli_fetch_assoc($run_products)) {

$pro_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
$views=$row_products['views'];


echo "

<!-- Title -->
          <h1 class='mt-4' style='font-family:NotoSans-Bold;'>$news_title</h1>

          <!-- Author -->
          <p class='lead'>
            by
            <a href='index.php'>The News Bang</a>
          </p>
     <p><i class='fa fa-clock-o'></i>
Posted on

 $news_date  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <a style='font-family:LilitaOne-Regular;color:#00039A;' href='post.php?save=$item_id'>    Bookmark &nbsp;&nbsp; <i class='fa fa-bookmark'></i>    </a>
</p>  
          

          <!-- Date/Time -->

          <!-- Preview Image -->
          <img class='img-fluid rounded' src='news_photos/$news_image'  alt=''>
          
        <br><br>

            
          <!-- Post Content -->
          <p class='lead' style='  text-align: justify;font-family:NotoSans-Bold;line-height: 2.1'> $full_news
          <!-- Comments Form -->
        <br><br>
		<h2 style='color: darkgrey;'>$views Views</2>





";



}




}
}
function getnews(){
global $connection;

if (!isset($_GET['item_id'])) {
if (!isset($_GET['state'])) {
if (!isset($_GET['city_id'])) {

$_COOKIE["category"] = (isset($_COOKIE["category"]))?$_COOKIE["category"]:'';
if(isset($_COOKIE["category"])){
$get_products="(SELECT * FROM news_cat WHERE news_cate='".$_COOKIE["category"]."') union ALL
(SELECT * FROM news_cat WHERE news_cate!='".$_COOKIE["category"]."') LIMIT 0,6";
}	else {
$get_products="SELECT * FROM news_cat ORDER BY rand() LIMIT 0,7";
}

$run_products=mysqli_query($connection,$get_products);




   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}







while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
		



echo "
<div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p><i class='fa fa-clock-o'></i> $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>


";

}
}
}
}
}
//getting 1st news pagination data
function getnews1(){
global $connection;

if (!isset($_GET['item_id'])) {
if (!isset($_GET['state'])) {
if (!isset($_GET['city_id'])) {

  

if(isset($_COOKIE["category"])){
echo $get_products="(SELECT * FROM news_cat WHERE news_cate='".$_COOKIE["category"]."') union ALL
(SELECT * FROM news_cat WHERE news_cate!='".$_COOKIE["category"]."')";
}	else {
echo $get_products="SELECT * FROM news_cat ORDER BY rand() LIMIT 0,2";
}
$run_products=mysqli_query($connection,$get_products);
   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}






while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    



echo "
<div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p><i class='fa fa-clock-o'></i> $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>


";

}
}
}
}
}
//getting data for pagi 1
function getnews2(){
global $connection;

if (!isset($_GET['item_id'])) {
if (!isset($_GET['state'])) {
if (!isset($_GET['city_id'])) {

  


if(isset($_COOKIE["category"])){
echo $get_products="(SELECT * FROM news_cat WHERE news_cate='".$_COOKIE["category"]."') union ALL
(SELECT * FROM news_cat WHERE news_cate!='".$_COOKIE["category"]."')";
}	else {
echo $get_products="SELECT * FROM news_cat ORDER BY rand() LIMIT 0,3";
}

$run_products=mysqli_query($connection,$get_products);


   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}


while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    



echo "
<div class='col-lg-4 portfolio-item'>
          <div class='card h-100'>

            <a href=''><img class='card-img-top' src='news_photos/$news_image'></a>
            <div class='card-body'>
              <h4 class='card-title'>
                <a style='font-family:NotoSans-Bold;' href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p><i class='fa fa-clock-o'></i> $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>


";

}
}
}
}
}
//getting postpage data from DB
function pakistan(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='1'";

$run_products=mysqli_query($connection,$get_products);






   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}





while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo " 





      <div class='row'>
        <div class='col-md-7'>
          <a href=''>
            <img class='img-fluid rounded mb-3 mb-md-0' src='news_photos/$news_image' alt=''>
          </a>
        </div>
        <div class='col-md-5'>
          <h3 style='font-family:NotoSans-Bold;'>$news_title
</h3>
          <p>$news_desc</p>
          <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>
        
          <p>Posted on: $news_date</p>

        </div>

      </div>


        
  ";



}


}
//getting business posts data from data base for above stiky menu
function world_menu(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='2'";

$run_products=mysqli_query($connection,$get_products);






   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}






while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    
echo " 





      <div class='row'>
        <div class='col-md-7'>
          <a href=''>
            <img class='img-fluid rounded mb-3 mb-md-0' src='news_photos/$news_image' alt=''>
          </a>
        </div>
        <div class='col-md-5'>
          <h3>$news_title
</h3>
          <p style='font-family:NotoSans-Bold;'>$news_desc</p>
          <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>
           <p>Posted on: $news_date</p>
        </div>
      </div>


        
  ";



}


}
//getting cpec data from db
function cpec(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='10'";

$run_products=mysqli_query($connection,$get_products);


   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}

while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
 
  
echo " 
    <div class='row'>
        <div class='col-md-7'>
          <a href=''>
            <img class='img-fluid rounded mb-3 mb-md-0' src='news_photos/$news_image' alt=''>
          </a>
        </div>
        <div class='col-md-5'>
          <h3 style='font-family:NotoSans-Bold;'>$news_title
</h3>
          <p>$news_desc</p>
          <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>
          <p>Posted on: $news_date</p>

        </div>
      </div>


        
  ";

  }






}
//getting panama field data from database
function panama(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='8'";

$run_products=mysqli_query($connection,$get_products);


   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}

while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
 
  
echo " 
    <div class='row'>
        <div class='col-md-7'>
          <a href=''>
            <img class='img-fluid rounded mb-3 mb-md-0' src='news_photos/$news_image' alt=''>
          </a>
        </div>
        <div class='col-md-5'>
          <h3 style='font-family:NotoSans-Bold;'>$news_title
</h3>
          <p>$news_desc</p>
          <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

                    <p>Posted on: $news_date</p>

          </div>
      </div>


        
  ";

  }






}
//getting elections data from db
function elections(){

  global $connection;




$get_products="SELECT * FROM news_cat WHERE news_cate='9'";

$run_products=mysqli_query($connection,$get_products);


   $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "There is nothing to display for this category";
}

while ($row_products=mysqli_fetch_assoc($run_products)) {

$item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
 
  
echo " 
    <div class='row'>
        <div class='col-md-7'>
          <a href=''>
            <img class='img-fluid rounded mb-3 mb-md-0' src='news_photos/$news_image' alt=''>
          </a>
        </div>
        <div class='col-md-5'>
          <h3>$news_title
</h3>
          <p style='font-family:NotoSans-Bold;'>$news_desc</p>
          <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>
          <p>Posted on: $news_date</p>

          
        </div>
      </div>


        
  ";

  }






}

function live1(){

  global $connection;


  
echo " 
      

             
           
<h3>GEO News Live</h3>

<br>

<iframe width='702' height='395' src='https://live.geo.tv/' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

<br>  

     <hr>
<br>

<h3>ABB TAKK Live</h3>
<br>



<iframe width='702' height='395' src='https://www.mjunoon.tv/embedplayer/abb-takk-news-live.html' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br>
<h3>ARY News Live</h3>
<br>


<iframe width='702' height='395' src='https://live.arynews.tv/pk/' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br>
<h3>EXPRESS News Live</h3>
<br>



<iframe width='702' height='395' src='https://www.express.pk/live/?jwsource=cl/embed/B8ikI5XPzkk' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br>
<h3>DUNYA News Live</h3>
<br>



<iframe width='702' height='395' src='https://dunyanews.tv/live/?jwsource=cl/embed/2Q7rMpUxFxM' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br><br>
<h3>HUM News Live</h3>
<br>


<iframe width='702' height='395' src='https://www.mjunoon.tv/hum-news-live' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br>
<h3>NEO News Live</h3>
<br>



<iframe width='702' height='395' src='https://www.youtube.com/embed/pfOyFkEdsBw' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br><h3>PUBLIC News Live</h3>
<br>


<iframe width='702' height='395' src='https://youtu.be/V0Yvji9lIUY' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>

     <hr>
<br>

  ";

  }
//
$provided_time ='3112019';
function php_time_ago($provided_time){
  $time_difference = time() - $provided_time ;
  $seconds = $time_difference ;

  $minutes = round($time_difference / 60 );
  $hours = round($time_difference / 3600 );
  $days = round($time_difference / 86400 );
  $weeks = round($time_difference / 604800 );
  $months = round($time_difference / 2419200 );
  $years = round($time_difference / 29030400 );
  if($seconds <= 60){
     echo "$seconds seconds ago";
  }else if($minutes <=60){
     if($minutes==1){
        echo "one minute ago";
     }else{
        echo "$minutes minutes ago";
     }
  }else if($hours <=24){
     if($hours==1){
        echo "one hour ago";
     }else{
        echo "$hours hours ago";
     }
  }else if($days <= 7){
     if($days==1){
        echo "one day ago";
     }else{
        echo "$days days ago";
     }
  }else if($weeks <= 4){
     if($weeks==1){
        echo "one week ago";
     }
     else{
        echo "$weeks weeks ago";
     }
  }else if($months <=12){
      if($months==1){
        echo "one month ago";
      }else{
        echo "$months months ago";
      }
   }else{
      if($years==1){
         echo "one year ago";
      }else{
         echo "$years years ago";
      }
   }}



?>