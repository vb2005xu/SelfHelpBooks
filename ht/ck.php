<?php
$key='02982555565';
function encode($txt){
for($i=0;$i<strlen($txt);$i++){
 $txt[$i]=chr(ord($txt[$i])+$key);
 }
return $txt=base64_encode(urlencode($txt));
}
function decode($txt){
$txt=urldecode(base64_decode($txt));
for($i=0;$i<strlen($txt);$i++){
 $txt[$i]=chr(ord($txt[$i])-$key);
}
return $txt;
}
?>