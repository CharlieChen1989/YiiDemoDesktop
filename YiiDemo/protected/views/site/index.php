<style>
    body{
        padding:0;
        margin:0;
        height:100%;
        width:100%;
        overflow:hidden;
        background-image: url(<?php echo isset($bgImageUrl) ? $bgImageUrl : '/images/pic/bluesky10.jpg'; ?>);
    }
</style>
<!--加载Jquery框架-->
<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
<!--加载css样式表-->
<?php echo CHtml::cssFile('/css/index.css'); ?>  
<div id="stack">
    <div id="cloumn">
        <ul>
            <li><a href="http://twwitter.com/" target="_blank"><span class="title">Twitter</span><img src="/images/icons/twitter-32x32.png" alt="Twitter"></a></li>
            <li><a href="http://digg.com/"><span class="title">Digg</span><img src="/images/icons/digg-32x32.png" alt="Digg"></a></li>
            <li><a href="http://www.facebook.com/"><span class="title">Facebook</span><img src="/images/icons/facebook-32x32.png" alt="Facebook"></a></li>
            <li><a href="http://reddit.com/"><span class="title">Reddit</span><img src="/images/icons/reddit-32x32.png" alt="Reddit"></a></li>
        </ul>
    </div>
    <div id="cloumn" class="next">
        <ul>
            <li><a href="http://reddit.com/"><span class="title">Reddit</span><img src="/images/icons/reddit-32x32.png" alt="Reddit"></a></li>
            <li><a href="http://stumbleupon.com/"><span class="title">StumbleUpon</span><img src="/images/icons/stumbleupon-32x32.png" alt="StumbleUpon"></a></li>
            <li><a href="http://delicious.com/"><span class="title">Delicious</span><img src="/images/icons/delicious-32x32.png" alt="Delicious"></a></li>
            <li><a href="http://flickr.com/"><span class="title">Flickr</span><img src="/images/icons/flickr-32x32.png" alt="Flickr"></a></li>
            <li><a href="http://digg.com/"><span class="title">Digg</span><img src="/images/icons/digg-32x32.png" alt="Digg"></a></li>
        </ul>
    </div>
    <div id="cloumn" class="next">
        <ul>
            <li>
            <?php echo CHtml::button(Yii::t('xml', 'XML'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'title' =>Yii::app()->createUrl("xml/createXml"))); ?>
            </li>
            <li>
            <?php echo CHtml::button(Yii::t('user', 'Users'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'title' =>Yii::app()->createUrl("/user/index"))); ?>
            </li>
            <li>
            <?php echo CHtml::button(Yii::t('windows', 'Windows'), array('name'=>'popupwindow','class' => 'btn btn-grey', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'title' =>Yii::app()->createUrl("/windows/index"))); ?>
            </li>            
       </ul>
    </div>
</div>
<!--公共弹窗-->
<script type="text/javascript">
    var dhxWins= new dhtmlXWindows();
    var i=1;
    function doShowWindows(url,val){
        var width = 720;
        var height = 500;
        var top = (i+1)*50 + $(window).scrollTop();
        var left = ($(window).width() - 700)/2 + $(window).scrollLeft();
        var win = dhxWins.createWindow(i, left, top, width, height);
        win.setText(val);
        win.attachURL(url);
        i=i+1;
    }
    var list = document.getElementsByName("popupwindow");
    for(var i = 0;i<list.length;i++){
        list[i].onclick = function(){
            doShowWindows(this.title,this.value);
        }
    }
</script> 