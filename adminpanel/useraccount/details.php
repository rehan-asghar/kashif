<?php
error_reporting(0);
include("../../connection.php");
$detail="SELECT * from users WHERE user_id='".$_POST['no']."'";
$res=mysqli_query($connection,$detail);
$rec=mysqli_fetch_array($res);
?>
<table class="big-font-table table table-bordered table-stripped" >
<tr>
<tr>
<td>Full Name</td>
<td><?php echo $rec['fullname'];?></td>
</tr>
<tr>
<td>Email</td>
<td><?php echo $rec['user_email'];?></td>
</tr>
<tr>
<td>User Name</td>
<td><?php echo $rec['user_name'];?></td>
</tr>
<tr>
<td>User Type</td>
<td><?php echo $rec['user_type'];?></td>
</tr>
<tr>
<td>Password</td>
<td><?php echo $rec['pass'];?></td>
</tr>
<tr>
<td>Mobile</td>
<td><?php echo $rec['mob'];?></td>
</tr>
</table>