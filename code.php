<html>
<head>
<title>自助书，网页app</title>
<link rel="shortcut icon" href="ui/ui_pic/favicon.ico" type="image/x-icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<link href="ui/mo_book.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
<style>
.a {color:#aaa;font-size:16px;font-weight:bolder}
</style>
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
<script language="javascript">
$(document).ready(function() {	
	$("#email").blur( function () { 
			$("#spinfo").text(""); 
	})  
	$("#tijiao").click(function(){
			<?php 
			require('muban/code_upload.php');	
			?>	
	});
	$("#email").keyup(function(){
			if(event.keyCode==13){
					<?php 
					require('muban/code_upload.php');	
					?>
			}
	});			
});
</script>
</head>
<body style="background:#e5e4db;overflow:hidden">
<div style="width:100%;height:50%;position:absolute;top:10%;left:0;text-align:center;font-size:12px;color:#888">
<a href="index.php" style="color:white;font-size:1.3em;padding:3px;text-decoration:none;"><img src="ui/ui_pic/logo1.png"></a>
<br>
<br>
<span class="a">免注册。</span><br><br>
<span class="a">更简单，更华丽。</span><br><br>
<span class="a">一切只需qq邮箱，一口咖啡的功夫。</span><br><br>
QQ号码&nbsp;&nbsp;>>>&nbsp;<input  type="text" name="email" id="email" class="email" style="background:none;color:#aaa;text-align: right;width:200px;height: 24px;padding: 2px 3px;"/><br><br><span id="spinfo" style="color:#0B486B;"></span><input id="url" name="url" type="hidden" value=" <?php echo $_GET['url'];?>">
<span class="yuanc"><a id="tijiao" style="font-size:16px" href="###">提交>>></a></span>
</div>
</body>
</html>