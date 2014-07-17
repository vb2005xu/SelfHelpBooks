<?php
		require_once('muban/head.php');	
		if (!$session_id) {echo '<script language="javascript"> window.location.href="index.php";</script>';exit;}
		else {
		require_once('ht/conn.php');
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
<script src="ui/maxlength.js" type="text/javascript"></script> 		
<script type="text/javascript">
$(function () {
var pln=new Array;
<?php 
$syh='"';
$pl=mysql_query("select (SELECT content FROM wenzhang WHERE wzid = (SELECT zl_wzid FROM wenzhang WHERE wzid = a1.wzid )) AS src_wenzhang_content, content,pl_userid,(select name from user where userid=a1.pl_userid) as user_name,wzid from pinglun as a1  where a1.hf_userid=$session_id ORDER BY addtime DESC LIMIT $bu2 , $bu3 ");
$i=0;
while ($pl_row=mysql_fetch_row($pl))
		{
		
		if (strpos($pl_row[0],'_img_')!==false){$c=str_replace("_img_","",$pl_row[0]);$aa='<div style="width:100%;text-align:center;background-color:#ddd" class="i_pl"><img src="ui/ui_pic/transparent.gif" style="background-image:url(pic/'.$c.')"/><span class='.$syh.'yuanc'.$syh.'><a href='.$syh.'pl.php?wzid='.$pl_row[4].$syh.'>(详细)</a></span></div>';} else {$aa=substr($pl_row[0],0,30).'.....<span class='.$syh.'yuanc'.$syh.'><a href='.$syh.'pl.php?wzid='.$pl_row[4].$syh.'>(详细)</a></span>';}
		echo "pln[".$i."]='<p style=".$syh."background-color:#DDD;".$syh.">".$aa."</p><p style=".$syh."text-align:center;".$syh."><span class=".$syh."yuanc".$syh."><a href=".$syh."book.php?id=".$pl_row[2].$syh.">".$pl_row[3]."</a></span>:“". str_replace("
","",$pl_row[1])."”<span class=".$syh."yuanc hf".$syh."><a href=".$syh."###".$syh." action-data=".$syh.$pl_row[2].$syh."action-data1=".$syh.$pl_row[3].$syh."action-data2=".$syh.$pl_row[4].$syh."><<<回复</a></span></p>'; ";		
		$i++;
		}	
?>	
function paiban_p() {
s=$(window).height()*$(window).width()*0.5;
n1=Math.ceil(s/110000);
ye=Math.ceil(pln.length/n1);
if (!pln[0]) { $(".fengdi").before('<div style="text-align:center">还没有评论呢，赶紧体验一下去吧</div>');}
for (i=0;i<ye;i++)
 {	if (i==ye-1 ){ bu='<div style="width:100%;text-align:center"><span class="yuanc" ><a href="i_pl.php?bu=<?php echo ($bu1-1); ?>" >>>>>>更多>>>>></a></span><div>'} else{ bu=''};
$(".fengdi").before('<div style="display:table;width:100%;height:70%;_position:relative;overflow:hidden; "><div style="vertical-align:middle;display:table-cell;_position:absolute;_top:50%;"><div class="pl'+i+' pl" style="_position:relative; _top:-50%;"></div>'+bu+'</div></div>');	
		 for (i1=i*n1;i1<n1*(i+1);i1++)
{	
		pl=pln[i1];
		if (pl == null) {break;}
		$(".pl"+i).append(pl);
}					 
}
	
$("#mybook").booklet( {
 		width:'100%',height:'100%',
		closed: true,
        covers: true,
        menu: '#custom-menu',
        pageSelector: true,
		autoCenter:true,
		pagePadding: 20,
		arrows:true,
		shadows: false,
		nextControlTitle: "下一页",
		previousControlTitle: "上一页",
		startingPage:         2,
		hash:true
});
$(".b-wrap-left").prepend('<h3 class="eva-top"><a href="index.php">自助书，网页app</a></h3>');	
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
 $(".hf a" ).click(function(){
$("body").append('<div class="dialog-form" style="text-align:center" title="回复'+$(this).attr("action-data1")+'"><form><textarea name="content" wrap="physical" class="limited" id="content1" style="background:none;width:100%;height:80px;text-align:center;resize: vertical;overflow:auto;font-size:12px;border:1px solid #aaa" type="text"></textarea><span style="font-size:0.8em;color:#aaa" class="charsLeft">200</span><input type="hidden" name="maxlength" value="200" /><input id="wzid1" name="wzid" type="hidden" value="'+$(this).attr("action-data2")+'" /><input id="hfid1" name="hfid" type="hidden" value="'+$(this).attr("action-data")+'" /></form></div>');
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
	
$( ".dialog-form").dialog({
			autoOpen: false,
			height: 300,
			width: 350,
			modal: true,
			show: {
				effect: "scale",
				duration: 1000
			},
			hide: {
				effect: "scale",
				duration: 1000
			},
			buttons: {
				"回复": function() {
				$("body").append('<div  class="end_pl" style="width:auto;background-color:#CECDC5;left:45%;top:40%;position:absolute;z-index:999;text-align:center;font-size:16px;padding:3px;color:white">回复成功！！！</div>');	
				setTimeout('$( ".end_pl" ).remove()',2000);	
	$.get('ht/pinglun_insert.php?content='+$("#content1").val()+'&wzid='+$("#wzid1").val()+'&hfid='+$("#hfid1").val());
				$( this ).dialog( "close" );
				$( this ).remove();	
				window.location.reload();
				}
			},
			close: function() {
				$( this ).dialog( "close" );
				$( this ).remove();			
			}
});
$( ".dialog-form").dialog( "open" );
});	
}
aaaaaaaa=paiban_p();
$(window).resize(function(){
		$('#mybook').booklet("destroy");
 		$('#mybook').replaceWith('<?php require('muban/i_pl_bottom.php');	?>');
bbbbbb=paiban_p();	
});//resize	

 	
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>

<div id="eva" style="position:absolute;left:4%;top:1%;width:92%;height:98%;z-index:8;">
<?php require('muban/i_pl_bottom.php');	?>
</div>
</body>
</html>	