<?php
//require_once 'redirect.html';

$directory = "downloads";
//if($handle = opendir($directory)){
//    while(false !== ($file = readdir($handle))) {
//        if($file != "." && $file != ".."){
//            echo $file."<br>";
//        }
//    }
//}

$allowed_types=array("jpg", "png", "gif", "jpeg");
$file_parts = array();
$ext="";
$title="";
$i=0;
$dir_handle = @opendir($directory) or die("Ошибка при открытии папки !!!");
while ($file = readdir($dir_handle))
{
    if($file=="." || $file == "..") continue;
    $file_parts = explode(".",$file);
    $ext = strtolower(array_pop($file_parts));

    if(in_array($ext,$allowed_types))
    {
        echo '<div class = "img-container" >
                <img src="'.$directory.'/'.$file.'" class="png" title="'.$file.'"  alt="#" style="margin-top: 10px"/>
            </div>';
        $i++;
    }

}
closedir($dir_handle);  //закрыть папку