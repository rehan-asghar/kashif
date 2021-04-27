<?php
include("../../connection.php");
$edit="SELECT * FROM news_cat WHERE item_id='".$_POST['no']."'";
$res=mysqli_query($connection,$edit);
$rec=mysqli_fetch_array($res);
?>
<div class="row" id="loading_bar">
</div>
<form role="form" method="post" action="javascript:update_data();" enctype="multipart/form-data" class="validatea form-horizontal form-groups-bordered">
<div class="card-header">
<input type="hidden" id="item_id_e" value="<?= $rec['item_id'] ?>">
                                        <h4>Add News</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>State</label>
                                            <select class="form-control" id="state_e" required="">
											<option value="">Select</option>
											<?php
											
$qry="SELECT * FROM state_news_cat";
$res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {	
if($rec['state_id']==$row['state_news_id'])	{
?>
<option value="<?= $row['state_news_id']; ?>" selected ><?= $row['state_news_item']; ?></option>	
<?php
}	else {
?>
<option value="<?= $row['state_news_id']; ?>"><?= $row['state_news_item']; ?></option>	
<?php }	}	}
											?>
											</select>
                                        </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>City</label>
                                            <select class="form-control" id="city_e" required="">
											<option value="">Select</option>
											<?php
											
$qry="SELECT * FROM cities";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {	
if($rec['city_id']==$row['city_id'])	{
?>
<option value="<?= $row['city_id']; ?>" selected ><?= $row['city_title']; ?></option>	
<?php
}	else {
?>
<option value="<?= $row['city_id']; ?>"><?= $row['city_title']; ?></option>	
<?php }	}	}
											?>
											</select>
                                        </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Category</label>
                                            <select class="form-control" id="newscategory_e" required="">
											<option value="">Select</option>
											<?php
											
$qry="SELECT * FROM news_category";
  $res=mysqli_query($connection,$qry);
if (mysqli_num_rows($res)> 0) {

while ($row=mysqli_fetch_array($res)) {	
if($rec['news_cate']==$row['cate_id'])	{
?>
<option value="<?= $row['cate_id']; ?>" selected ><?= $row['cate_title']; ?></option>	
<?php
} else {
?>
<option value="<?= $row['cate_id']; ?>"><?= $row['cate_title']; ?></option>	
<?php }	} }
											?>
											</select>
                                        </div>
                                        </div>
										
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Title</label>
											<textarea id="news_title_e" class="form-control"><?= $rec['news_title'] ?></textarea>
										</div>
										</div>
										</div>
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>News Description</label>
											<textarea id="news_desc_e" class="form-control"><?= $rec['news_desc'] ?></textarea>
										</div>
										</div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Full News</label>
											<textarea id="news_e" class="form-control"><?= $rec['full_news'] ?></textarea>
										</div>
										</div>
										</div>
                                        <div class="row">
                                        <div class="col-md-12">
                                        <div class="form-group">
                                        <input name="files_e" id="files_e" value="<?= $rec['news_img']; ?>" class="form-control" type="file">
										</div>
                                        <div class="form-group">
										<button type="button" onclick="uploadImg2();" class="btn btn-submit">Upload</button>
										<div id='preview_e'><img src="../news_photos/<?= $rec['news_img']; ?>" width="200px;" height="200px"/></div>
										<input type="hidden" value="<?= $rec['news_img']; ?>" required id="img_e">
										</div>
										</div>
										</div>
										</div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>   
</form>
<script>

$("form.validatea").each(function(i, el) {
var $this = $(el),
opts = {
rules: {},
messages: {},
errorElement: 'span',
errorClass: 'validate-has-error',
highlight: function(element) {
$(element).closest('.form-group').addClass('validate-has-error');
},
unhighlight: function(element) {
$(element).closest('.form-group').removeClass('validate-has-error');
},
errorPlacement: function(error, element) {
if (element.closest('.has-switch').length) {
error.insertAfter(element.closest('.has-switch'));
} else
if (element.parent('.checkbox, .radio').length || element.parent('.input-group').length) {
error.insertAfter(element.parent());
} else {
error.insertAfter(element);
}
}
},
$fields = $this.find('[data-validate]');
$fields.each(function(j, el2) {
var $field = $(el2),
name = $field.attr('name'),
validate = attrDefault($field, 'validate', '').toString(),
_validate = validate.split(',');
for (var k in _validate) {
var rule = _validate[k],
params, message;
if (typeof opts['rules'][name] == 'undefined') {
opts['rules'][name] = {};
opts['messages'][name] = {};
}
if ($.inArray(rule, ['required', 'url', 'email', 'number', 'date', 'creditcard']) != -1) {
opts['rules'][name][rule] = true;
message = $field.data('message-' + rule);
if (message) {
opts['messages'][name][rule] = message;
}
} else
if (params = rule.match(/(\w+)\[(.*?)\]/i)) {
if ($.inArray(params[1], ['min', 'max', 'minlength', 'maxlength', 'equalTo']) != -1) {
opts['rules'][name][params[1]] = params[2];
message = $field.data('message-' + params[1]);
if (message) {
opts['messages'][name][params[1]] = message;
}
}
}
}
});
$this.validate(opts);
});

</script>