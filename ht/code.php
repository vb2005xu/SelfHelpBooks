<?php 
error_reporting(0);
require_once('conn.php');
header("content-type:text/html;charset=utf-8"); 
ini_set("magic_quotes_runtime",0); 
require 'PHPMailer-master/class.phpmailer.php';
require_once('ck.php');
function randomkeys($length)
{
	 $pattern='1234567890abcdefghijklmnopqrstu13359141410vwxyzABCDEFGHIJKLOMNOPQRSTUVWXYZ';
	 for($i=0;$i<$length;$i++)
	 {
	   $key .= $pattern{mt_rand(0,35)};    //生成php随机数
	 }
	 return $key;
}
$time=date("Y-m-d H:i:s");  
$email_num=mysql_real_escape_string($_POST['email']);
$email1=$email_num.'@qq.com';
if (!$email1) {
	require_once('mobile_device_detect.php');
	$mobile = mobile_device_detect();
		if($mobile==true){
		 echo '<script language="javascript">window.location.href="../mo/index.php";</script>';exit;
		}
		else{
		echo '<script language="javascript">window.location.href="../index.php";</script>';exit; 
		}
}
else {
	$email2=encode($email1); 
	$key1=randomkeys(9); 
	$key2=encode($key1); 
	$url1=mysql_real_escape_string($_POST['url']);
	$url2=encode($url1);
	@$check_exsist=mysql_query("select * from user where `email`= '$email1'");
	@$check_exsist_row=mysql_fetch_row($check_exsist);
	$dyh="'";
		if (!$check_exsist_row){ 
			$result = mysql_query("INSERT INTO `evabioyetian`.`user` (`userid`, `email`, `pw`, `fm_name`, `addtime`, `fm_pic`, `name`, `dy_count`, `shenfen`) VALUES (NULL, '$email1', '$key1', '还没有想好封面名字', '$time', 'w.png', '还没有想好名字', '0', '0');");
			$message='您不需要记住任何密码，需要登录时，点击进去即可。。。<br />请不要轻易泄露此链接，若想更换密码链接(24小时内，只能更换一次)，只需要重新输入邮箱即可。<br />www.zizhushu.com/ht/code_check.php?'.md5(email029).'='.$email2.'&'.md5(key029).'='.$key2.'&'.md5(url029).'='.$url2;
			echo 0;
					try { 
						require('email_c.php');
					}
					 catch (phpmailerException $e) { 
						echo "邮件发送失败：".$e->errorMessage(); 
					}
		}else {
			  @$check_time=mysql_query("select `addtime` from user where `email`= '$email1' ORDER BY  `addtime` DESC LIMIT 0 ,1");
			  @$check_time_row=mysql_fetch_row($check_time);
			  $strtime=$check_time_row[0];
			  $endtime=strftime( "%Y-%m-%d %H:%M:%S",strtotime($strtime)+60*60*24);
			  if (strtotime($time)<strtotime($endtime)){
				 echo 1;
			  }
			  else {
					$change_code=mysql_query("UPDATE  `evabioyetian`.`user` SET  `pw` =  '$key1',`addtime`='$time' WHERE  `user`.`email` ='$email1';");
					$message='您不需要记住任何密码，需要登录时，点击进去即可。。。<br />请不要轻易泄露此链接，若想更换密码链接(24小时内，只能更换一次)，只需要重新输入邮箱即可。<br />www.zizhushu.com/ht/code_check.php?'.md5(email029).'='.$email2.'&'.md5(key029).'='.$key2.'&'.md5(url029).'='.$url2;
					echo 0;
						try { 
							require('email_c.php');
						}
						catch (phpmailerException $e) { 
							echo "邮件发送失败：".$e->errorMessage(); 
						}
		      }
        }
}
?>