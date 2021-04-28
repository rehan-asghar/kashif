<?php 
include("../../connection.php");
?>
<table class="table table-striped v_center" id="table-1">
		<thead>
		<tr>
		<th>Sr.No</th>
		<th>User</th>
		<th>News Title</th>
		<th>Comment</th>
		<th>Actions</th>
        </tr>
		</thead>
		<tbody>
		<?php
		$srno=1;
$qry="SELECT a1.id,a3.user_name,a2.news_title,a1.comment FROM comments a1 inner join news_cat a2 on a1.item_id=a2.item_id inner join users a3 on a1.user_id=a3.user_id";

  $res=mysqli_query($connection,$qry);

if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {

		$id=$row['id'];
        echo '
		<tr>
		<td>'.$srno.'</td>
		<td>'.$row['user_name'].'</td>
		<td>'.$row['news_title'].'</td>
		<td>'.$row['comment'].'</td>
		';
		?>
		<td class="center" align="center">
		<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
		</button>
        <div class="dropdown-menu">
		<a class="dropdown-item" href="javascipt:" onclick="edit_details('comments/edit.php','edit','<?php echo $id;?>');">Edit</a>
		<a class="dropdown-item" href="javascipt:" onClick="del('comments/del.php','edit','<?php echo $id;?>','comments/city_list.php','list_load');">Delete</a>
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
