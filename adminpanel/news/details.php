<?php
error_reporting(0);
include("../../connection.php");
$detail="SELECT a3.city_title,a4.state_news_item,cate_title,news_title,news_desc,full_news,a1.news_img FROM news_cat a1 inner join news_category a2 on a1.news_cate=a2.cate_id inner join cities a3 on a1.city_id=a3.city_id
inner join state_news_cat a4 on a1.state_id=a4.state_news_id WHERE a1.item_id='".$_POST['no']."'";
$res=mysqli_query($connection,$detail);
$rec=mysqli_fetch_array($res);
?>
<table class="big-font-table table table-bordered table-stripped" >
<tr>
<tr>
<td>State</td>
<td><?php echo $rec['state_news_item'];?></td>
</tr>
<tr>
<td>City</td>
<td><?php echo $rec['city_title'];?></td>
</tr>
<tr>
<td>News Category</td>
<td><?php echo $rec['cate_title'];?></td>
</tr>
<tr>
<td>News Title</td>
<td><?php echo $rec['news_title'];?></td>
</tr>
<tr>
<td>News Desc</td>
<td><?php echo $rec['news_desc'];?></td>
</tr>
<tr>
<td>News</td>
<td><?php echo $rec['full_news'];?></td>
</tr>
<tr>
<td>Images</td>
<td><img src="../news_photos/<?= $rec['news_img']; ?>" width="200px;" height="200px"></td>
</tr>
</table>