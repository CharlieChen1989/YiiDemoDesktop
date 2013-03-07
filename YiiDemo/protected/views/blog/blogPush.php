<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <FCK:meta http-equiv="Content-Type" content="text/html; charset=gb2312"  />
    <title>jQuery自定义右键菜单</title>
    <style type="text/css">
    body {
    font-size: 12px;
    margin: 0px;
    padding: 0px;
    }
    form,div,ul,li {
    margin: 0px;
    padding: 0px;
    list-style-type: none;
    overflow: hidden;
    }
    h1,h2,h3,h4,h5 {
    font-size: 12px;
    margin: 0px;
    padding: 0px;
    }
    a {
    text-decoration: none;
    }
    .layout {
    width: 993px;
    clear: both;
    margin-right: auto;
    margin-left: auto;
    border-top-width: 0px;
    border-right-width: 4px;
    border-bottom-width: 0px;
    border-left-width: 4px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #000000;
    border-right-color: #000000;
    border-bottom-color: #000000;
    border-left-color: #000000;
    overflow: hidden;
    }
    .layout2 {
    width: 942px;
    margin-right: auto;
    margin-left: auto;
    }
    .Content {
    background-color: #376285;
    }
    .contentBg {
    background-color: #173043;
    }
    div, ul, li {
    margin: 0px;
    padding: 0px;
    list-style-type: none;
    }
    body {
    background-color: #FFFFFF;
    font-size: 12px;
    margin: 0px;
    padding: 0px;
    }
    #TreeList {
    background-color: #FFFFFF;
    margin-top: 6px;
    margin-right: 9px;
    margin-bottom: 6px;
    margin-left: 9px;
    border: 1px solid #5d7b96;
    padding-bottom: 6px;
    padding-left: 6px;
    }
    #TreeList .mouseOver {
    background-color: #FAF3E2;
    }
    #TreeList .ParentNode {
    line-height: 21px;
    height: 21px;
    margin-top: 2px;
    clear: both;
    }
    #TreeList .ChildNode {
    background-image: url(/source/images/201207/tp714_Sys_ModuleIcos.png);
    background-position: 15px -58px;
    padding-left: 39px;
    line-height: 21px;
    background-repeat: no-repeat;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 1px;
    border-left-width: 0px;
    border-top-style: dashed;
    border-right-style: dashed;
    border-bottom-style: dashed;
    border-left-style: dashed;
    border-top-color: #aabdce;
    border-right-color: #aabdce;
    border-bottom-color: #aabdce;
    border-left-color: #aabdce;
    cursor: default;
    clear: both;
    height: 21px;
    color: #314f6a;
    }
    #TreeList .title {
    float: left;
    }
    #TreeList .input {
    font-size: 12px;
    line-height: 18px;
    color: #FFF;
    height: 16px;
    background-color: #3F6B8F;
    width: 120px;
    text-align: center;
    margin-top: 1px;
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #1F3547;
    border-right-color: #FFF;
    border-bottom-color: #FFF;
    border-left-color: #1F3547;
    float: left;
    }
    #TreeList .editBT {
    float: left;
    overflow: visible;
    }
    #TreeList .editBT .ok {
    background-image: url(/source/images/201207/tp714_Sys_ModuleIcos.png);
    background-repeat: no-repeat;
    background-position: 0px -89px;
    height: 13px;
    width: 12px;
    float: left;
    margin-left: 3px;
    padding: 0px;
    margin-top: 3px;
    cursor: pointer;
    }
    #TreeList .editBT .cannel {
    background-image: url(/source/images/201207/tp714_Sys_ModuleIcos.png);
    background-repeat: no-repeat;
    background-position: 0px -120px;
    float: left;
    height: 13px;
    width: 12px;
    margin-left: 3px;
    padding: 0px;
    margin-top: 3px;
    cursor: pointer;
    }
    #TreeList .editArea {
    float: right;
    color: #C3C3C3;
    cursor: pointer;
    margin-right: 6px;
    }
    #TreeList .editArea span {
    margin: 2px;
    }
    #TreeList .editArea .mouseOver {
    color: #BD4B00;
    border-top-width: 1px;
    border-right-width: 1px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #C9925A;
    border-right-color: #E6CFBB;
    border-bottom-color: #E6CFBB;
    border-left-color: #C9925A;
    background-color: #FFFFFF;
    margin: 0px;
    padding: 1px;
    }
    #TreeList .ParentNode .title {
    color: #314f6a;
    cursor: pointer;
    background-image: url(/source/images/201207/tp714_Sys_ModuleIcos.png);
    background-repeat: no-repeat;
    padding-left: 39px;
    }
    #TreeList .ParentNode.show .title {
    font-weight: bold;
    background-position: 3px -27px;
    }
    #TreeList .ParentNode.hidden .title {
    background-position: 3px 4px;
    }
    #TreeList .ParentNode .editArea {
    color: #999;
    }
    #TreeList .ParentNode.show {
    background-color: #d1dfeb;
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 1px;
    border-left-width: 1px;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-top-color: #5d7b96;
    border-right-color: #5d7b96;
    border-bottom-color: #5d7b96;
    border-left-color: #5d7b96;
    }
    #TreeList .ParentNode.hidden {
    border-top-width: 0px;
    border-right-width: 0px;
    border-bottom-width: 1px;
    border-left-width: 0px;
    border-top-style: dashed;
    border-right-style: dashed;
    border-bottom-style: dashed;
    border-left-style: dashed;
    border-top-color: #aabdce;
    border-right-color: #aabdce;
    border-bottom-color: #aabdce;
    border-left-color: #aabdce;
    }
    #TreeList .Row {
    clear: both;
    margin-left: 24px;
    background-image: url(/source/images/201207/tp714_Sys_ModuleIcos2.png);
    background-repeat: repeat-y;
    background-position: 7px 0px;
    }
    h1 {
    font-size: 12px;
    line-height: 24px;
    color: #FFF;
    background-color: #396384;
    text-align: center;
    margin: 0px;
    padding: 0px;
    }
    #OpLimits_Menu {
    position: absolute;
    width: 70px;
    cursor: default;
    filter: Alpha(Opacity=90);
    }
    #OpLimits_Menu ul {
    background-color: #d5effc;
    border: 1px solid #3e8dad;
    }
    #OpLimits_Menu ul li {
    line-height: 18px;
    color: #496D81;
    text-align: center;
    letter-spacing: 0.3em;
    height: 18px;
    cursor: pointer;
    }
    #OpLimits_Menu ul .onmouse {
    background-image: url(/source/images/201207/tp714_bt1.gif);
    background-repeat: repeat-x;
    color: #324A58;
    }
    </style>
    <script type="text/javascript" src="/js/jquery/jquery-1.7.2.min.js"></script>
    <script type="text/javascript">
