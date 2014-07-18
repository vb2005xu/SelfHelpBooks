<?php 
require_once('../muban/cookie.php'); 
require_once('conn.php');  
$a=mysql_real_escape_string($_POST['bdy_userid']); 
if (!$session_id or !$a){
	require('../muban/tz_login.php');	exit;
}
else { 
	$result = mysql_query("DELETE FROM `evabioyetian`.`dingyue` WHERE `dingyue`.`userid` = $session_id AND `dingyue`.`bdy_userid` = $a");
}
?>

