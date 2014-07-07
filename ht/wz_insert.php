<?php 
require_once('../muban/cookie.php');
require_once('mobile_device_detect.php'); 
if (!$session_id) {require('../muban/tz_login.php');	exit;}
else {
require('badword.src.php');  
require_once('conn.php'); 
$a=mysql_real_escape_string(htmlspecialchars($_POST['content'], ENT_QUOTES));
if($a=='') {
$dyh="'";
$mobile = mobile_device_detect();
if($mobile==true){
die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">您没有输入文字呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../mo/xie.php"'.$dyh.',1000);</script></div></body>');

}else{
 die('<meta charset="utf-8" /><meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" /><body style="background: #E5E4DB;"><div style="top:45%;left:45%;position:absolute">您没有输入文字呀<script language="javascript">setTimeout('.$dyh.'window.location.href="../xie.php"'.$dyh.',1000);</script></div></body>');

}
}
else{ 
$b=date("Y-m-d H:i:s"); 
$badword1 = array_combine($badword,array_fill(0,count($badword),''));  
$aa ="&nbsp;&nbsp;".strtr($a, $badword1); 
$result = mysql_query("INSERT INTO `evabioyetian`.`wenzhang` (`wzid`, `userid`, `content`, `addtime`, `shenfen`, `pl_count`, `zl_count`, `zl_wzid`, `gm_count`) VALUES (NULL, '$session_id', '$aa', '$b', '0', '0', '0', '0', '0');");
$result1 = mysql_query("select wzid from wenzhang where userid = $session_id  ORDER BY  `wenzhang`.`addtime` DESC LIMIT 0 ,1");
$row = mysql_fetch_row($result1);
$result2 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `zl_wzid` =  $row[0] WHERE  `wenzhang`.`wzid` =$row[0];");

$mobile = mobile_device_detect();
if($mobile==true){
echo '<script language="javascript"> window.location.href="../mo/mybook.php";</script>';

}else{
 echo '<script language="javascript"> window.location.href="../mybook.php";</script>';

}


}
}
?>

