

<?php

include('header.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title> My Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
   <script src="https://cloud.tinymce.com/5/tinymce.min.js"></script>
  <script>tinymce.init({ selector:'textarea' });</script>
</head>
<body>
	
<form action="insert_news.php" method="POST" enctype="multipart/form-data">

	<table align="center" >
		
<tr>
	
<td><h2>Insert News</h2></td>

</tr>
<tr>
<td>
	<b>
		News Title

	</b>


</td>	
<td>
	
<input type="text" name="news_title" size="50" />

</td>


</tr>
<tr>
	

	<td>
	<b>
		News Category

	</b>


</td>

<td>
<select name="news_cat">
	
<option>Select a category</option>

<?php

$get_cats="SELECT * FROM news_category";
  $run_cats=mysqli_query($connection,$get_cats);
  while ($row_cats=mysqli_fetch_assoc($run_cats)) {
    $cate_id=$row_cats['cate_id'];
    $cate_title=$row_cats['cate_title'];

 

    echo   "<option value='$cate_id'>$cate_title</option>";
     
           }

?>



</select>

</td>


</tr>




<tr>
	

	<td>
	<b>
		News State

	</b>


</td>

<td>
<select name="news_state">
	
<option>Select a category</option>

<?php

$get_cats="SELECT * FROM state_news_cat";
  $run_cats=mysqli_query($connection,$get_cats);
  while ($row_cats=mysqli_fetch_assoc($run_cats)) {
    $cat_id=$row_cats['state_news_id'];
    $cat_title=$row_cats['state_news_item'];

 

    echo   "<option value='$cat_id'>$cat_title</option>";
     
           }

?>



</select>

</td>


</tr><tr>
	
	<td>
	<b>
	News City

	</b>


</td>

<td>
<select name="news_city">

	<option>Select City</option>
	
 <?php

$get_brand="SELECT * FROM cities";
  $run_brand=mysqli_query($connection,$get_brand);
  while ($row_brand=mysqli_fetch_assoc($run_brand)) {
    $city_id=$row_brand['city_id'];
    $city_title=$row_brand['city_title'];

 

    echo   "<option value='$city_id'>$city_title</option>";
           }

?>


</select>

</td>


</tr><tr>
	

	<td>
	<b>
		News Image

	</b>


</td>
<td>
<input type="file" name="img"/>

</td>


</tr>

















<tr>
		




<tr>
	
		<td>
	<b>
		News Description 
	</b>
</td>
<td>
	
<textarea name="news_desc" cols="35" rows="10"></textarea>

</td>


</tr>


<tr>
	
		<td>
	<b>
		Full Description 
	</b>
</td>
<td>
	
<textarea name="full_news" cols="35" rows="10"></textarea>

</td>


</tr>





<tr>
	
<td>
	
<button name="news" class="btn primary">Insert News</button></td>


</tr>

	</table>
	


</form>

</body>
</html>





<?php
if (isset($_POST['news'])) {
//text data variables hn
	$news_title=$_POST['news_title'];
	$news_state=$_POST['news_state'];
	$news_city=$_POST['news_city'];
	$news_cate=$_POST['news_cat'];
	$news_desc =$_POST['news_desc'];
	$full_news=$_POST['full_news'];
	
	//image data variables hain jahan photo insert krayngy
	$news_img=$_FILES['img']['name'];
	//images k temporary names Q k file server ko chahye hute hain auto assing b hujta hai
	$temp_name=$_FILES['img']['tmp_name'];
	if ($news_title=='' OR $news_state=='' OR $news_desc=='' OR  $news_city=='' OR $full_news=='' OR $news_img=='') {
		echo "Please fill all the fields";
		exit();
	}
	else
	{
	//uploading images to its folder
		move_uploaded_file( $temp_name,"news_photos/$news_img");

	$insert_news="INSERT INTO news_cat ( `state_id`, `city_id`, `news_cate`, `news_title`, `news_img`, `news_desc`, `full_news`, `news_date`, `status`) VALUES ('$news_state','$news_city','$news_cate','$news_title','$news_img','$news_desc','$full_news',NOW())";



	$run_news=mysqli_query($connection,$insert_news);



	if ($run_news) {


	echo "
<script>alert('Data inserted successfully...!!!!')</script>";	
}
else
{

	echo "
<script>alert('Nahi huwa...!!!!')</script>";	
}
}}


?>
<?php 

incldue('footer.php')

?>