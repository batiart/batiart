<?php
$thumb = 'zdjecia/thumbnail';
$watermark = 'zdjecia/watermark';
if (is_dir($thumb) && is_dir($watermark)) {
    $opendirectory = opendir($thumb);
    $openDirW = opendir($watermark);
    while (($image = readdir($opendirectory)) !== false && ($imageW = readdir($openDirW)) !== false){
        if (($image == '.')  ($image == '..')) {
            continue;
        }
        //echo $image;
       // echo $imageW;
        $imgFileType = pathinfo($image, PATHINFO_EXTENSION);
        $imgFileTypeW = pathinfo($imageW, PATHINFO_EXTENSION);
        if (($imgFileType == 'jpg')  ($imgFileType == 'png')) {
           echo "<a href='zdjecia/watermark/$imageW' target='_blank'><img src='zdjecia/thumbnail/$image' alt=''></a></br>";
        }
    }

    closedir($opendirectory);
}