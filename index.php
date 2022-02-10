<?php
$uploadsDir = './downloads/';
if(isset($_FILES) && isset($_FILES['uploadedFile'])){
     $fileData = $_FILES['uploadedFile'];
    if($_FILES['uploadFile']['size'] < 4*1024*1024) {
        if ($fileData['error'] ===  UPLOAD_ERR_OK){
            $fileName = $fileData['name'];
            $tmpName = $fileData['tmp_name'];
            $destinationPath = $uploadsDir . $fileName;
            if(move_uploaded_file($tmpName, $destinationPath)){
                header('Refresh: 2; url=http://learn/titel.php');
                echo "Через 2 секунд вас переместит  на страницу с фотографиями ))";
            }
            else{
                echo  'ERROR:cant upload file';
                die;
            }
        }
    }
    else{
       echo 'ERROR:Слишком большой файл';
    }
}

    $html = include_once 'index.html';







