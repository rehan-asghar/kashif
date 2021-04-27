<?php

include("../../connection.php");
?>

	<div class="row" id="loading_bar">
	</div>
    <form role="form" id="form1" action="javascript:save_data();" enctype="multipart/form-data" method="post" >
                                    <div class="card-header">
                                        <h4>Add News</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" id="state" required="">
											<option value="">Select</option>
											<?php
											
$qry="SELECT * FROM state_news_cat";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {	?>
<option value="<?= $row['state_news_id']; ?>"><?= $row['state_news_item']; ?></option>	
<?php }	}
											?>
											</select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" id="city" required="">
											<option value="">Select</option>
											<?php
											
$qry="SELECT * FROM cities";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {	?>
<option value="<?= $row['city_id']; ?>"><?= $row['city_title']; ?></option>	
<?php }	}
											?>
											</select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Category</label>
                                            <select class="form-control" id="newscategory" required="">
											<option value="">Select</option>
											<?php
											
$qry="SELECT * FROM news_category";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {	?>
<option value="<?= $row['cate_id']; ?>"><?= $row['cate_title']; ?></option>	
<?php }	}
											?>
											</select>
                                        </div>
                                        </div>
										
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Title</label>
											<textarea id="news_title" class="form-control"></textarea>
										</div>
										</div>
										</div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Description</label>
											<textarea id="news_desc" class="form-control"></textarea>
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full News</label>
											<textarea id="news" class="form-control"></textarea>
										</div>
										</div>
										</div>
                                        <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <input name="files" id="files" class="form-control" type="file">
										</div>
                                        <div class="form-group">
										<button type="button" onclick="uploadImg();" class="btn btn-submit">Upload</button>
										<div id='preview'></div>
										<input type="hidden" required id="img">
										</div>
										</div>
										</div>
										</div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
                                </form>