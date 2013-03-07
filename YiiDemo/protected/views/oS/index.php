<div id="stack">
    <div id="cloumn">
        <ul>
            <li>
                <?php echo CHtml::button(Yii::t('mac', 'Mac Desktop'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:60px;width:120px;text-align:center;', 'onclick' => 'location.href=\'' .Yii::app()->createUrl("/OS/launchMac") . '\'')); ?>
            </li>
             <li>
                <?php echo CHtml::button(Yii::t('linux', 'Linux Desktop'), array('name' => 'popupwindow', 'style' => 'margin:20px 20px;height:60px;width:120px;text-align:center;', 'onclick' => 'location.href=\'' .Yii::app()->createUrl("/OS/launchLinux") . '\'')); ?>
            </li>
        </ul>
    </div>
    <div id="cloumn" class="next">
        <ul>
                 
        </ul>
    </div>
</div>
