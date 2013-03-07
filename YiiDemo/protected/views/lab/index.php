<div id="stack">
    <div id="cloumn">
        <ul>
            <li>
                <?php echo CHtml::button(Yii::t('lab', 'My OS'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:60px;width:100px;text-align:center;', 'onclick' => 'location.href=\'' .Yii::app()->createUrl("/OS/index") . '\'')); ?>
            </li>
             
        </ul>
    </div>
    <div id="cloumn" class="next">
        <ul>
                 
        </ul>
    </div>
</div>

