<?php
include("header.php");
?>
        <!-- Start app main Content -->
<div class="main-content">
<section class="section">
	<div class="section-body">

                    <div class="row">
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card" id="main_part">
<div class="row" id="loading_bar">
</div>
                                <form role="form" id="form1" action="javascript:save_data();" method="post" >
                                    <div class="card-header">
                                        <h4>Category Name</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="category" required="">
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-6">
                            <div class="card">
							<div class="card-header">
                                        <h4>Category List</h4>
                                    </div>
                                    <div class="card-body" id="list_load">
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
var url="category/city_list.php";
var div="list_load";	
load_list(url,div);
});
</script>
<script src="category/city.js" id="script-resource-8"></script>