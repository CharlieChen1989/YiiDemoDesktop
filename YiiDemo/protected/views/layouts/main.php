<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <?php echo CHtml::cssFile('/css/main.css'); ?>  
        <?php // echo CHtml::scriptFile('/js/jquery/jquery.js') ?>
        <?php // Yii::app()->clientScript->registerCoreScript('jquery'); ?>
        <!-- dhtmlx -->
        <?php echo CHtml::cssFile('/js/dhtmlx/dhtmlxgrid.css'); ?>
        <?php echo CHtml::cssFile('/js/dhtmlx/dhtmlxgrid_skins.css'); ?>
        <?php echo CHtml::cssFile('/js/dhtmlx/dhtmlxwindows.css'); ?>

        <?php echo CHtml::cssFile('/js/dhtmlx/skins/dhtmlxgrid_dhx_skyblue.css'); ?>
        <?php echo CHtml::cssFile('/js/dhtmlx/skins/dhtmlxwindows_dhx_skyblue.css'); ?>

        <?php echo CHtml::scriptFile('/js/dhtmlx/dhtmlxcommon.js') ?>
        <?php echo CHtml::scriptFile('/js/dhtmlx/dhtmlxgrid.js') ?>
        <?php echo CHtml::scriptFile('/js/dhtmlx/dhtmlxgridcell.js') ?>
        <?php echo CHtml::scriptFile('/js/dhtmlx/ext/dhtmlxgrid_start.js') ?>

        <?php echo CHtml::scriptFile('/js/dhtmlx/dhtmlxcontainer.js') ?>
        <?php echo CHtml::scriptFile('/js/dhtmlx/dhtmlxwindows.js') ?>
        <title>home page</title>
        <style>
        body{
            padding:0;
            margin:0;
            height:100%;
            width:100%;
            overflow:hidden;
            background-image: url(<?php echo isset($user->bgPicUrl) ? $user->bgPicUrl : '/images/pic/bluesky10.jpg'; ?>);
        }
        .hiddenCalendar{
            margin:85px auto -200px 100px;
            float:right;
            title:<?php Yii::t('site', 'Hidde Calendar') ?>
        } 
        </style>        
    </head>

<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=0&amp;pos=right&amp;uid=6587784" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config={"bdTop":36};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
    
    <body>
        <div class="container" id="page">
            <div id="OpLimits_Menu" style="display:none">
