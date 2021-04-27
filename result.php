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



<div class="container  " style="background-color:white;text-align:;">
<section>
      <br>





<div class="section2  "  style="background-color:white;" >
 
     <div class="container">


<br>
<hr>

      <h1>
        <strong>
          Search results for
  <?php


if (isset($_GET['search'])) {



$user_keyword=$_GET['user_query'];


   echo "$user_keyword ";


   } ?> </strong>
      </h1>
 <br>
      <div class="row">





<?php

if (isset($_GET['search'])) {



$user_keyword=$_GET['user_query'];




$get_products="SELECT * FROM news_cat WHERE full_news LIKE '%$user_keyword%' ";

$run_products=mysqli_query($connection,$get_products);


 $count=mysqli_num_rows($run_products);
    if ($count==0) {
      

echo "No results found for $user_keyword";
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
                <a href=''>$news_title</a>
              </h4>
              <p class='card-text'> $news_desc    <a class='btn btn-primary' href='post.php?item_id=$item_id'>Read More...</a>

              </p>
                 <p>Posted On: $news_date</p>
     </div>
          </div>
        </div>   
 
        <div></div>


";

}
}




?>


        
   
     
      </div>
      <!-- /.row -->
<br>
      <!-- Pagination -->
      <ul class="pagination justify-content-left">
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Previous">
            <span aria-hidden="true">&laquo;</span>
            <span class="sr-only">Previous</span>
          </a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">1</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">2</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#">3</a>
        </li>
        <li class="page-item">
          <a class="page-link" href="#" aria-label="Next">
            <span aria-hidden="true">&raquo;</span>
            <span class="sr-only">Next</span>
          </a>
        </li>
      </ul>

    </div>  


   </div>



<hr>

<br>

    <?php

include('f.html'); 
?>







</body>
</html>



