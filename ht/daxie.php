<meta charset="utf-8" /><?php
//chinese_money.PHP
//Changing Arab Money Num to Chinese Money Num
/*
Functions List:
Chinese_Money_Max()
小数点前
此函数可以单独拿出用于将阿拉伯数字转为中文数字(大小写可选,默认为大写)
仅限整数(正负皆可)
Chinese_Money_Min()
处理小数点后
Chinese_Money()
by www.jbxue.com
*/
function Chinese_Money_Max($i,$s=0){
$c_digIT_min = array("零","十","百","千","万","亿","兆");
$c_num_min = array("一","一","二","三","四","五","六","七","八","九","十");
$c_digIT_max = array("零","拾","佰","仟","万","亿","兆");
$c_num_max = array("一","壹","贰","叁","肆","伍","陆","柒","捌","玖","拾");
if($s==1){
$c_digIT = $c_digIT_max;
$c_num = $c_num_max;
}else{
$c_digIT = $c_digIT_min;
$c_num = $c_num_min;
}
if($i<0)
return "负".Chinese_Money_Max(-$i);
//return "-".Chinese_Money_Max(-$i);
if ($i < 11)
return $c_num[$i];
if ($i < 20)
return $c_num[1].$c_digIT[1] . $c_num[$i - 10];
if ($i < 100) {
if ($i % 10)
return $c_num[$i / 10] . $c_digIT[1] . $c_num[$i % 10];
else
return $c_num[$i / 10] . $c_digIT[1];
}
if ($i < 1000) {
if ($i % 100 == 0)
return $c_num[$i / 100] . $c_digIT[2];
else if ($i % 100 < 10)
return $c_num[$i / 100] . $c_digIT[2] . $c_num[0] . Chinese_Money_Max($i % 100);
else if ($i % 100 < 10)
return $c_num[$i / 100] . $c_digIT[2] . $c_num[1] . Chinese_Money_Max($i % 100);
else
return $c_num[$i / 100] . $c_digIT[2] . Chinese_Money_Max($i % 100);
}
if ($i < 10000) {
if ($i % 1000 == 0)
return $c_num[$i / 1000] . $c_digIT[3];
else if ($i % 1000 < 100)
return $c_num[$i / 1000] . $c_digIT[3] . $c_num[0] . Chinese_Money_Max($i % 1000);
else
return $c_num[$i / 1000] . $c_digIT[3] . Chinese_Money_Max($i % 1000);
}
if ($i < 100000000) {
if ($i % 10000 == 0)
return Chinese_Money_Max($i / 10000) . $c_digIT[4];
else if ($i % 10000 < 1000)
return Chinese_Money_Max($i / 10000) . $c_digIT[4] . $c_num[0] . Chinese_Money_Max($i % 10000);
else
return Chinese_Money_Max($i / 10000) . $c_digIT[4] . Chinese_Money_Max($i % 10000);
}
if ($i < 1000000000000) {
if ($i % 100000000 == 0)
return Chinese_Money_Max($i / 100000000) . $c_digIT[5];
else if ($i % 100000000 < 1000000)
return Chinese_Money_Max($i / 100000000) . $c_digIT[5] . $c_num[0] . Chinese_Money_Max($i % 100000000);
else
return Chinese_Money_Max($i / 100000000) . $c_digIT[5] . Chinese_Money_Max($i % 100000000);
}
if ($i % 1000000000000 == 0)
return Chinese_Money_Max($i / 1000000000000) . $c_digIT[6];
else if ($i % 1000000000000 < 100000000)
return Chinese_Money_Max($i / 1000000000000) . $c_digIT[6] . $c_num[0] . Chinese_Money_Max($i % 1000000000000);
else
return Chinese_Money_Max($i / 1000000000000) . $c_digIT[6] . Chinese_Money_Max($i % 1000000000000);
}
function Chinese_Money_Min($a){
$c_num = array("零","一","二","三","四","五","六","七","八","九","十");
if($a<10)
return $c_num[0] . "角" . $c_num[$a] . "分";
else if($a%10 == 0)
return $c_num[$a/10] . "角" . $c_num[0] . "分";
else
return $c_num[floor($a/10)] . "角" . $c_num[$a%10] ."分";
}
/*小数点后两位*/
function Chinese_Num_Min($a){
$c_num = array("零","一","二","三","四","五","六","七","八","九","十");
if($a<10)
return $c_num[0] . $c_num[$a] ;
else if($a%10 == 0)
return $c_num[$a/10] . $c_num[0] ;
else
return $c_num[floor($a/10)] . $c_num[$a%10];
}
function Chinese_Money($i){
$j=Floor($i);
$x=($i-$j)*100;
//return $x;
//return Chinese_Money_Max($j)."元".Chinese_Money_Min($x)."整";
return Chinese_Money_Max($j,'0')."点".Chinese_Num_Min($x);
}

?>

