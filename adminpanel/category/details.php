<?php
error_reporting(0);
include("../../connection.php");
$detail="SELECT * FROM news_category WHERE cate_id='".$_POST['no']."'";
$res=mysqli_query($connection,$detail);
$rec=mysqli_fetch_array($res);
?>
<table class="big-font-table table table-bordered table-stripped" >
<tr>
<tr>
<td>Category</td>
<td><?php echo $rec['cate_title'];?></td>
</tr>
</table>