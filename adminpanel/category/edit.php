<?php
include("../../connection.php");
$edit="SELECT * FROM news_category WHERE cate_id='".$_POST['no']."'";
$res=mysqli_query($connection,$edit);
$rec=mysqli_fetch_array($res);
?>
<div class="row" id="loading_bar">
</div>
<form role="form" method="post" action="javascript:update_data();" class="validatea form-horizontal form-groups-bordered">
<div class="card-header">
<input type="hidden" id="id_e" value="<?= $rec['cate_id'] ?>">
                                        <h4>Edit Category</h4>
                                    </div>
                                    <div class="card-body">
											<div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="category_e" value="<?= $rec['cate_title'] ?>" required="">
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>									
</form>