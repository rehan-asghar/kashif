<?php 
include("../../connection.php");
?>
<table class="table table-striped v_center" id="table-1">
		<thead>
		<tr>
		<th>Sr.No</th>
		<th>Id</th>
		<th>Category</th>
		<th>Actions</th>
        </tr>
		</thead>
		<tbody>
		<?php
		$srno=1;
$qry="SELECT * FROM news_category";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {
		$id=$row['cate_id'];
        echo '
		<tr>
		<td>'.$srno.'</td>
		<td>'.$row['cate_id'].'</td>
		<td>'.$row['cate_title'].'</td>
		';
		?>
		<td class="center" align="center">
		<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
		</button>
        <div class="dropdown-menu">
		<a class="dropdown-item" href="javascipt:" onclick="load_details('category/details.php','details','<?php echo $id;?>');">Details</a>
		<a class="dropdown-item" href="javascipt:" onclick="edit_details('category/edit.php','edit','<?php echo $id;?>');">Edit</a>
		<a class="dropdown-item" href="javascipt:" onClick="del('category/del.php','edit','<?php echo $id;?>','category/city_list.php','list_load');">Delete</a>
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
