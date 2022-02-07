<?php
$uploadsDir = 'download';
if(isset($_FILES) && isset($_FILES['uploadedFile'])){
//     var_dump($_FILES);
     $fileData = $_FILES['uploadedFile'];
     if ($fileData['error'] ===  UPLOAD_ERR_OK){
         $fileName = $fileData['name'];
         $tmpName = $fileData['tmp_name'];
         $destinationPath = $uploadsDir . $fileName;
         if(move_uploaded_file($tmpName, $destinationPath)){
             echo 'File upload successful';
         }
         else{
             echo  'cant upload file';
             die;
         }
     }
}
    $html = include_once 'index.html';
