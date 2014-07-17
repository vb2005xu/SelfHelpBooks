<?php
		require_once('muban/head.php');	
		if (!$session_id) {echo '<script language="javascript"> window.location.href="index.php";</script>';exit;}
		else {
		require_once('../ht/conn.php');
		$bu1=mysql_real_escape_string ($_GET['bu']);				
		$user=mysql_query("SELECT `fm_pic`,`name`,`dy_count` FROM `user` where `userid`= $session_id and `shenfen`=0 ");	
		$user_row = @mysql_fetch_row($user);
		if ($user_row[1]==null) {
   		die('您访问的用户不存在'.'<script language="javascript"> window.location.href="index.php";</script>');}
		}
		$book_bu=mysql_query("SELECT COUNT( * ) FROM pinglun WHERE hf_userid=$session_id ");	
		$book_bu_row = mysql_fetch_row($book_bu);	
		$bu=ceil($book_bu_row[0]/15);
		if (!$bu1 or $bu1>$bu){$bu1=$bu;}
		$real_bu=range(1,$bu);
		$real_bu1=array_slice($real_bu,-$bu1,1);
		$bu2=($real_bu1[0]-1)*15;
		$bu3=($real_bu1[0])*15;
?>	
<script src="../ui/maxlength.js" type="text/javascript"></script> 		
<script type="text/javascript">
$(function () {
var pln=new Array;
<?php 
$syh='"';
$pl=mysql_query("select (select content from wenzhang where wzid= a1.wzid) as wenzhang_content,content,pl_userid,(select name from user where userid=a1.pl_userid) as user_name,wzid from pinglun as a1  where a1.hf_userid=$session_id ORDER BY addtime DESC LIMIT $bu2 , $bu3 ");
$i=0;
while ($pl_row=mysql_fetch_row($pl))
		{
		
		if (strpos($pl_row[0],'_img_')!==false){$c=str_replace("_img_","",$pl_row[0]);$aa='<div style="width:100%;text-align:center;background-color:#ddd" class="i_pl"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../pic/'.$c.')"/><span class='.$syh.'yuanc'.$syh.'><a href='.$syh.'pl.php?wzid='.$pl_row[4].$syh.'>(阅读全文)</a></span></div>';} else {$aa=substr($pl_row[0],0,30).'.....<span class='.$syh.'yuanc'.$syh.'><a href='.$syh.'pl.php?wzid='.$pl_row[4].$syh.'>(阅读全文)</a></span>';}
		echo "pln[".$i."]='<p style=".$syh."background-color:#DDD;".$syh.">".$aa."</p><p style=".$syh."text-align:center;".$syh."><span class=".$syh."yuanc".$syh."><a href=".$syh."book.php?id=".$pl_row[2].$syh.">".$pl_row[3]."</a></span>:“". str_replace("
","",$pl_row[1])."”<span class=".$syh."yuanc hf".$syh."><a href=".$syh."hf_pl.php?hf_name=".$pl_row[3]."&wzid=".$pl_row[4]."&hfid=".$pl_row[2].$syh." target=".$syh."_blank".$syh."><<<回复</a></span></p>'; ";		
		$i++;
		}	
?>	
function paiban_p() {
s=$(window).height()*$(window).width()*0.5;
n1=Math.ceil(s/50000);
ye=Math.ceil(pln.length/n1);
if (!pln[0]) { $(".fengdi").before('<div></div><div style="text-align:center">还没有评论呢。。。。。。。。。</div>');}
for (i=0;i<ye;i++)
 {	if (i==ye-1 ){ bu='<div></div><div style="width:100%;text-align:center"><span class="yuanc" ><a href="i_pl.php?bu=<?php echo ($bu1-1); ?>" >>>>>>更多>>>>></a></span><div>'} else{ bu=''};
$(".fengdi").before('<div></div><div style="display:table;width:100%;height:70%;_position:relative;overflow:hidden; "><div style="vertical-align:middle;display:table-cell;_position:absolute;_top:50%;"><div class="pl'+i+' pl" style="_position:relative; _top:-50%;"></div>'+bu+'</div></div>');	
		 for (i1=i*n1;i1<n1*(i+1);i1++)
{	
		pl=pln[i1];
		if (pl == null) {break;}
		$(".pl"+i).append(pl);
}					 
}
$(".fengdi").before('<div></div><div class="eva-wz"><p>后面木有啦。。。</p></div>');	
$("#mybook").booklet( {
 		width:'100%',height:'100%',
		closed: true,
        covers: true,
		autoCenter:false,
		pagePadding: 10,
		arrows:true,
		manual:false,
		shadows: false,
		nextControlTitle: "下一页",
		previousControlTitle: "上一页",
		startingPage:        2,
		hash:true
});
	
$(".b-wrap-right").prepend('<h3 class="eva-top"><a href="i_pl.php"><?php echo $user_row[1].'的聊天评论'; ?></a></h3>');	
<?php require('muban/js_gm_zl.php');	?>	
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

}
aaaaaaaa=paiban_p();


 	
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div id="eva" >
<?php require('muban/i_pl_bottom.php');	?>
</div>
</body>
</html>	