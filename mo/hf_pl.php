<?php 
require_once('muban/head.php');	
require_once('../muban/cookie.php'); 
if (!$session_id){
	require('../muban/tz_login.php');	
	exit;
}
else { 
	require_once('../ht/conn.php'); 
	$wzid=mysql_real_escape_string($_GET['wzid']); 
	$hfid=mysql_real_escape_string($_GET['hfid']);
	$hf_name=mysql_real_escape_string($_GET['hf_name']);
}
?>
<script src="../ui/maxlength.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
		$('textarea.limited').maxlength({
            'feedback' : '.charsLeft', 
			'useInput' : true
        });
		$('input.limited').maxlength({
            'feedback' : '.charsLeft' 
        });
        $('textarea.wordLimited').maxlength({
            'words': true,
            'feedback': '.wordsLeft',
			'useInput' : true
        });
<?php require('muban/js_gm_zl.php');	?>
});	
</script>
</head>
<body>
<div style="left:0;top:0;position:absolute;width:100%;height:100%;background:#f6f4ec;text-align:center">
<p>回复：<?php echo $hf_name;	?></p>
<form action="../ht/pinglun_insert.php" method="get"  target="_self" >
<textarea name="content" wrap="physical" class="limited" id="content" style="background:none;width:80%;height:80%;text-align:center;resize: vertical;overflow:auto;font-size:12px;border:1px solid #aaa" type="text"></textarea>
<br /><span style="font-size:0.8em;color:#aaa" class="charsLeft">200</span>
<input type="hidden" name="maxlength" value="200" />
<input name="wzid" type="hidden" value="<?php echo $wzid;	?>" />
<input id="hfid" name="hfid" type="hidden" value="<?php echo $hfid;	?>" />
<br /><br />
<button>评论</button>
</form>
</div>
</body>
</html>