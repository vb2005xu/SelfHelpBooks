<?php
		require_once('../muban/cookie.php');
		require_once('conn.php');
		$bdyid =mysql_real_escape_string($_GET['bdy_id']); 
		if (!$session_id or !$bdyid) {require('../muban/tz_login.php');	exit;}
		else {				
		$check=mysql_query("select * from dingyue where `userid`=$session_id and `bdy_userid`=$bdyid");
		$check1=@mysql_fetch_row($check);
		if ($check1==null){
		$time=date("Y-m-d H:i:s"); 	
		$user=mysql_query("INSERT INTO `evabioyetian`.`dingyue` (`userid`, `bdy_userid`, `addtime`) VALUES ('$session_id', '$bdyid', '$time');");
		mysql_query("UPDATE  `evabioyetian`.`user` SET  `dy_count` =  dy_count+1 WHERE  `user`.`userid` =$bdyid;");	
		}
		else {exit;}
		}
		
?>