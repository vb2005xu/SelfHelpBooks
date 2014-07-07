<?php 
require_once('conn.php');
require_once('../muban/cookie.php'); 
$a=mysql_real_escape_string($_GET['wzid']); 
if (!$session_id or !$a){require('../muban/tz_login.php');	exit;}
else { 
$result1 = mysql_query("select userid from wenzhang where wzid=$a"); 
$id_row = mysql_fetch_row($result1);
if ($id_row[0]!=$session_id){require('../muban/tz_index.php');	exit;}
else {
$result = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `shenfen` =  '1' WHERE  `wenzhang`.`wzid` =$a");
}
}
?>