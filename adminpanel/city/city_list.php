<?php 
include("../../connection.php");
?>
<table class="table table-striped v_center" id="table-1">
		<thead>
		<tr>
		<th>Sr.No</th>
		<th>Id</th>
		<th>City</th>
		<th>Actions</th>
        </tr>
		</thead>
		<tbody>
		<?php
		$srno=1;
$qry="SELECT * FROM cities";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {
		$id=$row['city_id'];
        echo '
		<tr>
		<td>'.$srno.'</td>
		<td>'.$row['city_id'].'</td>
		<td>'.$row['city_title'].'</td>
		';
		?>
		<td class="center" align="center">
		<div class="btn-group">
		<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
		Action <span class="caret"></span>
		</button>
        <div class="dropdown-menu">
		<a class="dropdown-item" href="javascipt:" onclick="load_details('city/details.php','details','<?php echo $id;?>');">Details</a>
		<a class="dropdown-item" href="javascipt:" onclick="edit_details('city/edit.php','edit','<?php echo $id;?>');">Edit</a>
		<a class="dropdown-item" href="javascipt:" onClick="del('city/del.php','edit','<?php echo $id;?>','city/city_list.php','list_load');">Delete</a>
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
