<?php
$mail = new PHPMailer(true); 
$mail->IsSMTP(); 
$mail->IsHTML();
$mail->CharSet='UTF-8'; //设置邮件的字符编码，这很重要，不然中文乱码 
$mail->SMTPAuth = true; //开启认证 
$mail->Port = 25; 
$mail->Host = "smtp.exmail.qq.com"; 
$mail->Username = "code@zizhushu.com"; 
$mail->Password = "a355285351"; 
//$mail->IsSendmail(); //如果没有sendmail组件就注释掉，否则出现“Could not execute: /var/qmail/bin/sendmail ”的错误提示 
$mail->AddReplyTo("code@zizhushu.com","自助书，网页app");//回复地址 
$mail->From = "code@zizhushu.com"; 
$mail->FromName = "自助书，网页app"; 
$to = $email1; 
$mail->AddAddress($to); 
$mail->Subject = "自助书，密码服务"; 
$mail->Body = $message; 
$mail->AltBody = "To view the message, please use an HTML compatible email viewer!"; //当邮件不支持html时备用显示，可以省略 
$mail->WordWrap = 20; // 设置每行字符串的长度 
//$mail->AddAttachment("f:/test.png"); //可以添加附件 
$mail->IsHTML(true); 
$mail->Send(); 
?>