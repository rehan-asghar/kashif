<?php


if (isset($_GET['del'])) {

  $del=$_GET['del'];
  $del="DELETE FROM cart WHERE p_id='$del'";
  $run_del=mysqli_query($connection,$del);



}



 ?>