<?php 
require_once('../muban/cookie.php'); 
if (!$session_id) {
	echo '<script language="javascript"> window.location.href="../login.php";</script>';
	exit;
}
else {
	require_once('conn.php');
	require_once('mobile_device_detect.php');
	if(!$_FILES["file"]["type"]){$mobile = mobile_device_detect();
		  if($mobile==true){
				die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">您没有输入呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../mo/xie.php"'.$dyh.',2000);</script></div></body>');
		  }else{
				 die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">您没有输入呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../xie.php"'.$dyh.',2000);</script></div></body>');
		  }
	} 
		  if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/png") || ($_FILES["file"]["type"] == "image/pjpeg")) && ($_FILES["file"]["size"] < 10000000)) {
				  if ($_FILES["file"]["error"] > 0){
					echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
				  }
				  else{
					if (file_exists("../pic/" . $_FILES["file"]["name"])) {
					  echo $_FILES["file"]["name"] . " already exists. ";
					}
					else
					{
							$a1=pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
							$large_image_name = time().mt_rand(100,9999).".".$a1; 
							$fileTypes1 = array('png','PNG');
							$fileParts1 = pathinfo($large_image_name);	 
							if(in_array($fileParts1['extension'],$fileTypes1)) {
										$large_image_location1 = "../pic/".$large_image_name;
										move_uploaded_file($_FILES['file']['tmp_name'], $large_image_location1);
										chmod($large_image_location1, 0777);
									//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
							} 
							else {	  
										$max_width = "500";							// Max width allowed for the large image
										$large_image_name = time().mt_rand(100,9999).".".pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION); 
										//Image functions
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
										
										//Image Locations
										$large_image_location = "../pic/".$large_image_name;
										//Everything is ok, so we can upload the image.
										move_uploaded_file($_FILES['file']['tmp_name'], $large_image_location);
										chmod($large_image_location, 0777);
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
										
							}
					 }
					 
				  }
		  }
		  else{
			$large_image_name='w.png';
		  }  
		  $a=mysql_real_escape_string(str_replace("'","&#8216;",$large_image_name)); 
		  $aa='_img_'.$a;
		  $b=date("Y-m-d H:i:s"); 
		  $result = mysql_query("INSERT INTO `evabioyetian`.`wenzhang` (`wzid`, `userid`, `content`, `addtime`, `shenfen`, `pl_count`, `zl_count`, `zl_wzid`, `gm_count`) VALUES (NULL, '$session_id', '$aa', '$b', '0', '0', '0', '0', '0');");
		  $result1 = mysql_query("select wzid from wenzhang where userid = $session_id  ORDER BY  `wenzhang`.`addtime` DESC LIMIT 0 ,1");
		  $row = mysql_fetch_row($result1);
		  $result2 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `zl_wzid` =  $row[0] WHERE  `wenzhang`.`wzid` =$row[0];");
		  echo '<script language="javascript"> window.location.href="../mo/mybook.php";</script>';
}
?>