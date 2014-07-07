<?php 
require_once('muban/head.php');	
require_once('../ht/conn.php');	
?>	
<script type="text/javascript">
$(function () {
var str1=new Array();
var fm_name1=new Array();
var fm_pic1=new Array();
var name1=new Array();
var dy_count1=new Array();
var userid1=new Array();
var addtime1=new Array();
var bu1=new Array();
<?php 
$time=date("Y-m-d");	
$wenzhang=mysql_query("SELECT (select fm_name from user as a1 where a1.userid=a2.userid)as fm_name,(select fm_pic from user as a3 where a3.userid=a2.userid)as fm_pic,(select name from user as a4 where a4.userid=a2.userid)as name,(select dy_count from user as a5 where a5.userid=a2.userid)as dy_count,content,userid,date(addtime),(select count(*) from wenzhang as a1 where a1.userid=a2.userid and shenfen=0)as bu ,(select shenfen from user as a1 where a1.userid=a2.userid)as user_shenfen FROM  `wenzhang` as a2 where `shenfen`=0 and date(addtime) ='$time' ORDER BY  a2.`zl_count` DESC  LIMIT 0 , 15 ");	
	$i=0;
	while($row = mysql_fetch_row($wenzhang))
		{
		echo "str1[".$i."]='".str_replace("
","", $row[4])."'; ";			
		if ($row[8]==0){echo "fm_name1[".$i."]='". $row[0]."'; ";	}else {echo "fm_name1[".$i."]='". $row[0]."(该用户已注销)'; ";}			
		echo "fm_pic1[".$i."]='".$row[1]."'; " ;	
		echo "name1[".$i."]='".$row[2]."'; " ;
		echo "dy_count1[".$i."]='".$row[3]."'; " ;		
		echo "userid1[".$i."]='".$row[5]."'; " ;
		echo "addtime1[".$i."]='".$row[6]."'; " ;
		echo "bu1[".$i."]='".$row[7]."'; " ;
		$i++;
		}		 
		?>			
function paiban_p() {
s=$(window).height()*$(window).width()*0.5;
n=Math.ceil(s/530);	
for (i1=0; i1<str1.length; i1++)
{
<?php require('muban/chinese_bu.php');	?>	
		userid=userid1[i1];
		str=str1[i1]; 
		fm_name=fm_name1[i1];
		fm_pic=fm_pic1[i1];
		name=name1[i1];
		dy_count=dy_count1[i1];	
		addtime='<h3 style="text-align:center;font-size:16px">'+addtime1[i1]+'</h3>';
		if (str.match('_img_')) {zl='<div class="eva-zl"><span style="color:black">(点击图片看大图)</span><br><br><span style="color:black">热门相片来自</span><span class="yuanc"><a href="book.php?id='+userid+'">《'+fm_name+'》</a></span></div>';var str2=str.replace(/_img_/, "");c=addtime+'<p><a target="_blank" href="../img.php?v=pic/'+str2+'"><img src="../ui/ui_pic/transparent.gif" style="background-image:url(../pic/'+str2+')"/></a>'+zl+'</p>';} else {zl='<div class="eva-zl"><span class="yuanc"><a href="book.php?id='+userid+'">翻阅《'+fm_name+'》</a></span></div>';	c='<div class="eva-book"><div style="width:90%;margin:5%;"><a href="book.php?id='+userid+'"><img src="../ui/ui_pic/transparent.gif"  style="background-image:url(../fm_pic/'+fm_pic+');" /></a></div><div style="color:#000"><h3><a style="cursor:default">&nbsp;&nbsp;</a></h3><h3><a href="book.php?id='+userid+'">'+fm_name+'('+bu+')</a></h3>作者:'+name+'<br>订阅数:'+dy_count+'</div></div>'+addtime+'<p>“'+str.slice(0,n)+'....”'+zl+'</p>';}
		 $(".fengdi").before('<div></div><div class="eva-wz">'+c+'</div>');
		
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
$(".b-wrap-right").prepend('<h3 class="eva-top"><a href="index.php">自助书，今日目录</a></h3>');	
<?php require('muban/js_gm_zl.php');	?>
	
}
aaaaaaaa=paiban_p();

			
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div id="eva" >
<?php require('muban/index_bottom.php');	?>
</div> 
</body>
</html>