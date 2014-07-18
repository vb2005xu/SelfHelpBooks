<?php
require_once('muban/head.php');
require_once('../ht/conn.php');
$wzid=mysql_real_escape_string ($_GET['wzid']);
$result1 = mysql_query("select content from wenzhang where wzid=$wzid"); 
$row = @mysql_fetch_row($result1);
?>
</head>
<body>
<?php require_once('muban/id.php');	?> 
<div id="eva" style="position:absolute;left:4%;top:1%;width:92%;height:98%;z-index:8;">
  <div style="width:100%;height:100%;float:left;background:white;">
      <div style="top:0;text-align:center;width:100%;">
          <h1><?php echo date("Y-m-d");?></h1>
      </div>
      <div style="width:80%;margin-left:auto;margin-right:auto;text-align:center;" >
          <form action="../ht/xiugai_wz.php" method="post"  target="_self" ><textarea name="content" wrap="physical" style="background:none;width:100%;height:300px;text-align:center;resize: vertical;overflow:auto;border:1px solid #aaa" ><?php echo $row[0]?></textarea>
          <input name="wzid" type="hidden" value="<?php echo $wzid?>" /><button>确认修改</button>
          </form>
      </div><!--content-->
  </div><!--left-->
</div>
</body>
</html>