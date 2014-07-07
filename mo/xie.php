<?php 	
require_once('muban/head.php');
?>
<script language="javascript">
$(document).ready(function() {
<?php require('muban/js_gm_zl.php');	?>		 						
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div style="width:100%;height:50%;background:white;">
<p style="text-align:right;padding-right:10px"><span class="yuanc" style="padding-right:10px">文字文章</span></p>
<div style="top:0;text-align:center;width:100%;"><h1><?php echo date("Y-m-d");?></h1></div>
<div style="width:80%;margin-left:auto;margin-right:auto;text-align:center;" >
<form action="../ht/wz_insert.php" method="post"  target="_self" >
<textarea name="content" wrap="physical"  style="background:none;width:100%;height:100px;text-align:center;resize: vertical;overflow:auto;border:1px solid #aaa" type="text"></textarea>
<button>发表</button>
</form>
</div><!--content-->
</div><!--left-->
<div style="width:100%;height:50%;background:#F6F4EC;text-align: center;">
<p style="text-align:right;padding-right:10px"><span class="yuanc" style="padding-right:10px">图片文章</span></p>
<form action="../ht/m_pic_insert.php" method="post" enctype="multipart/form-data">
<div id="upload" style="color:#aaa;left:0;text-align:center;overflow:hidden;border:0;">
<input name="file" type="file" />
</div><br />
<br />
<button>上传图片，自动压缩</button>
</form>
</div><!--right-->
</body>
</html>