<?php

$uploadsDir = './downloads/';
if(isset($_FILES) && isset($_FILES['uploadedFile'])){
     $fileData = $_FILES['uploadedFile'];
     if ($fileData['error'] ===  UPLOAD_ERR_OK){
         $fileName = $fileData['name'];
         $tmpName = $fileData['tmp_name'];
         $destinationPath = $uploadsDir . $fileName;
         if(move_uploaded_file($tmpName, $destinationPath)){
             $url='./redirect_page/redirect.html';
             header('Location: '.$url);
         }
         else{
             echo  'ERROR:cant upload file';
             die;
         }
     }
}
    $html = include_once 'index.html';
    $redirect_html = include 'redirect_page/redirect.html';



