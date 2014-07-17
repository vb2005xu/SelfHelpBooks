<?php
		require_once('muban/head.php');	
		if (!$session_id) {echo '<script language="javascript"> window.location.href="index.php";</script>';exit;}
		else {		
		require_once('../ht/conn.php');		
		$user=mysql_query("SELECT `fm_pic`,`name`,`dy_count` FROM `user` where `userid`= $session_id and `shenfen`=0 ");	
		$user_row = @mysql_fetch_row($user);
		$bu1=mysql_real_escape_string ($_GET['bu']);
		$book_bu=mysql_query("SELECT COUNT( * ) FROM wenzhang WHERE userid IN (SELECT bdy_userid FROM dingyue WHERE userid =$session_id) and shenfen = 0");
		$book_bu_row = mysql_fetch_row($book_bu);	
		$bu=ceil($book_bu_row[0]/15);
		if (!$bu1){$bu1=$bu;}
		$real_bu=range(1,$bu);
		$real_bu1=array_slice($real_bu,-$bu1,1);
		$bu2=($real_bu1[0]-1)*15;
		$bu3=($real_bu1[0])*15;		
		if ($user_row[1]==null) {
   		die('您访问的用户不存在'.'<script language="javascript"> window.location.href="index.php";</script>');}
		}
?>	 		
<script type="text/javascript">
	     $(function () {
		var str1=new Array();
		var zlc1=new Array();
		var plc1=new Array();
		var gm1=new Array();
		var fm_name1=new Array();
		var yc1=new Array();		
		var wzid1=new Array();
		var userid1=new Array();
		var addtime1=new Array();
		<?php 
		$syh='"';	
		$wenzhang=mysql_query("SELECT (SELECT fm_name FROM user AS a2 WHERE a1.userid = a2.userid ) AS fm_name ,(SELECT (SELECT fm_name FROM user AS a3 WHERE a3.userid = a2.userid) AS src_fm_name1 FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid ) AS src_fm_name,(select dy_count from user as a5 where a5.userid=a1.userid)as dy_count,(SELECT content FROM wenzhang AS a2 WHERE a1.zl_wzid = a2.wzid ) AS src_content ,pl_count, zl_count, gm_count,wzid,userid,date(addtime),(SELECT shenfen FROM user AS a2 WHERE a1.userid = a2.userid ) AS user_shenfen,(SELECT userid FROM wenzhang AS a2 WHERE a2.wzid = a1.zl_wzid) AS src_userid  FROM wenzhang AS a1 WHERE userid IN (SELECT bdy_userid FROM dingyue WHERE userid =$session_id) and shenfen = 0 ORDER BY addtime DESC limit $bu2 , $bu3 ");
	$i=0;
	while($row = mysql_fetch_row($wenzhang))
		{
echo "str1[".$i."]='".str_replace("
","", $row[3])."'; ";		
		echo "zlc1[".$i."]='".$row[5]."'; " ;	
		echo "plc1[".$i."]='".$row[4]."'; " ;
		echo "gm1[".$i."]='".$row[6]."'; " ;
		if ($row[10]==0){
		if ( $row[0]==$row[1]){echo "yc1[".$i."]='<span style=".$syh."color:black".$syh.">来自</span><a href=book.php?id=".$row[8]." >《". $row[0]."》</a>'; "; } else {echo "yc1[".$i."]='<a href=book.php?id=".$row[8]." >《". $row[0]."》</a><span style=".$syh."color:black".$syh.">转自</span><a href=book.php?id=".$row[11]." >《". $row[1]."》</a>'; ";};	
		}else {echo "yc1[".$i."]='". $row[0]."(该用户已注销)'; ";}		
		echo "wzid1[".$i."]='".$row[7]."'; " ;
		echo "userid1[".$i."]='".$row[8]."'; " ;
		echo "addtime1[".$i."]='".$row[9]."'; " ;
		$i++;
		}		 
		?>			
function paiban_i() {
s=$(window).height()*$(window).width()*0.5;
n=Math.ceil(s/340);	
 if (str1.length==0) { $(".fengdi").before('<div></div><div style="text-align:center"><p>还没有订阅呢，快到别人的书的封面，点订阅吧</h3></p>');}	
	   else {					
       for (i1=0; i1<str1.length; i1++)
{	
if (i1==(str1.length-1) ){ bu2='<br><br><div style="width:100%;text-align:center"><span class="yuanc" ><a href="i.php?=<?php echo '&bu='.($bu1-1); ?>" >>>>>>更多>>>>></a></span><div>'} else{ bu2=''};			

		userid=userid1[i1];
		wzid=wzid1[i1];
		zl_wzid=wzid;
		str=str1[i1]; 
		zlc='<span class="zl"><a action-data="'+zl_wzid+'&wzid='+wzid+'" href="###" >转藏('+zlc1[i1]+')</a></span>';
		plc='<a href="pl.php?wzid='+wzid+'" >评论('+plc1[i1]+')</a>';	
		gm='<span class="gong"><a action-data="'+wzid+'" href="###" >共鸣('+gm1[i1]+')+1</a></span>';	
		fm_name=fm_name1[i1];
		addtime='<h1>'+addtime1[i1]+'</h1>';
		ye=Math.ceil(str.length/n)+1;				
		for (i=1;i<ye;i++)
		 {
		if (i!==1){ addtime=''};
        yc=yc1[i1];
		 if (i==ye-1){ zl='<br><span class="yuanc">'+yc+'</span>'+'<div class="eva-zl">'+zlc+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+plc+'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'+gm+'</div>';} else{ zl=''};
		if (str.match('_img_')) {var str2=str.replace(/_img_/, "");c1='<a target="_blank" href="../img.php?v=pic/'+str2+'"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../pic/'+str2+')"/></a>';c=addtime+'<p>'+c1+zl+'</p>';} else {c=addtime+'<p>'+str.slice(n*(i-1),n*i)+zl+'</p>';}
	 $(".fengdi").before('<div></div><div class="eva-wz">'+c+bu2+'</div>');
 			
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
		startingPage:         2,
		hash:true
});	
$(".b-wrap-right").prepend('<h3 class="eva-top dy_top"><a href="mydy.php">我订阅了谁？</a></h3>');	
<?php require('muban/js_gm_zl.php');	?>
	
 }	
aaaaaaaa=paiban_i();	

});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div id="eva">
<?php require('muban/i_bottom.php');	?>
</div>
</body>
</html>	