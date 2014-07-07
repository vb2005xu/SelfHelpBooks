<?php 
require_once('../muban/cookie.php'); 
if (!$session_id) {echo '<script language="javascript"> window.location.href="../login.php";</script>';exit;}
else {
require_once('conn.php'); 
$a=mysql_real_escape_string(str_replace("'","&#8216;",$_POST['upload_pic'])); 
$aa='_img_'.$a;
$b=date("Y-m-d H:i:s"); 
$result = mysql_query("INSERT INTO `evabioyetian`.`wenzhang` (`wzid`, `userid`, `content`, `addtime`, `shenfen`, `pl_count`, `zl_count`, `zl_wzid`, `gm_count`) VALUES (NULL, '$session_id', '$aa', '$b', '0', '0', '0', '0', '0');");
$result1 = mysql_query("select wzid from wenzhang where userid = $session_id  ORDER BY  `wenzhang`.`addtime` DESC LIMIT 0 ,1");
$row = mysql_fetch_row($result1);
$result2 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `zl_wzid` =  $row[0] WHERE  `wenzhang`.`wzid` =$row[0];");
echo "ok";
}
?>