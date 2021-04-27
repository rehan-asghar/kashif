<?php

include("../../connection.php");
?>
<div class="row" id="loading_bar">
	</div>
    <form role="form" id="form1" action="javascript:save_data();" enctype="multipart/form-data" method="post" >
                                    <div class="card-header">
                                        <h4>User Account</h4>
                                    </div>
                                    <div class="card-body">
                                        
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full Name</label>
											<input type="text" id="name" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email</label>
											<input type="email" id="email" class="form-control">
										</div>
										</div>
										</div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Name</label>
											<input type="text" id="username" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Type</label>
											<select id="usertype" class="form-control">
											<option value="">Select</option>
											<option value="1">User</option>
											<option value="0">Admin</option>
											</select>
										</div>
										</div>
										</div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Password</label>
											<input type="text" id="pass" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Mobile</label>
											<input type="text" id="mobile" class="form-control">
										</div>
										</div>
										</div>
										</div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>