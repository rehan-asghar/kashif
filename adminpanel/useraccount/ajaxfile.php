<?php
// Count total files

// Upload directory
$upload_location = "../../news_photos/";

// Loop all files
$name=$_FILES['files']['name'];
   if(isset($_FILES['files']['name']) && $_FILES['files']['name'] != ''){
      // File name
      $filename = $_FILES['files']['name'];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("png","jpeg","jpg");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files']['tmp_name'],$path)){
            $path;
         }
      }
   }

echo json_encode($name);
die;