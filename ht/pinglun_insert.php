<?php 
require_once('../muban/cookie.php'); 
require_once('mobile_device_detect.php');
if (!$session_id){
	  require('../muban/tz_login.php');	
	  exit;
}
else {
	  require('badword.src.php'); 
	  require_once('conn.php'); 
	  $a=mysql_real_escape_string(htmlspecialchars($_GET['content'], ENT_QUOTES)); 
	  $c=mysql_real_escape_string($_GET['wzid']); 
	  $d=mysql_real_escape_string($_GET['hfid']);
	  if($a=='') {
		  $dyh="'";
	      $mobile = mobile_device_detect();
		  if($mobile==true){
		      die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">您没有输入文字呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../mo/pl.php?wzid='.$c.'"'.$dyh.',1000);</script></div></body>');
		  }else{
		      die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">您没有输入文字呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../pl.php?wzid='.$c.'"'.$dyh.',1000);</script></div></body>');
		  }
	  }
	  if(strlen($a) > 400 ){
		$dyh="'";
		$mobile = mobile_device_detect();
		if($mobile==true){
			   die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">输入太多了呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../mo/pl.php?wzid='.$c.'"'.$dyh.',1000);</script></div></body>');
		}else{
			   die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">输入太多了呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../pl.php?wzid='.$c.'"'.$dyh.',1000);</script></div></body>');
		}
	  } 
	  $badword1 = array_combine($badword,array_fill(0,count($badword),'*'));  
	  $aa = strtr($a, $badword1);  
	  $b=date("Y-m-d H:i:s"); 
	  $result = mysql_query("INSERT INTO `evabioyetian`.`pinglun` (`plid`, `wzid`, `content`, `addtime`, `shenfen`, `pl_userid`,`hf_userid`) VALUES (NULL, '$c', '$aa', '$b', '0', '$session_id','$d');");
	  $result1 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `pl_count` =  pl_count+1 WHERE  `wenzhang`.`wzid` =$c;");	
	  $mobile = mobile_device_detect();
	  if($mobile==true){
		echo '<script language="javascript"> window.location.href="../mo/pl.php?wzid='.$c.'";</script>';
	  }else{
		echo '<script language="javascript"> window.location.href="../pl.php?wzid='.$c.'";</script>';
	  }

}
?>
