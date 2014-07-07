<?php 
require_once('conn.php');
require_once('../muban/cookie.php'); 
$a=mysql_real_escape_string($_POST['wzid']);
$b=mysql_real_escape_string(htmlspecialchars($_POST['content'], ENT_QUOTES)); 
if (!$session_id or !$a or !$b){require('../muban/tz_login.php');	exit;}
else {
$result1 = mysql_query("select userid from wenzhang where wzid=$a"); 
$id_row = mysql_fetch_row($result1);
if ($id_row[0]!=$session_id){require('../muban/tz_login.php');	exit;}
else {
$result = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `content` =  '$b' WHERE  `wenzhang`.`wzid` =$a;");
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();
if($mobile==true){
echo '<script language="javascript"> window.location.href="../mo/mybook.php";</script>';

}else{
echo '<script language="javascript"> window.location.href="../mybook.php";</script>';

}

}
}
?>