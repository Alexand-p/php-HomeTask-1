<?php
$uploadsDir = './downloads/';
if(isset($_FILES) && isset($_FILES['uploadedFile'])){
     $fileData = $_FILES['uploadedFile'];
     if ($fileData['error'] ===  UPLOAD_ERR_OK){
         $fileName = $fileData['name'];
         $tmpName = $fileData['tmp_name'];
         $destinationPath = $uploadsDir . $fileName;
         if(move_uploaded_file($tmpName, $destinationPath)){
             header('Refresh: 2; url=http://learn/titel.php');
             echo "Привет!Через 2 секунд вас переместит  на страницу с фотографиями ))";

         }
         else{
             echo  'ERROR:cant upload file';
             die;
         }
     }
}
    $html = include_once 'index.html';



