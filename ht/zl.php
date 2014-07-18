<?php
		require_once('../muban/cookie.php'); 
		require_once('conn.php');
		$zlid=mysql_real_escape_string($_GET['zl_wzid']); 
		$wzid=mysql_real_escape_string($_GET['wzid']);
		$check=mysql_query("select * from wenzhang where `userid`=$session_id and `zl_wzid`=$zlid");
		$check1=@mysql_fetch_row($check);
		$time=date("Y-m-d H:i:s"); 
		if (!$session_id or !$zlid) {
			require('../muban/tz_login.php');	
			exit;
		}
		else {
			if ($check1==null){
				  $zl=mysql_query("INSERT INTO `evabioyetian`.`wenzhang` (`wzid`, `userid`, `content`, `addtime`, `shenfen`, `pl_count`, `zl_count`, `zl_wzid`, `gm_count`) VALUES (NULL, '$session_id', '', '$time', '0', '0', '0', '$zlid', '0');");
				  $result1 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `zl_count` =  zl_count+1 WHERE  `wenzhang`.`wzid` =$zlid;");
				  if ($zlid==$wzid){
					  exit;
				  }
				  else{
					  $result2 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `zl_count` =  zl_count+1 WHERE  `wenzhang`.`wzid` =$wzid;");
					  exit;
				  }
			}
			else {
				$result3 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `addtime` =  '$time' WHERE  `wenzhang`.`userid`=$session_id and `wenzhang`.`zl_wzid` =$zlid;");
				$result4 = mysql_query("UPDATE  `evabioyetian`.`wenzhang` SET  `zl_count` =  zl_count+1 WHERE  `wenzhang`.`wzid` =$wzid;");
				exit;
			}
		}
?>