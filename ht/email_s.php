<?php
$mail = new PHPMailer(true); 
$mail->IsSMTP(); 
$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码 
$mail->SMTPAuth = true; //开启认证 
$mail->Port = 25; 
$mail->Host = "smtp.exmail.qq.com"; 
$mail->Username = "suggestion@zizhushu.com"; 
$mail->Password = "a355285351"; 
//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could not execute: /var/qmail/bin/sendmail ”的错误提示 
$mail->AddReplyTo("suggestion@zizhushu.com","自助书，网页app");//回复地址 
$mail->From = "suggestion@zizhushu.com"; 
$mail->FromName = "自助书，网页app"; 
$to = "355285351@qq.com"; 
$mail->AddAddress($to); 
$mail->Subject = "自助书 建议"; 
$mail->Body = $message; 
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略 
$mail->WordWrap = 20; // 设置每行字符串的长度 
//$mail->AddAttachment("f:/test.png"); //可以添加附件 
$mail->IsHTML(true); 
$mail->Send();
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();
if($mobile==true){
  echo '<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><meta charset="utf-8" /><body style="background: #E5E4DB;"><div style="top:40%;left:0;position:absolute;width:100%;text-align:center"><img src="../ui/ui_pic/logo1.png" />收到啦，感谢您的建议！<script language="javascript">setTimeout('.$dyh.'window.location.href="../mo/index.php"'.$dyh.',2000);</script></div></body>';
}else{
  echo'<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><meta charset="utf-8" /><body style="background: #E5E4DB;"><div style="top:40%;left:0;position:absolute;width:100%;text-align:center"><img src="../ui/ui_pic/logo1.png" />收到啦，感谢您的建议！<script language="javascript">setTimeout('.$dyh.'window.location.href="../index.php"'.$dyh.',2000);</script></div></body>';
}

?>