<?php

include('header.php'); 
?>
   <style type="text/css">
     
 .carousel-caption {
      
text-decoration: bold;
font-size: 20px;


      }




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


 }
.carousel-inner img {
      width: 100%; 
      min-height: 200px;
      border-radius: 7px;
    }
   
 

 }

  

   </style>



<div style="width: 8.5%;float:left;">
<a href="https://keywordtool.io" target="_blank"><img style="width: 72%" src="img/adds.png"></a>
</div>
<div class="container  " style="width:100%;background-color:white;text-align:center;">
<section>
      <br>

<div class="container">

  <div class="row" > 

  
   <div class="col-md-8">
                <?php
				////databse query for slider
                    $slider_query = "SELECT * FROM news_cat WHERE news_cate='8'  LIMIT 5";
                    $slider_run = mysqli_query($connection, $slider_query);
                    if(mysqli_num_rows($slider_run) > 0){
                        $count = mysqli_num_rows($slider_run);
                    ?>
                   <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php
                          for($i = 0; $i < $count; $i++){
                              if($i == 0){
                                  echo "<li data-target='#carousel-example-generic' data-slide-to='".$i."' class='active'></li>";
                              }
                              else{
                                  echo "<li data-target='#carousel-example-generic' data-slide-to='".$i."'></li>";
                              }
                          }
                          ?>
                      </ol>

                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                       <?php 
                        $check = 0;
                          while($row_products= mysqli_fetch_array($slider_run)){
                              $item_id=$row_products['item_id'];
$news_title=$row_products['news_title'];
$state_id=$row_products['state_id'];
$city_id=$row_products['city_id'];
$news_desc=$row_products['news_desc'];
$news_date=$row_products['news_date'];
$news_image=$row_products['news_img'];
$full_news=$row_products['full_news'];
    


                              $check = $check + 1;
                              if($check == 1){
                                  echo "<div class='item active'>";
                              }
                              else{
                                  echo "<div class='item'>";
                              }
                          ?>
                          <a href="post.php?item_id=<?php echo $item_id;?>"><img  class='d-block w-100' class='img-fluid' alt='First slide' src="news_photos/<?php echo $news_image;?>"></a>
                          <div class="carousel-caption">
                              <h3><?php echo $news_title;?></h3>

                                        <p class='cap'><h3><?php echo  $news_desc ?> </h3> 
</p>
                          </div> 
                        </div>
                        <?php }}?>




                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
 
</div>


</div>

 <div class="col-md-4">
                  
         <?php 

///////sidebar 
         include ('sidebar.php') ?>
                                   
                
                    
</div>

<div class="section2  "  style="background-color:white;" >
 
     <div class="container">


<br>
<hr>

      <h1>
        <strong>
   Latest News <?php 

if (isset($_GET['city_id'])) {


    $city_id=$_GET['city_id'];
  
///////////query for latest news
$get_city_pro="SELECT * FROM news_cat WHERE city_id='$city_id'";

$run_city_pro=mysqli_query($connection,$get_city_pro);

$cityy="SELECT * FROM cities WHERE city_id='$city_id' ";
$run_city=mysqli_query($connection,$cityy);
$row_fetch=mysqli_fetch_assoc($run_city);
$city_ka_nam=$row_fetch['city_title'];




   echo " From $city_ka_nam";
   }
   elseif (isset($_GET['state'])) {
    $state_id=$_GET['state'];
  
$get_brand_pro="SELECT * FROM news_cat WHERE state_id=$state_id";

$run_brand_pro=mysqli_query($connection,$get_brand_pro);

$state_name="SELECT * FROM state_news_cat WHERE state_news_id='$state_id'";
$run_state=mysqli_query($connection,$state_name);
$rows=mysqli_fetch_assoc($run_state);
$state_ka_title=$rows['state_news_item'];
 echo "From $state_ka_title";
    } ?> </strong>
      </h1>
 <br>
      <div class='row' id="index">
	  
	  

<?php




if (isset($_GET['page'])) {
  

getnews1();
}
elseif ((isset($_GET['page1']))) {
getnews2();

}

else{


state_news();

getnews();


city_news();





 }

?>


    </div>    
   
     
     
      <!-- /.row -->
<br>
  

<?php
//////pagination 
 echo "
      <!-- Pagination -->
      <ul class='pagination justify-content-left'>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Previous'>
            <span aria-hidden='true'>&laquo;</span>
            <span class='sr-only'>Previous</span>
          </a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php'>1</a>
        </li>
        <li class='page-item'>
     <a class='page-link' onclick='' href='index.php?page'>2</a> 
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php?page1'>3</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
            <span class='sr-only'>Next</span>
          </a>
        </li>
      </ul>
";




?>
    </div>  
<div class="clearfix " style="text-align: ;color: ">
  
  <hr>
  <br>
<h1><strong>
Trending</strong>
</h1>
<br>
 <div class="row">
 



<?php

//////////////trending news start here 


if (isset($_GET['trend1'])) {
  

trending1();
}
elseif ((isset($_GET['trend2']))) {
 trending2();

}

else{


trending();



 }

?>

</div>

<?php
 echo "
      <!-- Pagination -->
      <ul class='pagination justify-content-left'>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Previous'>
            <span aria-hidden='true'>&laquo;</span>
            <span class='sr-only'>Previous</span>
          </a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php'>1</a>
        </li>
        <li class='page-item'>
     <a class='page-link' onclick='' href='index.php?trend1'>2</a> 
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php?trend2'>3</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
            <span class='sr-only'>Next</span>
          </a>
        </li>
      </ul>
";




?>



<hr>


 

  <div class="container-fluid ">
      <div class="row">

        <div class="col-sm-12">
          <div class="page-header">
            <h1> <strong> National </h1>
</strong>
            
          </div>
        </div>
      </div>
      

      <div class="row">
      
  


<?php




if (isset($_GET['national1'])) {
  

national1();
}
elseif ((isset($_GET['national2']))) {
national2();

}

else{


 national();


 }

?>





     
      </div>
<?php 
  echo "   <!-- Pagination -->
      <ul class='pagination justify-content-left'>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Previous'>
            <span aria-hidden='true'>&laquo;</span>
            <span class='sr-only'>Previous</span>
          </a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php'>1</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php?national1'>2</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php?national2'>3</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
            <span class='sr-only'>Next</span>
          </a>
        </li>
      </ul> ";
?>
 
     <div class="container">

 <br>

 <hr>
 <br>

      <h1>
        <strong>
    World News </strong>
      </h1>
 <br>
      <div class="row">
    

<?php

world();
?>



     
   
     
      </div>

<br>
        <!-- Pagination -->
      <ul class='pagination justify-content-left'>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Previous'>
            <span aria-hidden='true'>&laquo;</span>
            <span class='sr-only'>Previous</span>
          </a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='index.php'>1</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='#'>2</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='#'>3</a>
        </li>
        <li class='page-item'>
          <a class='page-link' href='#' aria-label='Next'>
            <span aria-hidden='true'>&raquo;</span>
            <span class='sr-only'>Next</span>
          </a>
        </li>
      </ul>

    </div>   
    <!-- /.container -->

   </div>



<hr>

<br>

    <?php
///////footer
include('f.html'); 
?>







</body>
</html>

</div>
</div>
</div>
</div>
</div>
</div>