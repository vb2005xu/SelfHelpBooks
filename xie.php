<?php 	
require('muban/head.php');	
?> 
<script src="ht/upload/jquery.uploadify.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="ht/upload/uploadify.css"> 
<script language="javascript">
$(document).ready(function() {
			  <?php $timestamp = time();?>	
			  $('#file_upload').uploadify({
							  'formData'     : {
								  'timestamp' : '<?php echo $timestamp;?>',
								  'token'     : '<?php echo md5('unique_salt' . $timestamp);?>'
							  },
							  'swf'      : 'ht/upload/uploadify.swf',
							  'uploader' : 'ht/upload/uploadify.php',
							  'onUploadSuccess' : function(file, data, response) {
							  $("#upload").html(data);$("#tijiao").show()
							  },
							   'fileTypeExts' : '*.gif; *.jpg; *.png',
							   'buttonText' : '上传图片，自动压缩',
							   'fileSizeLimit' : '60000KB',
							   'uploadLimit' : 1
							   
			  });
			  $("#file_upload").css({"margin-left":"auto","margin-right":"auto"}); 
			  setInterval(
					function eva_tijiao(){
						  $("#tijiao").click(function(){
							  var upload_img=($("#upload_pic").val());
							  $.post("ht/pic_insert.php", { upload_pic : upload_img } );
							  $(this).replaceWith('<span class="yuanc"><a style="font-size:16px" href="###">正在提交>>>>>>,等待成功跳转</a></span>');
							  setTimeout('window.location.href="mybook.php"',2000);
							  exit;
						  });	
					}
			  ,500);
			  <?php require('muban/js_gm_zl.php');	?>		 						
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div id="eva" style="position:absolute;left:4%;top:1%;width:92%;height:98%;z-index:8;">
<div style="width:50%;height:100%;float:left;background:white;">
<p style="text-align:right;padding-right:10px"><span class="yuanc" style="padding-right:10px"><<<文字文章</span></p>
<div style="top:0;text-align:center;width:100%;"><h1><?php echo date("Y-m-d");?></h1></div>
<div style="width:80%;margin-left:auto;margin-right:auto;text-align:center;" >
<form action="ht/wz_insert.php" method="post"  target="_self" >
<textarea name="content" wrap="physical"  style="background:none;width:100%;height:300px;text-align:center;resize: vertical;overflow:auto;border:1px solid #aaa" type="text"></textarea>
<button>发表</button>
</form>
</div><!--content-->
</div><!--left-->
<div style="width:50%;height:100%;float:right;background:#F6F4EC;text-align: center;">
<p style="text-align: left;"><span class="yuanc" style="padding-left:10px">图片文章>>></span></p>
<div id="upload" style="text-align:center;width:90%;height:70%;overflow:hidden;">
<br>
<br>
<input id="file_upload" name="file_upload" type="file" >
</div>
<h1><a id="tijiao" style="font-size:16px;display:none" href="###">确认发布图片</a></h1>
</div><!--right-->

</div>
</body>
</html>