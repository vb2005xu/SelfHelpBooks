<?php
$conn=mysql_connect("localhost","evabioyetian","evabio@yetian");
mysql_select_db("zizhushu",$conn);
mysql_query("set names utf8"); 
$result = mysql_query("select wzid from wenzhang where `zl_wzid`=0;");
while ($result_row=mysql_fetch_row($result))
{
$result1 = mysql_query("UPDATE  `zizhushu`.`wenzhang` SET  `zl_wzid` ='$result_row[0]'   WHERE  `wenzhang`.`wzid` ='$result_row[0]';");
}
?>