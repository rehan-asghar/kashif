<?php
include("header.php");
?>
<link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
        <!-- Start app main Content -->
<div class="main-content">
<section class="section">
	<div class="section-body">

                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card" id="main_part">
<div class="row" id="loading_bar">
</div>
                                <form role="form" id="form1" action="javascript:save_data();" enctype="multipart/form-data" method="post" >
                                    <div class="card-header">
                                        <h4>Add User Accounts</h4>
                                    </div>
                                    <div class="card-body">
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>full name</label>
											<input type="text" id="name" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>email</label>
											<input type="email" id="email" class="form-control">
										</div>
										</div>
										</div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>user name</label>
											<input type="text" id="username" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>user type</label>
											<select id="usertype" class="form-control">
											<option value="">select</option>
											<option value="1">user</option>
											<option value="0">admin</option>
											</select>
										</div>
										</div>
										</div>
                                       <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>password</label>
											<input type="text" id="pass" class="form-control">
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>mobile</label>
											<input type="text" id="mobile" class="form-control">
										</div>
										</div>
										</div>
                                        </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        </div>
                        <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
							<div class="card-header">
                                        <h4>User List</h4>
                                    </div>
                                    <div class="card-body" id="list_load">
                                    </div>
                            </div>
                        </div>
                        </div>
                    </div>
    </div>
           
</section>
</div>
<div class="modal fade" id="details_modal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Details</h4>
</div>

<div class="modal-body" id="details">

</div>

<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<div class="modal fade" id="edit_modal">
<div class="modal-dialog">
<div class="modal-content">

<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<h4 class="modal-title">Edit</h4>
</div>

<div class="modal-body" id="edit">

</select>
</div>
</div>
</div>
</div>
<script>
$(window).on('load', function () {
var url="useraccount/city_list.php";
var div="list_load";	
load_list(url,div);
});
</script>
<script src="useraccount/city.js" id="script-resource-8"></script>
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