<!------右键菜单------------------------------------------------------>
            <ul>
                <li value="0" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '右键菜单查看'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                <li value="1" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '右键菜单查看'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                <li value="2" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '刷新当前页面'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                <li value="3" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '更换桌面背景'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                <li value="4" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '新建快捷方式'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                <li value="5" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '右键菜单查看'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                <li value="6" class="rightMenu"><?php echo CHtml::button(Yii::t('blog', '刷新当前页面'), array('name' => 'popupwindow', 'style' => 'margin-left:-42px;height:23px;width:120px;text-align:center;background-color: #d5effc;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?></li>
                
            </ul>
<!-------------------------------------------------------------------->
            </div>
            <!-- mainmenu -->
            <div id="mainmenu">                
                <div>
                    <div class="clock"><? require_once '/protected/views/windows/clock.php'; ?></div>
                    <?php
                    $form = $this->beginWidget('CActiveForm', array(
                        'id' => 'setLang',
                        'enableAjaxValidation' => false,
                        'action' => Yii::app()->request->baseUrl . '/user/setLangMenu',
                        'htmlOptions' => array('class' => 'regform'),
                            ));
                    $userInfo = Yii::app()->session->get('userInfo');
                    $user = UserProfileTbl::model()->findByPk($userInfo['userID']);
                    echo CHtml::hiddenField('UserProfileTbl[prefLang]', $user->prefLang);
                    $this->endWidget();
                    ?>
                    <ul class="language">
                        <li class="aa <?php echo ($user->prefLang == 'zh_tw') ? 'kk' : '' ?>" onclick="changeLang('zh_tw');">繁</li>
                        <li class="aa <?php echo ($user->prefLang == 'zh_cn') ? 'kk' : '' ?>" onclick="changeLang('zh_cn');">简</li>
                        <li class="aa <?php echo ($user->prefLang == 'en') ? 'kk' : '' ?>" onclick="changeLang('en');">EN</li>
                    </ul>

                </div>               
                
                <?php
                $this->widget('zii.widgets.CMenu', array(
                    'items' => array(
                        array('label' => yii::t('site', 'Desktop'), 'url' => array('/site/index')),
                        array('label' => yii::t('site', 'workArea'), 'url' => array('/work/index')),
                        array('label' => yii::t('site', 'learning'), 'url' => array('/learn/index')),
                        array('label' => yii::t('site', 'TestArea'), 'url' => array('/lab/index')),
                        array('label' => yii::t('site', 'BlogArticles'), 'url' => array('/blog/index')),
                        array('label' => yii::t('site', 'ContactUs'), 'url' => array('/site/contact')),
                        array('label' => yii::t('site', 'Logout') . '(' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                    ),
                ));
                ?>  
            </div><!-- mainmenu -->
            <?php if (Yii::app()->user->hasFlash('notice')) { ?>
                <div id="message"><?php echo Yii::app()->user->getFlash('notice'); ?></div>
            <?php } ?>

            <div id="mainContent">
                <?php echo $content; ?>
            </div>
<!--            <span class="hiddenCalendar">>></span>-->
            <div class="calendar"><?php require_once '/protected/views/site/calendar.php'; ?></div>
            <span id="information" style="display:none">Your browser doesn't support CSS3 3D Transform</span> 
            <script src="/js/dock.js"></script>
            <script> if(!Modernizr.csstransforms3d) document.getElementById('information').style.display = 'block'; </script>

            <script type="text/javascript" charset="utf-8">
                function changeLang(lang){
                    $("#UserProfileTbl_prefLang").val(lang);
                    $("#setLang").submit();
                }
                
                $(".language li").bind({
                    mousedown:function(){
                        $(".language li").removeClass("kk");
                        $(this).addClass("kk");
                    },
                    mouseout:function(){
                        $(".language li").removeClass("kk1");
                    },
                    mouseover:function(){
                        $(this).addClass("kk1");
                    }	
                });
                var mouseon=false;
                var e = window.event || e;
                $(".clock").mouseover(function(e){
                    //取得该对象的title属性作为提示信息显示，当然你也可以指定其他属性;
                    
                    var tip = $(this).attr('title');
                    // 判断当前是否鼠标停留在对象上,可以修正ie6下出现的意外Bug;
                    mouseon=true;
                    // 清空内容，因为title属性浏览器默认会有提示;
                    $(this).attr('title','<?php $cno = array('日', '一', '二', '三', '四', '五', '六');
                echo Date('Y年m月d日 ') . ' 星期' . $cno[date('w')]; ?>');
                    // 创建提示信息的容器，样式自定;
                    var body = $(".mainmenu");
                    body.append('<div id="tooltip"><div>' + tip + '</div></div>');
                    // 取得鼠标坐标来指定提示容器的位置;
                    $('#tooltip').css({
                        top:e.pageY - 35,
                        left:e.pageX - $("#tooltip").width()+36
                    }).show();
                    
                    
                    
                }).mousemove(function(e) {
                    $('#tooltip').css({
                        top:e.pageY - 35,
                        left:e.pageX - $("#tooltip").width()+36
                    });
                }).mouseout(function() {
                    if(mouseon==true){
                        $(this).attr('title',$('#tooltip div').html());
                        $('#tooltip').remove();
                        mouseon=false;
                    }
                });
                
                $(".hiddenCalendar").mouseover(function(e){
                    // 清空内容，因为title属性浏览器默认会有提示;
                    $(this).attr('title',"<?php echo Yii::t('site', 'Hidde Calendar'); ?>");
                    //设置鼠标样式为指针
                    $(this).css({
                        'cursor':'pointer'
                    });                    
                }).click(function() {
                    $('.hiddenCalendar').css({
                        'display':'none'
                    });                     
                    $('.calendar').css({
                        'display':'none'
                    });                     
                });  
                //桌面右键事件，弹出右键菜单
                var desktop = document.getElementById('mainContent');
                desktop.onmousedown = function(e){  
                    var e = e || window.event;
                    if(e.button == "2"){
                        $('#OpLimits_Menu').css({
                        'left':e.pageX,
                        'top': e.pageY,
                        'display':'block'
                     });
                    }
                    if(e.button == "0"){
                        $('#OpLimits_Menu').fadeOut('fast');
                    }
                }               
                //屏蔽浏览器自带的右键菜单
                desktop.oncontextmenu= function(e){                    
                    return false;
                } 
            </script>
        </div>
       
    </body>
</html>