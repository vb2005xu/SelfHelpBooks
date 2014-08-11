<?php 
		require_once('muban/head.php');	
		require_once('../ht/conn.php');
		$wzid=mysql_real_escape_string ($_GET['wzid']);
		$bu1=mysql_real_escape_string ($_GET['bu']);
		$wenzhang=mysql_query("SELECT (SELECT fm_name FROM user AS a4 WHERE a4.userid = a1.userid)AS fm_name, (SELECT content FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_content, (SELECT (SELECT fm_name FROM user AS a3 WHERE a3.userid = a2.userid) AS src_fm_name1 FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid ) AS src_fm_name, pl_count, zl_count,gm_count,(SELECT shenfen FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_shenfen,date(addtime),userid,(SELECT fm_pic FROM user AS a5 WHERE a5.userid = a1.userid)AS fm_pic,zl_wzid FROM wenzhang AS a1 WHERE wzid =$wzid and `shenfen`=0 ");	
		$wz_row = mysql_fetch_row($wenzhang);
		if ($wz_row[6] ==null) {
   		die('您访问的文章不存在'.'<script language="javascript"> window.location.href="index.php";</script>');}
		$book_bu=mysql_query("SELECT COUNT( * ) FROM pinglun WHERE `wzid`=$wzid and shenfen=0");	
		$book_bu_row = mysql_fetch_row($book_bu);	
		$bu=ceil($book_bu_row[0]/15);
		if (!$bu1 or $bu1>$bu){$bu1=$bu;}
		$real_bu=range(1,$bu);
		$real_bu1=array_slice($real_bu,-$bu1,1);
		$bu2=($real_bu1[0]-1)*15;
		$bu3=($real_bu1[0])*15;
		$pinglun=mysql_query("SELECT (select name from user as a2 where a2.userid=a1.pl_userid) as pl_name,content,(select userid from user as a2 where a2.userid=a1.pl_userid) as userid FROM `pinglun` as a1 WHERE `wzid`=$wzid and `shenfen`=0 ORDER BY  `addtime` DESC LIMIT $bu2 , $bu3  ");		
?>
<script src="../ui/maxlength.js" type="text/javascript"></script>
<script type="text/javascript">
$(function () {
		<?php echo "dl='".$session_id."'; " ; ?>
		var pln=new Array;
<?php 	
		if ($wz_row[6]==1) {
			echo " var str ='对不起，此文章已被原作者删除。。。'; " ;
		} else {
			echo "str='".str_replace("
","",$wz_row[1])."'; " ;
		}	
		echo "zlc='".$wz_row[4]."'; " ;	
		echo "plc='".$wz_row[3]."'; " ;
		echo "gm='".$wz_row[5]."'; " ;
		echo "addtime='".$wz_row[7]."'; " ;
		if ( $wz_row[0]==$wz_row[2]){
			echo "yc='原创'; "; 
		} else {
			echo "yc='<a href=pl.php?wzid=".$wz_row[10]." >转自《". $wz_row[2]."》</a>'; ";
		}
		$i=0;
		$syh='"';
	    while($pl_row = mysql_fetch_row($pinglun)){
		     echo "pln[".$i."]='“". str_replace("
","",$pl_row[1])."”-------<span class=".$syh."yuanc".$syh."><a href=".$syh."book.php?id=".$pl_row[2].$syh.">".$pl_row[0]."</a><span class=".$syh."hf".$syh."><a href=".$syh."hf_pl.php?hf_name=".$pl_row[0]."&wzid=".$wzid."&hfid=".$pl_row[2].$syh." target=".$syh."_blank".$syh."><<<回复</a></span></span>'; ";		
		     $i++;
	    }	
?>		
		function paiban_pl() {
				s=$(window).height()*$(window).width()*0.5;
				n=Math.ceil(s/700);	
				if (str.match('_img_')) {
					var str2=str.replace(/_img_/, "");
					c='<a target="_blank"  href="../img.php?v=pic/'+str2+'"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../pic/'+str2+')"/></a>';
				} else{
						c=str.slice(0,n);
				}
				pl_form='<?php if ($session_id) {echo '<form action="../ht/pinglun_insert.php" method="get"  target="_self" ><textarea name="content" wrap="physical" class="limited" id="content" style="background:none;width:100%;height:50%;text-align:center;resize: vertical;overflow:auto;font-size:12px;border:1px solid #aaa" type="text"></textarea><span style="font-size:0.8em;color:#aaa" class="charsLeft">200</span><input type="hidden" name="maxlength" value="200" /><input name="wzid" type="hidden" value="'.$wzid.'" /><input id="hfid" name="hfid" type="hidden" value="'.$wz_row[8].'" /><br><button>评论</button></form>';}else {$dyh="'";echo '<span class="yuanc"><a href="code.php?url='.$dyh.'+window.location.href+'.$dyh.'">请登录!</a></span>';}  ?>';
				if (str.match('_img_')) {
					dian='';
				} else {
					dian='.....';
				}
				if (!dl) {
					zl11='<span class="yuanc"><a class="log" >转藏('+zlc+')</a></span>' ;
				} else {
					zl11='<span class="zl"><a action-data="<?php echo $wzid; ?>&wzid=<?php echo $wzid; ?>" href="###" >转藏('+zlc+')</a></span>';
				}
				zl=dian+'<span class="yuanc">('+yc+')</span>'+'<div class="eva-zl">'+zl11+'&nbsp;<a href="pl.php?wzid=<?php echo $wzid; ?>" >评论('+plc+')</a>&nbsp;<span class="gong"><a action-data="<?php echo $wzid; ?>" href="###" >共鸣('+gm+')+1</a></span></div>';
				$(".fengdi").before('<div></div><div class="eva-wz" style="text-align:center"><h1>'+addtime+'</h1><p>'+c+zl+'</p>'+pl_form+'</div>');
				n1=Math.ceil(s/40000);
				ye=Math.ceil(pln.length/n1);
				if (!pln[0]) { $(".fengdi").before('<div></div><div style="text-align:center">还没有评论呢。。。。。。。。。</div>');}
				for (i=0;i<ye;i++){	
				   if (i==ye-1 ){ 
						bu='<div style="width:100%;text-align:center"><span class="yuanc" ><a href="pl.php?wzid=<?php echo $wzid.'&bu='.($bu1-1); ?>" >>>>>>更多>>>>></a></span><div>';
				  } else{ 
						bu='';
				  }
				   $(".fengdi").before('<div></div><div style="display:table;width:100%;height:70%;_position:relative;overflow:hidden; "><div style="vertical-align:middle;display:table-cell;_position:absolute;_top:50%;"><div class="pl'+i+' pl" style="_position:relative; _top:-50%;"></div>'+bu+'</div></div>');	
				   for (i1=i*n1;i1<n1*(i+1);i1++){	
						  pl=pln[i1];
						  if (pl == null) {break;}
						  $(".pl"+i).append('<p>'+pl+'</p>');
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
						startingPage:       5,
						hash:true
				});	
				$(".b-wrap-right").prepend('<h3 class="eva-top"><a href="book.php?id=<?php echo $wz_row[8]; ?>"><?php echo $wz_row[0]; ?></a></h3>');	
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
				$(".eva-wz img").css("max-height",$(window).height()*0.3+"px"); 
				if (!dl) {
					$(".hf").remove();
				} 	 
		}			
aaaaaaaa=paiban_pl();
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div id="eva" >
<?php require('muban/pl_bottom.php');	?>
</div>
</body>
</html>