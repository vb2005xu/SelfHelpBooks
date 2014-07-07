<?php 
setcookie("zizhushu",'', time()-3600*24*365,'/');
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();
if($mobile==true){
  echo '<script language="javascript"> window.location.href="../mo/index.php";</script>';
}else{
  echo '<script language="javascript"> window.location.href="'.$_GET['url'].'";</script>';	
}
		
?>
