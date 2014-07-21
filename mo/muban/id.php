<?php
require_once('../ht/conn.php');
$time=date("Y-m-d");
$jrdy=mysql_query("select count(*) from wenzhang where date(addtime) ='$time' and userid in (select bdy_userid from dingyue where userid =$session_id)");
@$jrdy_row=mysql_fetch_row($jrdy);
$jrpl=mysql_query("select count(*) from pinglun where date(addtime) ='$time' and hf_userid =$session_id ");
@$jrpl_row=mysql_fetch_row($jrpl);
?>
<div style="background-color: #7e8282;;z-index: 9999999;width: 20%;left:2%;top:2%;position:absolute;text-align: center;height:30px;"><a class="go_i_id"><img style= "margin-top:5px" src="../ui/ui_pic/logo_m.png"><?php if (!$session_id) {echo '';} else { if ($jrdy_row[0]+$jrpl_row[0]==0){echo "";} else {echo '<span style="color:white">'.($jrdy_row[0]+$jrpl_row[0]).'</span>';}}?></a></div>