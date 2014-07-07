<?php
require('muban/head.php');
require_once('ht/conn.php');
$result1 = mysql_query("select fm_name,fm_pic,name from user where userid=$session_id"); 
$row = @mysql_fetch_row($result1);
if ($row[0]==null) {
		$dyh="'";
   		die('<div style="top:45%;left:45%;position:absolute">请登录<script language="javascript">setTimeout('.$dyh.'window.location.href="index.php"'.$dyh.',1000);</script></div>');}
?>
 
<script src="ht/upload/jquery.uploadify.min.js" type="text/javascript"></script>

<link rel="stylesheet" type="text/css" href="ht/upload/uploadify.css"> 
<script type="text/javascript">
 $(function () {
 <?php $timestamp = time();?>	
$('#file_upload').uploadify({
				'formData'     : {
					'timestamp' : '<?php echo $timestamp;?>',
					'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
				},
				'swf'      : 'ht/upload/uploadify.swf',
				'uploader' : 'ht/upload/fm_uploadify.php',
				'onUploadSuccess' : function(file, data, response) {
				$("#upload").html(data);
				},
				 'fileTypeExts' : '*.gif; *.jpg; *.png',
				 'buttonText' : '上传图片，自动压缩',
				 'fileSizeLimit' : '60000KB',
				 'uploadLimit' : 1				 
			});

$("#tijiao").click(function(){
$(this).replaceWith('<span class="yuanc"><a style="font-size:16px" href="###">正在提交>>>>>></a></span>');
document.forms[0].submit();

});	

<?php require('muban/js_gm_zl.php');	?>	
});
</script>
</head>	
<body><?php require_once('muban/id.php');	?>
<div style="width:61.8%;margin-left:auto;margin-right:auto">

<form action="ht/fengmian_update.php" method="post"  target="_self" >
封面名字：<input  type="text" value="<?php echo $row[0]?>" name="fm_name"/><br>
作者名字：<input  type="text" value="<?php echo $row[2]?>" name="name"/><br>
封面图片：
<div id="upload" style="text-align:center;width:50%;height:70%;overflow:hidden;">
<input id="file_upload" name="file_upload" type="file" >
<a target="_blank" href="img.php?v=fm_pic/<?php echo $row[1]?>"><img src="ui/ui_pic/transparent.gif" style="background-image:url(fm_pic/<?php echo $row[1]?>)"/></a>
<input name="fm_pic" type="hidden" value="<?php echo $row[1]?>">
</div>
<p style="text-align:center"><span class="yuanc"><a id="tijiao" style="font-size:16px" href="###">>>>提交>>></a></span></p>
</form>

</div>

</body>
</html>