var Mouse_X,Mouse_Y;
var TMenu_X0,TMenu_Y0;
var MousePostion;

$(document).ready(function(e) {
 var PrentNodeClass = 'ParentNode';//父节点的标识
 var ChildNodeClass = 'ChildNode';//没有下级子节点的标识
 var ChildrenListClass = 'Row';//子节点被包着的外层样式
 
 var TModuleNode,TChildNode,TModuleNodeName;
 TModuleNode = $('#TreeList .'+PrentNodeClass);//顶层节点
 TChildNode = $('.'+ChildNodeClass);
 TModuleNodeName = $('#TreeList .' + PrentNodeClass + ' .title');//顶层节点名称
 
 function TNode_MouseDown(e,Obj){
  if(e.which==3){
   if(Obj.hasClass(ChildNodeClass)){//没有子节点才需要有权限设置菜单
    MousePostion(e,1);
    with($('#OpLimits_Menu')){
     css('left',Mouse_X);
     css('top',Mouse_Y);
     css('display','block');
    }
   }
   }
 }
 
 //-------------禁用系统的右键功能-----------
 $(document).bind('contextmenu',function(e){ 
   return false; 
 }); 
 
 var LimitsMenu_Width,LimitsMenu_Height;
 LimitsMenu_Width = $('#OpLimits_Menu').width();
 LimitsMenu_Height = $('#OpLimits_Menu').height();
 
 var LimitsSetting_Width,LimitsSetting_Height;
 LimitsSetting_Width = $('#OpLimitsSetting').width();
 LimitsSetting_Height = $('#OpLimitsSetting').height();
 
 TChildNode.mousedown(function(e){
  TNode_MouseDown(e,$(this));
 });
 
 $(this).mousedown(function(e){
  if(Mouse_X && Mouse_Y){
    MousePostion(e,0);
    var IsInArea = Mouse_X>TMenu_X0 && Mouse_X<TMenu_X0+LimitsMenu_Width && Mouse_Y>TMenu_Y0 && Mouse_Y<TMenu_Y0+LimitsMenu_Height;
    if(e.which==1 && !IsInArea){
     with($('#OpLimits_Menu')){
      css('display','none');
     }
    }
  }
 });
 //-----------------------------------------
 //计算坐标函数
 MousePostion = function(e,tag){
  mouse = new MouseEvent(e);
  Mouse_X = mouse.x;
  Mouse_Y = mouse.y;
  if(tag==1){
    TMenu_X0 = Mouse_X;
    TMenu_Y0 = Mouse_Y;
  }
 }
 //获取鼠标坐标函数
 var MouseEvent = function(e) {
  this.x = e.pageX
  this.y = e.pageY
 }
 //---------------------------------------- 
 with($('#OpLimits_Menu li')){
   mouseover(function(){
    $(this).addClass('onmouse');
   });
   
   mouseout(function(){
    $(this).removeClass('onmouse');
   });
   
   click(function(){  
  with($('#OpLimits_Menu')){
   css('display','none');
  }
   });
 }
 
 
});
</script>
    </head>
    <body>
    <div class="ChildNode">
    <div class="title">餐饮食品</div>
    </div>
        
    <div id="OpLimits_Menu" style="display:none">
    <h1>权限设置</h1>
    <ul>
    <li value="1">查看</li>
    <li value="2">添加</li>
    <li value="3">修改</li>
    <li value="4">删除</li>
    </ul>
    </div>
    </body>
    </html>
    