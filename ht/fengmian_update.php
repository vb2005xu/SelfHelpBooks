<?php 
require_once('../muban/cookie.php'); 
require_once('conn.php');
if (!$session_id) {echo '<script language="javascript"> window.location.href="../login.php";</script>';exit;} 
$a=mysql_real_escape_string(htmlspecialchars($_POST['fm_pic'], ENT_QUOTES)); 
$b=mysql_real_escape_string(htmlspecialchars($_POST['fm_name'], ENT_QUOTES)); 
$c=mysql_real_escape_string(htmlspecialchars($_POST['name'], ENT_QUOTES)); 
if (!$a and !b and !c ){echo '<script language="javascript">window.location.href="../index.php";</script>';exit;}
else {
if (!$a) {
$result = mysql_query("UPDATE  `evabioyetian`.`user` SET  `fm_name` =  '$b',`name` =  '$c' WHERE  `user`.`userid` ='$session_id';");
}
else
{
$result1 = mysql_query("UPDATE  `evabioyetian`.`user` SET  `fm_name` =  '$b',`fm_pic` =  '$a',`name` =  '$c' WHERE  `user`.`userid` ='$session_id';");
}
require_once('mobile_device_detect.php');
$mobile = mobile_device_detect();
// include one file for mobiles and another for fully featured browsers
if($mobile==true){
 echo '<script language="javascript"> window.location.href="../mo/mybook.php";</script>';
}else{
echo '<script language="javascript"> window.location.href="../mybook.php";</script>';
}
exit;

}
?>