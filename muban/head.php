<?php error_reporting(0);	
require_once('muban/cookie.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<link rel="shortcut icon" href="ui/ui_pic/favicon.ico" type="image/x-icon">
<title>自助书，网页app</title>
<noscript><div style="width:100%;height:100%;top:0;left:0;background-color:#cecdc5;position:absolute;z-index:9999;text-align:center;font-size:20px;"><div style="position:absolute;top:45%;text-align:center;width:100%"><img src="ui/ui_pic/logo.png" width="30" height="30">您没有打开浏览器的JavaScript功能。。。。</div></div></noscript> 
<!--[if lt IE 8]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<div style="position:absolute;width:50%;left:25%;top:0;background:#A8DBA8;color:white;font-size:18px;z-index:99999;text-align:center">IE浏览器太卡了，用chrome或者其他最新版本的浏览器吧...</div>
<![endif]-->
<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<!-- required files for booklet -->
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script src="http://libs.baidu.com/jqueryui/1.10.1/jquery-ui.min.js"></script>
<script src="ui/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="ui/booklet/jquery.booklet.latest.js" type="text/javascript"></script>
<link href="ui/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<link href="ui/book.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<link href="ui/jquery-ui.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />