<?php

$imageType=["jpg", "png", "gif", "jpeg"];
$dir = "downloads";
$fileParts = [];
$ext='';
$i = 0;
//if($handle = opendir($dir)){
//    while(false !== ($file = readdir($handle))) {
//        if($file != '.' && $file != '..'){
//            echo $file."<br>";
//        }
//    }
//}

$dirHandle = opendir($dir) ;
while ($file = readdir($dirHandle))
{
    if($file=='.' || $file == '..') continue;
    $fileParts = explode('.',$file);
    $ext = strtolower(array_pop($fileParts));

    if(in_array($ext,$imageType))
    {
        echo '<div class = "img-container" >
                <img src="'.$dir.'/'.$file.'"  alt="#" title="'.$file.'" class="png"  style="margin-top: 10px"/>
            </div>';
        $i++;
    }

}
closedir($dirHandle);