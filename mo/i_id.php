<?php error_reporting(0);
require_once('../ht/conn.php');
require_once('../muban/cookie.php');
$url =$_GET['url'];
$time=date("Y-m-d");
$jrdy=mysql_query("select count(*) from wenzhang where date(addtime) ='$time' and userid in (select bdy_userid from dingyue where userid =$session_id)");
@$jrdy_row=mysql_fetch_row($jrdy);
$jrpl=mysql_query("select count(*) from pinglun where date(addtime) ='$time' and hf_userid =$session_id ");
@$jrpl_row=mysql_fetch_row($jrpl);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.5, minimum-scale=1.0" />
<meta charset="utf-8" />
<link rel="shortcut icon" href="../ui/ui_pic/favicon.ico" type="image/x-icon">
<title>自助书，网页app</title>
<noscript><div style="width:100%;height:100%;top:0;left:0;background-color:#cecdc5;position:absolute;z-index:9999;text-align:center;font-size:20px;"><div style="position:absolute;top:45%;text-align:center;width:100%"><img src="../ui/ui_pic/logo.png" width="30" height="30">您没有打开浏览器的JavaScript功能。。。。</div></div></noscript>
<link href="../ui/mo_book.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<style>
a:link{
	color:#888;
	text-decoration:none;
	background:none;
}
a:visited{
	color:#888;
	text-decoration:none;
	background:none
}
a:hover{
	color:white;
	background:#CECDC5
}
a:active{
	color:white;
	background:#666;
	text-decoration:none
}
</style>
<script src="../ui/booklet/jquery-1.9.1.min.js" type="text/javascript"></script> 
<script language="javascript">
$(document).ready(function() {	
<?php require_once('muban/js_gm_zl.php');	?>
});
</script>
<body style="background-color:#CECDC5;margin:0;">
<div style="width:90%;height:100%;position:absolute; top:5%;text-align:center">
<ul>
<li><img style= "margin-top:5px" src="../ui/ui_pic/logo_m.png"></li>
<?php 
if (!$session_id) {echo '<li><a class="log">登陆</a></li>';}
 else 
 {echo '<li><a href="xie.php">写</a></li><li><a href="mybook.php">我的书册</a></li>
 <li><a href="i.php">今日订阅('.$jrdy_row[0].')</a></li>
 <li><a href="i_pl.php">今日评论('.$jrpl_row[0].')</a></li>';}
 ?>
 <?php 
 if (!$session_id) {echo '';} 
 else 
 {echo '<li><a class="logout">退出</a></li>';}
 ?>
 <li><a style="border-top:1px solid #E9EADF" href="index.php">今日目录</a></li>
 <li><a href="s.php">搜索</a></li>
 <li><a href="shuffle.php">摇随机</a></li>
 <li><a href="../us.html" target="_blank">建议，联系</a></li>
 <li><a href="../p_index.php">电脑版</a></li>
</ul>
</div>
</body>
</html>