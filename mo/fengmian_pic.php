<?php
require('muban/head.php');
require_once('../ht/conn.php');
$result1 = mysql_query("select fm_pic from user where userid=$session_id"); 
$row = @mysql_fetch_row($result1);
if ($row[0]==null) {
		$dyh="'";
   		die('<div style="top:45%;left:45%;position:absolute">请登录<script language="javascript">setTimeout('.$dyh.'window.location.href="index.php"'.$dyh.',1000);</script></div>');}
?>
<script type="text/javascript">
 $(function () {
<?php require('muban/js_gm_zl.php');	?>	
});
</script>
</head>	
<body>
<?php require_once('muban/id.php');	?>
<div id="upload" style="text-align:center;width:90%;overflow:hidden;margin-top:10px">
<p style="text-align:center">封面图片</p>
<a target="_blank"  href="../img.php?v=fm_pic/<?php echo $row[0]?>"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../fm_pic/<?php echo $row[0]?>)"/></a>
<form action="../ht/fm_pic_insert.php" method="post" enctype="multipart/form-data">
<br />
<input name="file" type="file" /><br />
<br />
<button>上传图片，自动压缩</button>
</form>

</div>
</body>
</html>