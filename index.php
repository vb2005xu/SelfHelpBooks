<?php
require_once('ht/mobile_device_detect.php');
$mobile = mobile_device_detect();
// include one file for mobiles and another for fully featured browsers
if($mobile==true){
 echo '<script>window.location.href="mo/index.php";</script>'; 
}else{
  require_once('p_index.php');
}
exit;
?>