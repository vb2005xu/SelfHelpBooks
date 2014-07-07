<?php 	
function decodecookie($txt){
$key='13359141410';
$txt=urldecode(base64_decode($txt));
for($i=0;$i<strlen($txt);$i++){
 $txt[$i]=chr(ord($txt[$i])-$key);
}
return $txt;
}
$session_id = decodecookie($_COOKIE["zizhushu"]);
?>