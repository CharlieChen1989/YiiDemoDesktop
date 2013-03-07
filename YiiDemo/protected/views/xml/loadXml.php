(1)View Placement Add Request XML file:<a href="/test.xml" target="_blank"><?php $xmladdfilename = 'test.xml';echo 'testAdd.xml';?></a>
<br>
<?php echo CHtml::button(Yii::t('xml', 'ExpatXML'), array('class' => 'btn btn-grey', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'onclick' => 'location.href=\'' . Yii::app()->createUrl("xml/expatXml?filename=".$xmladdfilename) . '\'')); ?>

<br>
<br>
(2)View Placement Query Request XML file:<a href="/testq.xml" target="_blank"><?php $xmlqryfilename = 'testq.xml';echo 'testQuery.xml';?></a>
<br>
<?php echo CHtml::button(Yii::t('xml', 'ExpatXML'), array('class' => 'btn btn-grey', 'style' => 'margin:20px 20px;height:50px;width:75px;text-align:center;', 'onclick' => 'location.href=\'' . Yii::app()->createUrl("xml/expatXml?filename=".$xmlqryfilename) . '\'')); ?>