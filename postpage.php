<?php
session_start();

include('header.php'); 
?>
   <style type="text/css">
     
.caption{


  background-color: #F5F6F7;
  font-size: 17px;

}
.col-sm-3{
 background-color: #F5F6F7;
  font-size: 17px;


}

.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

hr { 
  display: block;
  margin-top: 0.5em;
  margin-bottom: 0.5em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
} 
.popular{


  background-color: ;
 
  border-radius: 20px;
padding-left: 80px;
 }
.carousel-inner img {
      width: 100%; 
      min-height: 200px;
      border-radius: 7px;
    }
   
 .popular img{

width: 70%;
margin-top: 10px;
  border-radius: 8px;

 }
 section .widgets
 {

  margin-bottom: 20px;
 }
@media screen and (max-width:700px) {

    .carousel-inner img {
      width: 100%; 
      min-height: 200px;
    }
   
 .popular img{

width: 100%;
margin-top: 10px;
 }
.popular{


  background-color: ;
 
  border-radius: 20px;

padding-left: 0px;
 }
    }

    @media (max-width: 600px) {
      .carousel-caption {
        display: none;
      } .popular img{

width: 100%;
margin-top: 10px;
 border-radius: 8px;
 }
    }

  

   </style>



<div style="width: 8.5%;float:left;">
<a href="https://www.google.com" target="_blank"><img style="width: 72%" src="img/adds.png"></a>
</div>
<div class="container  " style="width:100%;background-color:white;text-align:center;">

 










<div class="container col-lg-8" style=" background-color:white ;width: 90%;margin-top: 0px;">

      <h1 class="my-4">Latest News about

<?php 
$itemid = "";
if (isset($_GET['elections'])) {

echo "Elections";
$itemid='1010101';
}
elseif ((isset($_GET['pakistan']))) {
  echo "Pakistan";
$itemid='1010102';
}
elseif ((isset($_GET['world']))) {
  echo "world";
$itemid='1010103';
}
elseif ((isset($_GET['cpec']))) {
  echo "CPEC";
$itemid='1010104';
}
elseif ( (isset($_GET['panama']))) {
  echo "Panama";
$itemid='1010105';
}
elseif ((isset($_GET['geo']))) {
echo "TV channels";
$itemid='1010106';
}
///////////related news4
$session_id = (isset($_SESSION['user_id']))? $_SESSION['user_id']: 0;
$q="update users set user_presence='".$itemid."' where user_id='".$session_id."'";
$r=mysqli_query($connection,$q);
///////////

?>


      </h1>
<hr>
<br>

 <?php
if (isset($_GET['pakistan'])) {
  

pakistan();


}
elseif (isset($_GET['world'])) {
  
world_menu();


}
elseif (isset($_GET['cpec'])) {
  cpec();
}
elseif (isset($_GET['panama'])) {
  panama();
}
elseif (isset($_GET['elections'])) {
  elections();
}
elseif (isset($_GET['geo'])) {
  live1();
}
?>


      <!-- /.row -->
<br>
      <hr>
<br>
        

   

    </div>         


<div class="container col-lg-4">
  
<br><br><br>
         <?php
include('sidebar.php'); 
?>


</div>



        </div>


<div class="container">
         <?php
include('f.html'); 
?>
     
     </div>













</body>
</html>



