<?php 
		require_once('muban/head.php');
		require_once('../ht/conn.php');
		require_once('../ht/daxie.php');
		$id=$session_id;
		$bu1=mysql_real_escape_string ($_GET['bu']);
		$user=mysql_query("SELECT `fm_name`,`fm_pic`,`name`,`dy_count` FROM `user` where `userid`= $id and `shenfen`=0 ");	
		$user_row = @mysql_fetch_row($user);
		if ($user_row[0]==null) {
			$dyh="'";
			die('<div style="top:45%;left:45%;position:absolute">请登录<script language="javascript">setTimeout('.$dyh.'window.location.href="index.php"'.$dyh.',1000);</script></div>');
		}
		$book_bu=mysql_query("SELECT COUNT( * ) FROM wenzhang WHERE userid =$id and shenfen=0");
		$book_bu_row = mysql_fetch_row($book_bu);	
		$bu=ceil($book_bu_row[0]/15);
		if (!$bu1){$bu1=$bu;}
		$real_bu=range(1,$bu);
		$real_bu1=array_slice($real_bu,-$bu1,1);
		$bu2=($real_bu1[0]-1)*15;
		$bu3=($real_bu1[0])*15;
?>	
<script type="text/javascript" src="../ui/mo_jquery.qrcode.min.js"></script>	
<script type="text/javascript">
	    $(function () {
		var str1=new Array();
		var zlc1=new Array();
		var plc1=new Array();
		var yc1=new Array();
		var gm1=new Array();
		var wzid1=new Array();
		var zl_wzid1=new Array();
		var addtime1=new Array();
<?php 	
		$wenzhang=mysql_query("SELECT (SELECT (SELECT fm_name FROM user AS a4 WHERE a4.userid = $id)) AS fm_name, (SELECT content FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_content, (SELECT (SELECT fm_name FROM user AS a3 WHERE a3.userid = a2.userid) AS src_fm_name1 FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid ) AS src_fm_name, pl_count, zl_count,gm_count,(SELECT shenfen FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_shenfen,wzid,(SELECT userid FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_userid ,(SELECT wzid FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_wzid ,date(addtime) FROM wenzhang AS a1 WHERE userid =$id and `shenfen`=0 ORDER BY addtime DESC LIMIT $bu2 , $bu3 ");
		$i=0;
	while($row = mysql_fetch_row($wenzhang)){
		if ($row[6]==1) {echo "str1[".$i."]='对不起，此文章已被原作者删除。。。'; " ;
		} else {
			echo "str1[".$i."]='".str_replace("
","",$row[1])."'; " ;
		}	
		echo "zlc1[".$i."]='".$row[4]."'; " ;	
		echo "plc1[".$i."]='".$row[3]."'; " ;
		echo "gm1[".$i."]='".$row[5]."'; " ;
		echo "wzid1[".$i."]='".$row[7]."'; " ;
		echo "zl_wzid1[".$i."]='".$row[9]."'; " ;
		if ( $row[0]==$row[2]){
			echo "yc1[".$i."]='原创'; "; 
		} else {
			echo "yc1[".$i."]='<a href=book.php?id=".$row[8]." >转自《". $row[2]."》</a>'; ";
		}	
		echo "addtime1[".$i."]='".$row[10]."'; " ;
		$i++;
	}		 
		?>
function paiban_i() {
		s=$(window).height()*$(window).width()*0.5;
		n=Math.ceil(s/350);		
		if (str1.length==0*1){ 
			$(".fengdi").before('<div class="eva-wz"><p>作者还没有写文章呢.....</p></div>');
		}else{		
       		for (i1=0; i1<str1.length; i1++){		
				  wzid=wzid1[i1];
				  yc=yc1[i1];
				  str=str1[i1]; 
				  if (str.match('_img_') || yc != '原创'){
					  xiugai='';
				  } else {
					  xiugai='<span class="xiugai"><a href="xiugai.php?wzid='+wzid+'" >修改</a></span>';
				  }
				  addtime='<h1>'+addtime1[i1]+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="delete"><a action-data="'+wzid+'">删除</a></span>'+xiugai+'</h1>';	
				  zl_wzid=zl_wzid1[i1];	
				  zlc='<span class="zl"><a action-data="'+zl_wzid+'&wzid='+wzid+'" href="###" >转藏('+zlc1[i1]+')</a></span>';
				  plc='<a href="pl.php?wzid='+wzid+'" >评论('+plc1[i1]+')</a>';
				  gm='<span class="gong"><a action-data="'+wzid+'" href="###" >共鸣('+gm1[i1]+')+1</a></span>';
				  ye=Math.ceil(str.length/n)+1;				 
				  for (i=1;i<ye;i++){
			   if (str.match('_img_')) {
				   var str2=str.replace(/_img_/, "");c='<a target="_blank" href="../img.php?v=pic/'+str2+'"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../pic/'+str2+')"/></a>';var djtp='<span style="color:black">(点击图片看大图)</span><br>';
			   } else{
				   c=str.slice(n*(i-1),n*i);var djtp='';
			   }
			   if (i!==1){ addtime=''};
			   if (i==ye-1){ 
					  zl=djtp+'<span class="yuanc">('+yc+')</span>'+'<div class="eva-zl">'+zlc+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+plc+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+gm+'</div>';
			   } else{ 
					  zl='';
			   }
			   $(".fengdi").before('<div></div><div class="eva-wz">'+addtime+'<p>'+c+zl+'</p></div>');
		 }	
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
		startingPage:         1,
		hash:true
});	
		$(".b-wrap-right").prepend('<h3 class="eva-top"><?php echo '<a href="book.php?id='.$id.'">'.$user_row[0].'</a>' ; ?></h3>');
		jQuery('#output').qrcode("www.zizhushu.com/mo/book.php?id=<?php echo $session_id;?>");
		<?php require('muban/js_gm_zl.php');	?>	
}	
aaaaaaaa=paiban_i();		 
	$(".delete a" ).click(function(){
		  $(this).replaceWith('<span class="delete">已删除</span>');
		  $.get('../ht/delete_wz.php?wzid='+$(this).attr("action-data"));
		  exit;
	});	
});
</script>

</head>
<body>
<?php require_once('muban/id.php');	?> 
<div id="eva">
<?php require('muban/mybook_bottom.php');	?>
</div>
</body>
</html>