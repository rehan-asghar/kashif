<?php 
include("../../connection.php");
?>
<table class="table table-striped v_center" id="table-1">
		<thead>
		<tr>
		<th>Sr.No</th>
		<th>News Category</th>
		<th>News Title</th>
		<th>News Desc</th>
		<th>News</th>
		<th>Actions</th>
        </tr>
		</thead>
		<tbody>
		<?php
		$srno=1;
$qry="SELECT a1.item_id,cate_title,news_title,news_desc,full_news FROM news_cat a1 inner join news_category a2 on a1.news_cate=a2.cate_id";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {
		$id=$row['item_id'];
        echo '
		<tr>
		<td>'.$srno.'</td>
		<td>'.$row['cate_title'].'</td>
		<td>'.$row['news_title'].'</td>
		<td>'.$row['news_desc'].'</td>
		<td>'.$row['full_news'].'</td>
		';
		?>
		<td class="center" align="center">
		<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
		</button>
        <div class="dropdown-menu">
		<a class="dropdown-item" href="javascipt:" onclick="load_details('news/details.php','details','<?php echo $id;?>');">Details</a>
		<a class="dropdown-item" href="javascipt:" onclick="edit_details('news/edit.php','edit','<?php echo $id;?>');">Edit</a>
		<a class="dropdown-item" href="javascipt:" onClick="del('news/del.php','edit','<?php echo $id;?>','news/city_list.php','list_load');">Delete</a>
		</div>
		</div>
		</td>			
		<?php 
		echo'
		</tr>';
		$srno++;
} }
		?>
		</tbody>
        </table>
        <script type="text/javascript">
		jQuery(document).ready(function($)
		{
			$("#table-1").dataTable({
			"columnDefs": [
			{ "sortable": false, "targets": [2,3] }
			]
			});
		});
		</script>
