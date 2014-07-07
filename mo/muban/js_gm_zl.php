$(".gong a" ).click(function(){
$(this).replaceWith('已共鸣');
$.get('../ht/gongming.php?gongming_id='+$(this).attr("action-data"));
exit;
});	
$(".zl a" ).click(function(){
$(this).replaceWith('已转录');
$.get('../ht/zl.php?zl_wzid='+$(this).attr("action-data"));
exit;
});
$(".go_i_id").attr({ href: "i_id.php?url="+window.location.href});
$(".log").attr({ href: "../code.php?url=<?php echo $url;?>"});
$(".logout").attr({ href: "../ht/logout.php?url="+window.location.href});
$(".eva-wz img").css("max-height",$(window).height()*0.4+"px");
$(".cover-img img").css("max-height",$(window).height()*0.5+"px");  
$(".b-counter:odd").before('<span class="yuanc" style="position:absolute;left:3%;bottom:3%"><?php require_once('../ht/conn.php');$sql=mysql_query("SELECT content FROM `ad` order by rand() limit 1");$sql1=mysql_fetch_row($sql);echo $sql1[0];?></span>');



