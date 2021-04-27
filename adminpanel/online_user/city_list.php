<?php 
include("../../connection.php");
?>
<table class="table table-striped v_center" id="table-1">
		<thead>
		<tr>
		<th>Sr.No</th>
		<th>User</th>
		<th>Full Name</th>
		<th>Country</th>
		<th>Status</th>
		<th>Activity</th>
        </tr>
		</thead>
		<tbody>
		<?php
		$srno=1;
$qry="SELECT * from users where user_type='1'";
$res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {
	if($row['user_presence']!='1010101' && $row['user_presence']!='1010102' && $row['user_presence']!='1010103' && $row['user_presence']!='1010104' && $row['user_presence']!='1010105')	{
	$quy="select * from news_cat where item_id='".$row['user_presence']."'";
	$rer=mysqli_query($connection,$quy);
	$get=mysqli_fetch_array($rer);
	}	else {
		if($row['user_presence']=='1010101')
		{
			$get['news_title']='Elections News';
		} else if($row['user_presence']=='1010102')
		{
			$get['news_title']='Pakistan News';
		} else if($row['user_presence']=='1010103')
		{
			$get['news_title']='World News';
		} else if($row['user_presence']=='1010104')
		{
			$get['news_title']='CPEC News';
		} else if($row['user_presence']=='1010105')
		{
			$get['news_title']='Panama News';
		} else if($row['user_presence']=='1010106')
		{
			$get['news_title']='TV channels News';
		}
	}
        echo '
		<tr>
		<td>'.$srno.'</td>
		<td>'.$row['user_name'].'</td>
		<td>'.$row['fullname'].'</td>
		<td>'.$row['country'].'</td>
		<td>'.$row['Status'].'</td>
		';if($row['Status']=='InActive')	{
		echo'
		<td></td>
		'; } else { echo '
		<td>'.$get['news_title'].'</td>
		';} echo '
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
