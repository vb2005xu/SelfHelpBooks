<?php
error_reporting(0); 
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = 'fm_pic'; // Relative to the root
$verifyToken = md5('unique_salt' . $_POST['timestamp']);
if (!empty($_FILES) && $_POST['token'] == $verifyToken) {
	$tempFile = $_FILES['Filedata']['tmp_name'];
	$targetPath =  '../../'.$targetFolder;
$a=pathinfo($_FILES['Filedata']['name'], PATHINFO_EXTENSION);
$fileTypes1 = array('png','PNG');
$wenjian1=time().mt_rand(100,9999).".".$a;
$fileParts1 = pathinfo($wenjian1);	 
if(in_array($fileParts1['extension'],$fileTypes1)) {
$wenjian1=time().mt_rand(100,9999).".".$a;
$targetFile = rtrim($targetPath,'/') . '/'.$wenjian1 ;
move_uploaded_file($tempFile,$targetFile);
		//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
 sleep(2);
 echo '<a target="_blank" href="img.php?v=fm_pic/'.$wenjian1.'"><img src="ui/ui_pic/transparent.gif" style="background-image:url(fm_pic/'.$wenjian1.')"/><input id="upload_pic" name="fm_pic" type="hidden" value="'.$wenjian1.'"  /></a>';
 exit;
}
else {
$wenjian=time().mt_rand(100,9999).".".$a;
$targetFile = rtrim($targetPath,'/') . '/'.$wenjian ;


$max_width = "500";							// Max width allowed for the large image


//Image function
//You do not need to alter these functions
function resizeImage($image,$width,$height,$scale) {
	$newImageWidth = ceil($width * $scale);
	$newImageHeight = ceil($height * $scale);
	$newImage = imagecreatetruecolor($newImageWidth,$newImageHeight);
	$source = imagecreatefromjpeg($image);
	imagecopyresampled($newImage,$source,0,0,0,0,$newImageWidth,$newImageHeight,$width,$height);
	imagejpeg($newImage,$image,90);
	chmod($image, 0777);
	return $image;
}


//You do not need to alter these functions
function getHeight($image) {
	$sizes = getimagesize($image);
	$height = $sizes[1];
	return $height;
}
//You do not need to alter these functions
function getWidth($image) {
	$sizes = getimagesize($image);
	$width = $sizes[0];
	return $width;
}


	// Validate the file type
	$fileTypes = array('jpg','JPG','JPEG','GIF','jpeg','gif'); // File extensions
	$fileParts = pathinfo($wenjian);
	
	
	if (in_array($fileParts['extension'],$fileTypes)) {
		move_uploaded_file($tempFile,$targetFile);
		//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
		
			$large_image_location = rtrim($targetPath,'/') . '/' . $wenjian;
			$width = getWidth($large_image_location);
			$height = getHeight($large_image_location);
			//Scale the image if it is greater than the width set above
			if ($width > $max_width){
				$scale = $max_width/$width;
				$uploaded = resizeImage($large_image_location,$width,$height,$scale);
			}else{
				$scale = 1;
				$uploaded = resizeImage($large_image_location,$width,$height,$scale);
			}
			//cccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccccc
        sleep(2);
		echo '<a target="_blank" href="img.php?v=fm_pic/'.$wenjian.'"><img src="ui/ui_pic/transparent.gif" style="background-image:url(fm_pic/'.$wenjian.')"/><input id="upload_pic" name="fm_pic" type="hidden" value="'.$wenjian.'"  /></a>';
	} else {
		echo '格式不对';
	}
}
}
?>