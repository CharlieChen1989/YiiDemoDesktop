document.write ('<a href="http://www.51.la/?4473358" target="_blank"><img alt="&#x35;&#x31;&#x2E;&#x6C;&#x61;&#x20;&#x4E13;&#x4E1A;&#x3001;&#x514D;&#x8D39;&#x3001;&#x5F3A;&#x5065;&#x7684;&#x8BBF;&#x95EE;&#x7EDF;&#x8BA1;" src="http://icon.ajiang.net/icon_0.gif" style="border:none" /></a>\n');
var a3358tf="51la";
var a3358pu="";
var a3358pf="51la";
var a3358su=window.location;
var a3358sf=document.referrer;
var a3358of="";
var a3358op="";
var a3358ops=1;
var a3358ot=1;
var a3358d=new Date();
var a3358color="";
if (navigator.appName=="Netscape"){
    a3358color=screen.pixelDepth;
} else {
    a3358color=screen.colorDepth;
}
try{
    a3358tf=top.document.referrer;
}catch(e){}
try{
    a3358pu =window.parent.location;
}catch(e){}
try{
    a3358pf=window.parent.document.referrer;
}catch(e){}
try{
    a3358ops=document.cookie.match(new RegExp("(^| )AJSTAT_ok_pages=([^;]*)(;|$)"));
    a3358ops=(a3358ops==null)?1: (parseInt(unescape((a3358ops)[2]))+1);
    var a3358oe =new Date();
    a3358oe.setTime(a3358oe.getTime()+60*60*1000);
    document.cookie="AJSTAT_ok_pages="+a3358ops+ ";path=/;expires="+a3358oe.toGMTString();
    a3358ot=document.cookie.match(new RegExp("(^| )AJSTAT_ok_times=([^;]*)(;|$)"));
    if(a3358ot==null){
        a3358ot=1;
    }else{
        a3358ot=parseInt(unescape((a3358ot)[2]));
        a3358ot=(a3358ops==1)?(a3358ot+1):(a3358ot);
    }
    a3358oe.setTime(a3358oe.getTime()+365*24*60*60*1000);
    document.cookie="AJSTAT_ok_times="+a3358ot+";path=/;expires="+a3358oe.toGMTString();
}catch(e){}
try{
    if(document.cookie==""){
        a3358ops=-1;
        a3358ot=-1;
    }
}catch(e){}
a3358of=a3358sf;
if(a3358pf!=="51la"){
    a3358of=a3358pf;
}
if(a3358tf!=="51la"){
    a3358of=a3358tf;
}
a3358op=a3358pu;
try{
    lainframe
    }catch(e){
    a3358op=a3358su;
}
document.write('<img style="width:0px;height:0px" src="http://web1.51.la:82/go.asp?svid=1&id=4473358&tpages='+a3358ops+'&ttimes='+a3358ot+'&tzone='+(0-a3358d.getTimezoneOffset()/60)+'&tcolor='+a3358color+'&sSize='+screen.width+','+screen.height+'&referrer='+escape(a3358of)+'&vpage='+escape(a3358op)+'" />');