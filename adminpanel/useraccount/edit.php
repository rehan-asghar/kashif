<?php
include("../../connection.php");
$edit="SELECT * FROM users WHERE user_id='".$_POST['no']."'";
$res=mysqli_query($connection,$edit);
$rec=mysqli_fetch_array($res);
?>
<div class="row" id="loading_bar">
</div>
<form role="form" method="post" action="javascript:update_data();" enctype="multipart/form-data" class="validatea form-horizontal form-groups-bordered">
<div class="card-header">
<input type="hidden" id="user_id_e" value="<?= $rec['user_id'] ?>">
                                        <h4>Edit Accounts</h4>
                                    </div>
                                    <div class="card-body">
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
											<input type="text" id="name_e" value="<?= $rec['fullname'] ?>" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
											<input type="email" id="email_e" value="<?= $rec['user_email'] ?>" class="form-control">
										</div>
										</div>
										</div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Name</label>
											<input type="text" id="username_e" value="<?= $rec['user_name'] ?>" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Type</label>
											<select id="usertype_e" class="form-control">
											<option value="">Select</option>
											<option <?php if ($rec['user_type']==1) { ?>	selected <?php } ?> value="1">User</option>
											<option <?php if ($rec['user_type']==0) { ?>	selected <?php } ?> value="0">Admin</option>
											</select>
										</div>
										</div>
										</div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
											<input type="text" id="pass_e" value="<?= $rec['pass'] ?>" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile</label>
											<input type="text" id="mobile_e" value="<?= $rec['mob'] ?>" class="form-control">
										</div>
										</div>
										</div>
										</div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>   
</form>