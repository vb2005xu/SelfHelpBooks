<?php
require_once('conn.php');
require_once('ck.php');
require_once('../muban/cookie.php');
if($session_id){
	setcookie("zizhushu",'', time()-3600*24*365,'/');
}
$email1 = decode($_GET[md5(email029)]);
$key1 = decode($_GET[md5(key029)]);
$url1 = decode($_GET[md5(url029)]);
if (!$email1 or !$key1 or !$url1) {
	exit;
}
@$check=mysql_query("select `pw` from user where `email`= '$email1' ORDER BY  `addtime` DESC LIMIT 0 ,1");
@$check_row=mysql_fetch_row($check);
$dyh="'";
if ($key1===$check_row[0]){
	  $result1= mysql_query("select userid,shenfen from user where email='$email1'");
	  $row = mysql_fetch_row($result1);
			  if ($row[1]!='0'){
					echo '<script language="javascript"> window.location.href="../jubao.html";</script>';exit;
			  }	
			  else{
					$session_id=$row[0];
					function encodecookie($txt){
						  $key_cookie='13359141410';
						  for($i=0;$i<strlen($txt);$i++){
						   $txt[$i]=chr(ord($txt[$i])+$key_cookie);
						  }
						  return $txt=base64_encode(urlencode($txt));
			        }
//cookie加密过程
					setcookie("zizhushu",encodecookie($session_id), time()+3600*24*365,'/');
					echo '<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><meta charset="utf-8" /><body style="background: #E5E4DB;"><div style="top:40%;left:0;position:absolute;width:100%;text-align:center"><img src="../ui/ui_pic/logo1.png" />登陆成功！正在跳转。。。<script language="javascript">setTimeout('.$dyh.'window.location.href="../index.php"'.$dyh.',2000);</script></div></body>';	
               }
}
else {
		echo '<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><meta charset="utf-8" /><body style="background: #E5E4DB;"><div style="top:40%;left:0;position:absolute;width:100%;text-align:center"><img src="../ui/ui_pic/logo1.png" />错误啦!黑客们，我只是小网站，手下留情哦。。。<script language="javascript">setTimeout('.$dyh.'window.location.href="../index.php"'.$dyh.',2000);</script></div></body>';
		exit;
}

?>