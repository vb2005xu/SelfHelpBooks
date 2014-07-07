<?php
header("content-type:text/html;charset=utf-8"); 
ini_set("magic_quotes_runtime",0); 
require 'PHPMailer-master/class.phpmailer.php'; 
$message=$_POST['contact']; 
$dyh="'";
if (!$message){exit;}
else{
try { 
require('email_s.php');  
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();
if($mobile==true){
  echo '<meta charset="utf-8" /><body style="background: #E5E4DB;"><div style="top:40%;left:0;position:absolute;width:100%;text-align:center"><img src="../ui/ui_pic/logo1.png" />收到啦，感谢您的建议！<script language="javascript">setTimeout('.$dyh.'window.location.href="../mo/index.php"'.$dyh.',2000);</script></div></body>';
}else{
  echo'<meta charset="utf-8" /><body style="background: #E5E4DB;"><div style="top:40%;left:0;position:absolute;width:100%;text-align:center"><img src="../ui/ui_pic/logo1.png" />收到啦，感谢您的建议！<script language="javascript">setTimeout('.$dyh.'window.location.href="../index.php"'.$dyh.',2000);</script></div></body>';
}

} catch (phpmailerException $e) { 
echo "邮件发送失败：".$e->errorMessage(); 
}
}

?>
