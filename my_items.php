<?php
if (isset($_GET['my_items'])) {
//getting customers order details
$c=$_SESSION['email'];

$get_c="SELECT * FROM users WHERE user_email='$c'";
$run_c=mysqli_query($connection,$get_c);
$row_c=mysqli_fetch_assoc($run_c);
$customer_id=$row_c['user_id'];
$customer_name=$row_c['user_name'];


  ?>

  <div class="container">

  	<div class="row">
  		<div class="col-lg-12">


  			<h5  style="    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
color: white;text-align: center;font-family: Merriweather-Regular">Saved Items</h5>
  <table class="table table-bordered" >
  	

  	<thead class="" style="    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
color: white;text-align: center;font-family: Merriweather-Regular">
<tr >

<th>News ID</th>
<th>Title</th>

<th>City</th>
<th>Category</th>
<th>Image</th>
<th>Delete</th>


</tr>
</thead>

<?php
////cart table fetch data
$get_orders="SELECT * FROM cart WHERE cid='$customer_id' ";
$run_orders=mysqli_query($connection,$get_orders);


while($row=mysqli_fetch_assoc($run_orders)){
$id=$row['p_id'];

//newsdata
$news="SELECT * FROM news_cat WHERE item_id='$id'";
$rnews=mysqli_query($connection,$news);



while($row=mysqli_fetch_assoc($rnews)) {
$item_id=$row['item_id'];
$title=$row['news_title'];
$city=$row['city_id'];
$img=$row['news_img'];
$cate=$row['news_cate'];


$city_data="SELECT * FROM cities WHERE city_id='$city'";
$run_city=mysqli_query($connection,$city_data);

while ($row=mysqli_fetch_assoc($run_city)) {
  $city_name=$row['city_title'];

$cat="SELECT * FROM news_category WHERE cate_id='$cate'";
$run_cat=mysqli_query($connection,$cat);

while ($row1=mysqli_fetch_assoc($run_cat)) {
  $cat_name=$row1['cate_title'];

echo "
<tr>
<td>$item_id</td>
<td>

<a href='post.php?item_id=$item_id'>$title</a>
</td>

<td>$city_name</td>

<td> $cat_name</td>
<td><img src='news_photos/$img' width='100' /></td>

                                        <td><a href='user_account.php?del=$item_id'><i class='fa fa-times'></i></a></td>
</tr>
";

}}}
}

  ?>

<?php



 }?>

  </table>
</div>
  </div>
  </div>
