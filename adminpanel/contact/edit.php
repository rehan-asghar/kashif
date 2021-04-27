<?php
include("../../connection.php");
$edit="SELECT * FROM comments WHERE id='".$_POST['no']."'";
$res=mysqli_query($connection,$edit);
$rec=mysqli_fetch_array($res);
?>
<div class="row" id="loading_bar">
</div>
<form role="form" method="post" action="javascript:update_data();" enctype="multipart/form-data" class="validatea form-horizontal form-groups-bordered">
<div class="card-header">
<input type="hidden" id="id_e" value="<?= $rec['id'] ?>">
                                        <h4>Edit Comment</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Comment</label>
											<textarea id="comment_e" class="form-control"><?= $rec['comment'] ?></textarea>
										</div>
										</div>
                                        </div>
                                        </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>   
</form>