$(".menu").hover(
  function () {
    $("#eva-menu2").slideDown(400); 
  },
  function () {
    $("#eva-menu2").stop().slideUp(400);
  }
); 						
$(".gong a" ).click(function(){
$(this).replaceWith('已共鸣');
$.get('ht/gongming.php?gongming_id='+$(this).attr("action-data"));
exit;
});	
$(".zl a" ).click(function(){
$(this).replaceWith('已转录');
$.get('ht/zl.php?zl_wzid='+$(this).attr("action-data"));
exit;
});
$(".log").attr({ href: "code.php?url="+window.location.href});
$(".logout").attr({ href: "ht/logout.php?url="+window.location.href});
$(".eva-wz img").css("max-height",$(window).height()*0.5+"px");
$(".cover-img img").css("max-height",$(window).height()*0.6+"px"); 
$(".eva-top:odd").before('<span class="yuanc" style="position:absolute"><?php require_once('ht/conn.php');$sql=mysql_query("SELECT content FROM `ad` order by rand() limit 1");$sql1=mysql_fetch_row($sql);echo $sql1[0];?></span>');
  



