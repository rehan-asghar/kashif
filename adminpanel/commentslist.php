<?php
include("header.php");
?>
<link rel="stylesheet" href="assets/modules/select2/dist/css/select2.min.css">
<link rel="stylesheet" href="assets/modules/dropzonejs/dropzone.css">
        <!-- Start app main Content -->
<div class="main-content">
<section class="section">
	<div class="section-body">

                      <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
							<div class="card-header">
                                        <h4>Comments List</h4>
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
            <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>Modal body text goes here.</p>
                        </div>
                        <div class="modal-footer bg-whitesmoke br">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
<script>
$(window).on('load', function () {
var url="comments/city_list.php";
var div="list_load";	
load_list(url,div);
});
</script>
<script src="comment/city.js" id="script-resource-8"></script>
<script src="assets/modules/select2/dist/js/select2.full.min.js"></script>
<script src="assets/modules/dropzonejs/min/dropzone.min.js"></script>
<script src="js/page/components-multiple-upload.js"></script>