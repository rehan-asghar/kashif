<?php
session_start();
///connection
$hostname="localhost";
$username="root";
$password="";
$db_name="newsbang";
// Create connection
$connection = new mysqli($hostname, $username, $password,$db_name);
/////////views
$q="SELECT * FROM news_cat where item_id='".$_GET['item_id']."'";
$r=mysqli_query($connection,$q);
$row=mysqli_fetch_array($r);
$category=$row['news_cate'];
$views=$row['views']+1;
////////related news
setcookie("category", "$category", time()+30*24*60*60,'/');
$_COOKIE["category"]=$category;
$q="update users set user_presence='".$_GET['item_id']."' where user_id='".$_SESSION['user_id']."'";
$r=mysqli_query($connection,$q);
///////view incremeNt
$q="update news_cat set views='$views' where item_id='".$_GET['item_id']."'";
$r=mysqli_query($connection,$q);
?>



<!DOCTYPE html>


<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
<title>Welcome to The News Bang</title>


   

      
 
      

  </head>
<?php
error_reporting(0);
include('header.php'); 

?>
  <body  style="background-color: white">

<style type="text/css">
  

.comment{
        background: white;
        padding: 20px;
        margin-bottom: 15px;
        font-family: 'Oswald', sans-serif;

    }

    .comment h3{
        color:#24A7CF;    font-family: 'Oswald', sans-serif;

    }

    .comment img{
        width: 30%;
    }

    .comment h4{
        color:#24A7CF;    font-family: 'Oswald', sans-serif;

    }

    .comment p{
        font-weight: 100;    font-family: 'Oswald', sans-serif;

    }

    .comment .single-comment{    font-family: 'Oswald', sans-serif;

        margin-bottom: 10px;
      
    }



</style>

<div style="width: 8.5%;float:left;">
<a href="https://keywordtool.io" target="_blank"> <img style="width: 72%" src="img/adds.png"></a>
</div>


    <!-- Page Content -->
    <div class="container" style="width:90%; background-color: white;float:left;margin-left:-2%">

      <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8" style="  text-align: justify;   ">




<?php 

fullpost();


cart()



 ?>


 



     <div class="comment">
                       <h3>Comments</h3><hr>
                      

<?php 


//////////comments query
$q="SELECT * FROM comments where item_id='".$_GET['item_id']."'";
$r=mysqli_query($connection,$q);
while ($row=mysqli_fetch_assoc($r)) {
   $c_id=$row['id'];
$c_date=$row['Date'];
$c_name=$row['name'];
$c_email=$row['email'];
$c_comment=$row['comment'];

$pic="SELECT * FROM users WHERE user_email='".$_SESSION['email']."'";
$rpic=mysqli_query($connection,$pic);
$roww=mysqli_fetch_assoc($rpic);

$img=$roww['user_image'];
if (isset($_SESSION['email'])) {


echo "

                <div class='row single-comment'>
                        <div class='col-sm-2'>
                      <img src='user_photos/$img' alt='Profile Picture' class='img-circle'>
                       </div>
                        <div class='col-sm-10'>
                           <h4>$c_name</h4>
                           <p>$c_comment</p>
                                         
       <p style='color:grey;font-weight:5px'><i class='fa fa-clock-o'></i> $c_date</p>
                            </div>
                        </div>
<hr>

";
}
else
{

  echo "<div class='row single-comment'>
                        <div class='col-sm-2'>
                      <img src='img/unknown-picture.png' alt='Profile Picture' class='img-circle'>
                       </div>
                        <div class='col-sm-10'>
                           <h4>$c_name</h4>
                           <p>$c_comment</p>
                                         
       <p style='color:grey;font-weight:5px'><i class='fa fa-clock-o'></i> $c_date</p>
                            </div>
                        </div>";
}



}

?>


                        
                     
                    </div>






          
          <div class="card my-4">
            <h5 class="card-header"> <strong>Leave a Comment:</h5> </strong>
            <div class="card-body">
             <form action="comment.php"  method="post" enctype="multipart/form-data" >
			<input type="hidden" name="itemid" value=<?= $_GET['item_id'] ?> > 
              <div class="form-group">
  <label for="name"><b>Name</b></label>
    <input class="form-control" type="text" placeholder="Enter Name" name="1" autocomplete="off" required>
    </div>
       <div class="form-group">
    <label for="email"><b>Email</b></label>
    <input  class="form-control" type="text" pattern="[a-zA-Z0-9.-_]{1,}@[a-zA-Z.-]{2,}[.]{1}[a-zA-Z]{2,}" autocomplete="off" placeholder="Enter Email" name="2" required>
    </div>
           <div class="form-group">

 <label  for="comment"><b>Comment</b></label>
      <textarea  class="form-control" style="resize: none;" class="form-control" rows="5" name="3" autocomplete="off"  required></textarea>

</div>
    <div class="clearfix">
      <button type="submit" name="submit" class="btn btn-primary">Comment</button>
    </div>

            </div>
          </div>

   

          <hr>

        </div>
        <div class="col-lg-4">
      <?php 


         include ('sidebar.php') ?>
                                  
        </div>


        </div>  <?php
$page_title='Home Page';
include('f.html'); 
?>
      </div>
      <!-- /.row -->
    
   
    <!-- /.container -->

    <!-- Footer -->
 

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
<hr>
