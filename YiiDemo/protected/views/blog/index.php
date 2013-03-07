<div id="stack">
    <div id="cloumn">
        <ul>
            <li>
                <?php echo CHtml::button(Yii::t('blog', 'New Blog'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'title' => Yii::app()->createUrl("/blog/createBlog"))); ?>
            </li>
             <li>
                <?php echo CHtml::button(Yii::t('blog', 'Push Blog'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'title' => Yii::app()->createUrl("/blog/pushBlog"))); ?>
            </li> 
            <li>
                <?php echo CHtml::button(Yii::t('blog', 'List Blog'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'title' => Yii::app()->createUrl("/blog/blogList"))); ?>
            </li> 
        </ul>
    </div>
    <div id="cloumn" class="next">
        <ul>
                 
        </ul>
    </div>
</div>

<script type="text/javascript">
    var dhxWins= new dhtmlXWindows();
    var i=1;
    function doShowWindows(url,val){
        var width = 750;
        var height = 620;
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