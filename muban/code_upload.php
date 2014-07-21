var email1=$("#email").val();
var url1=$("#url").val();
if (!email1) {
	$("#spinfo").text("请输入密码。。。");
    setTimeout('$("#spinfo").text("")',2000);
}
else{
	$("#spinfo").text("登陆中。。。");
    $.post("ht/code.php", { email:email1, url:url1} ,function(data){
        if(data==0){
            $("#spinfo").text("亲，您的密码链接，已经发送到您的邮箱了，现在正在跳转到您的qq邮箱中。。。");
            setTimeout('window.location.href="http://mail.qq.com"',2000);
        }
        else{
            $("#spinfo").text("亲，您今天已经更改过密码了，若想更改密码的话，明天再来吧!");
            setTimeout('$("#spinfo").text("")',2000);
        }
    });
}