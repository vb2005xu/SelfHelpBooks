<div id="mybook"><div class="cover"><div class="cover-img"><a target="_blank" href="img.php?v=fm_pic/<?php echo $user_row[1]; ?>"><img src="ui/ui_pic/transparent.gif" style="background-image:url(fm_pic/<?php echo $user_row[1]; ?>);" /></a><span class="yuanc"><a  href="fengmian.php">修改封面^^^</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a target="_blank" href="code.php">*密码修改*</a></span><br /><?php $dyh="'";echo '<div style="display: inline-block;font-size:20px;padding:10px 0 10px"><span style="font-weight:bolder;">'.$user_row[0].'&nbsp;&nbsp;第</span><button id="select" style="font-size:16px;font-weight:bolder;">'.Chinese_Money_Max($bu1).'</button></div><ul style="font-size:12px;height: 100px;overflow: auto;width: 100px;">';for ($i=0;$i<$bu;$i++) { echo '<li><a href="mybook.php?bu='.($bu-$i).'">'.Chinese_Money_Max($bu-$i).'</a></li>';} echo '</ul><span style="font-weight:bolder;font-size:20px">部</span>';?><h3>电脑端地址： www.zizhshu.com/book.php?id=<?php echo $session_id;?></h3><h3>移动端地址：  扫描左上角二维码</h3><div id="output" style="top:0;position:absolute"></div><h3 class="eva-zl" ><?php echo '订阅数：'.$user_row[3];?></h3></div></div><div class="fengdi"><div class="cover-img"><img src="ui/ui_pic/transparent.gif" style="background-image:url(w.png);" /><h1>封底</h1></div></div></div>