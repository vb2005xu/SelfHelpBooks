<?php
require('muban/head.php');
require_once('../ht/conn.php');
$result1 = mysql_query("select fm_name,fm_pic,name from user where userid=$session_id"); 
$row = @mysql_fetch_row($result1);
if ($row[0]==null) {
		$dyh="'";
   		die('<div style="top:45%;left:45%;position:absolute">请登录<script language="javascript">setTimeout('.$dyh.'window.location.href="index.php"'.$dyh.',1000);</script></div>');
}
?>
<script type="text/javascript">
$(function () {
		<?php require('muban/js_gm_zl.php');	?>	
});
</script>
</head>	
<body>
<?php require_once('muban/id.php');	?>
<div style="width:80%;margin-left:auto;margin-right:auto;margin-top:50px;">
    <form action="../ht/fengmian_update.php" method="post"  target="_self" >
    封面名字：<input  type="text" value="<?php echo $row[0]?>" name="fm_name"/><br>
    作者名字：<input  type="text" value="<?php echo $row[2]?>" name="name"/><br>
    <p style="text-align:center"><button>提交</button></p>
    </form>
    <p style="text-align:center"><span class="yuanc"><a href="fengmian_pic.php">封面图片>>></a></span></p>
</div>
</body>
</html>