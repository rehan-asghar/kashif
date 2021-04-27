<?php
// Count total files

// Upload directory
$upload_location = "../../news_photos/";

// Loop all files
$name=$_FILES['files_e']['name'];
   if(isset($_FILES['files_e']['name']) && $_FILES['files_e']['name'] != ''){
      // File name
      $filename = $_FILES['files_e']['name'];

      // Get extension
      $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

      // Valid image extension
      $valid_ext = array("png","jpeg","jpg");

      // Check extension
      if(in_array($ext, $valid_ext)){

         // File path
         $path = $upload_location.$filename;

         // Upload file
         if(move_uploaded_file($_FILES['files_e']['tmp_name'],$path)){
            $path;
         }
      }
   }

echo json_encode($name);
die;