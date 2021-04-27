<?php 
include("../../connection.php");
?>
<table class="table table-striped v_center" id="table-1">
		<thead>
		<tr>
		<th>Sr.No</th>
		<th>Full Name</th>
		<th>Username</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Actions</th>
        </tr>
		</thead>
		<tbody>
		<?php
		$srno=1;
$qry="SELECT * FROM users";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {
		$id=$row['user_id'];
        echo '
		<tr>
		<td>'.$srno.'</td>
		<td>'.$row['fullname'].'</td>
		<td>'.$row['user_name'].'</td>
		<td>'.$row['mob'].'</td>
		<td>'.$row['user_email'].'</td>
		';
		?>
		<td class="center" align="center">
		<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
		</button>
        <div class="dropdown-menu">
		<a class="dropdown-item" href="javascipt:" onclick="load_details('useraccount/details.php','details','<?php echo $id;?>');">Details</a>
		<a class="dropdown-item" href="javascipt:" onclick="edit_details('useraccount/edit.php','edit','<?php echo $id;?>');">Edit</a>
		<a class="dropdown-item" href="javascipt:" onClick="del('useraccount/del.php','edit','<?php echo $id;?>','useraccount/city_list.php','list_load');">Delete</a>
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
