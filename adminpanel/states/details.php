<?php
error_reporting(0);
include("../../connection.php");
$detail="SELECT * FROM state_news_cat WHERE state_news_id='".$_POST['no']."'";
$res=mysqli_query($connection,$detail);
$rec=mysqli_fetch_array($res);
?>
<table class="big-font-table table table-bordered table-stripped" >
<tr>
<tr>
<td>States</td>
<td><?php echo $rec['state_news_item'];?></td>
</tr>
</table>