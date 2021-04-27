<?php

include("../../connection.php");
?>
	<div class="row" id="loading_bar">
	</div>
    <form role="form" id="form1" action="javascript:save_data();" method="post" class="validate form-horizontal form-groups-bordered">
   <div class="card-header">
                                        <h4>City Name</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="form-control" id="city" required="">
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Submit</button>
                                    </div>
    </form>