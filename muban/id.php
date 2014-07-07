<div id="custom-menu" class="b-menu">
<div class="menu">
<?php require_once('ht/conn.php');$time=date("Y-m-d");$jrdy=mysql_query("select count(*) from wenzhang where date(addtime) ='$time' and userid in (select bdy_userid from dingyue where userid =$session_id)");@$jrdy_row=mysql_fetch_row($jrdy);$jrpl=mysql_query("select count(*) from pinglun where date(addtime) ='$time' and hf_userid =$session_id ");@$jrpl_row=mysql_fetch_row($jrpl);?>
<span class="eva-menu1" ><img src="ui/ui_pic/logo.png"><?php if (!$session_id) {echo '';} else { if ($jrdy_row[0]+$jrpl_row[0]==0){echo "";} else {echo ($jrdy_row[0]+$jrpl_row[0]);}}?></span>
<ul id="eva-menu2"><?php if (!$session_id) {echo '<li><a class="log">登陆</a></li>';} else {echo '<li><a href="xie.php">写</a></li><li><a href="mybook.php">我的书册</a></li><li><a href="i.php">今日订阅('.$jrdy_row[0].')</a></li><li><a href="i_pl.php">今日评论('.$jrpl_row[0].')</a></li>';}?><?php if (!$session_id) {echo '';} else {echo '<li><a class="logout">退出</a></li>';}?><li><a style="border-top:1px solid #E9EADF" href="index.php">今日目录</a></li><li><a  href="s.php">搜索</a></li><li><a href="shuffle.php">摇随机</a></li><li><a href="us.html" target="_blank">建议，联系</a></li><li><a href="mo/index.php">手机版</a></li>
</ul>
</div>
</div>