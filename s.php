<?php
		require_once('muban/head.php');		
		require_once('ht/conn.php');
		$keyword = mysql_real_escape_string ($_GET['keyword']);
		$bu1=mysql_real_escape_string ($_GET['bu']);			
		$book_bu=mysql_query("SELECT COUNT( * ) FROM `user` WHERE `fm_name` like '%".$keyword."%' and shenfen=0;");	
		$book_bu_row = mysql_fetch_row($book_bu);	
		$bu=ceil($book_bu_row[0]/15);
		if (!$bu1 or $bu1>$bu){$bu1=$bu;}
		$real_bu=range(1,$bu);
		$real_bu1=array_slice($real_bu,-$bu1,1);
		$bu2=($real_bu1[0]-1)*15;
		$bu3=($real_bu1[0])*15;

			
?>
 		<script type="text/javascript">
	    $(function () {
		var fm_name1=new Array();
		var fm_pic1=new Array();
		var name1=new Array();
		var dy_count1=new Array();
		var userid1=new Array();
		var bu1=new Array();
		<?php 
		$i=0;
		$search=mysql_query("SELECT fm_name,name,fm_pic,dy_count,userid,( SELECT COUNT( * ) FROM wenzhang AS a1 WHERE a1.userid = a2.userid AND shenfen =0) AS bu FROM `user` as a2 WHERE `fm_name` like '%".$keyword."%' and shenfen=0 ORDER BY  a2.`dy_count` DESC limit $bu2 , $bu3;");
		while($s_row =mysql_fetch_row($search))
		{
		echo "fm_name1[".$i."]='". $s_row[0]."';";		
		echo "fm_pic1[".$i."]='".$s_row[2]."';" ;	
		echo "name1[".$i."]='".$s_row[1]."';" ;
		echo "dy_count1[".$i."]='".$s_row[3]."';" ;
		echo "userid1[".$i."]='".$s_row[4]."';" ;
		echo "bu1[".$i."]='".$s_row[5]."';" ;
		$i++;
		}		 
		?>

function paiban_p() {
if (fm_name1.length==0*1){$(".fengdi").before('<div class="eva-wz"><h3>木有结果诶。。。。。</h3></div>');}else {
for (i1=0; i1<fm_name1.length; i1++)
{	
if (i1==(fm_name1.length-1) ){ bu2='<br><br><div style="width:100%;text-align:center"><span class="yuanc" ><a href="s.php?keyword=<?php echo $keyword.'&bu='.($bu1-1); ?>" >>>>>>更多>>>>></a></span><div>'} else{ bu2=''};	
<?php require('muban/chinese_bu.php');	?>	
		userid=userid1[i1];	
		fm_name=fm_name1[i1];
		fm_pic=fm_pic1[i1];
		name=name1[i1];
		dy_count=dy_count1[i1];	
		c='<div class="eva-book-s"><div style="width:90%;margin:5%;"><a href="book.php?id='+userid+'"><img src="ui/ui_pic/transparent.gif"  style="background-image:url(fm_pic/'+fm_pic+');" /></a></div><div><h3><a style="cursor:default">&nbsp;&nbsp;</a></h3><h1><a href="book.php?id='+userid+'">'+fm_name+'('+bu+')</a></h1><h3>作者:'+name+'</h3><h3>订阅数:'+dy_count+'</h3></div></div>'+bu2;
		 $(".fengdi").before('<div class="eva-wz">'+c+'</div>');
 		
}
;}	
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
		startingPage:         2
});
$(".b-wrap-left").prepend('<h3 class="eva-top"><a href="index.php">自助书，网页app</a></h3>');	
$(".b-wrap-right").prepend('<h3 class="eva-top"><a href="shuffle.php">随机摇一摇</a></h3>');	
<?php require('muban/js_gm_zl.php');	?>	
}
aaaaaaaa=paiban_p();
$(window).resize(function(){
		$('#mybook').booklet("destroy");
 		$('#mybook').replaceWith('<?php require('muban/p_index_bottom.php');	?>');
bbbbbb=paiban_p();	
});//resize		 
 	
});
</script>
</head>
<body>
<?php require_once('muban/id.php');	?>
<div style=" text-align:center;position:absolute;top:3%;width:100%;height:5%;z-index:9;text-align:center"><form style="font-size:14px; font-weight: bold;" action="s.php" method="get"  target="_self" >封面名:&nbsp;<input name="keyword" type="text" style="width:200px;height:20px;font-size:12px;border:1px solid #aaa;padding:2px" value="<?php echo $keyword;?>"/>
<button>搜索</button></form></div>
<div id="eva" style="position:absolute;left:4%;top:10%;width:92%;height:85%;z-index:8;">
<?php require('muban/p_index_bottom.php');	?>
</div>
</body>
</html>	
