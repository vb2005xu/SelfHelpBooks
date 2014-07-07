bu=''+Math.ceil(bu1[i1]/15)+'';	
function transfer()
   {
  var danwei=Array("","十","百","千","万","十","百","千","亿");
  var l=bu.length;
  var a=new Array(l);
  var b=new Array(l);
  var result="";
        for(var i=0;i<l;i++)
  {
     a[i]=bu.substr(i,1);
     b[i]=getchinese(a[i]);
     result+=b[i]+danwei[l-i-1];
  }
  bu=result;
 }
function getchinese(p)
{
 var bu=p;
 if(bu=="0")
     return "一";
    else if(bu=="1")
     return "一";
 else if(bu=="2")
     return "二";
 else if(bu=="3")
     return "三";
 else if(bu=="4")
     return "四";
 else if(bu=="5")
     return "五";
 else if(bu=="6")
  return "六";
 else if(bu=="7")
     return "七";
 else if(bu=="8")
     return "八";
 else if(bu=="9")
     return "九";
}
cccc=transfer();	