<?php
$conn=mysql_connect("localhost","xxxx","xxxx");
mysql_select_db("zizhushu",$conn);
mysql_query("set names utf8"); 
for ($i=0;$i<197;$i++)
{
$txt="zazhi/yilinzazhi/c (".$i.").txt";
$content=file_get_contents($txt);
$b=date("Y-m-d H:i:s");	
$content1=preg_replace('/\n|\r\n/','',$content);	
$result = mysql_query("INSERT INTO `zizhushu`.`wenzhang` (`wzid`, `userid`, `content`, `addtime`, `shenfen`, `pl_count`, `zl_count`, `zl_wzid`, `gm_count`) VALUES (NULL, '1', '$content1', '$b', '0', '0', '0', '0', '0');");
sleep(1);
$result1 = mysql_query("select wzid from wenzhang where userid = '1' ORDER BY  `wenzhang`.`addtime` DESC LIMIT 0 ,1");
$row = mysql_fetch_row($result1);
$result2 = mysql_query("UPDATE  `zizhushu`.`wenzhang` SET  `zl_wzid` =  $row[0] WHERE  `wenzhang`.`wzid` =$row[0];");
echo 'ok<br />';
}
?>