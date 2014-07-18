<?php
require_once('conn.php'); 
$a=mysql_real_escape_string($_GET['gongming_id']);
$result = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `gm_count` =  gm_count+1 WHERE  `wenzhang`.`wzid` =$a;");
?>
