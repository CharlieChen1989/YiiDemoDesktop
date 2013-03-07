<?php 
    $this->menu=Messages::model()->getArticleList();
?>
<style type="text/css">
#b {font-size: 9px;text-align:right;margin-left: 100px;}
b > a:link {color: #FF0000}/*CSS 子元素选择器*/
b > a:visited {color: #00FF00}
b > a:hover {color: #FF00FF}
b > a:active {color: #0000FF}
</style>
<h1><?php echo Yii::t('message','View message #').$model->message_ID; ?></h1>

<h1 align="center"><?php echo $model->message_title;?></h1>
<b id="b"><?php echo Yii::t('message','Last Update '); ?>:
<?php echo $model->update_date;?></b>
<b id="b"><?php echo Yii::t('message','Author'); ?>:
<?php echo UserProfileTbl::model()->getUsernameByID($model->author_ID); ?></b>
<b id="b"><?php echo CHtml::link(Yii::t('message', 'Edit'), array("/blog/editMsg?id=".$model->message_ID ,)); ?></b>

<br>
<br>
<?php echo $model->message_content;?>
<br>
<?php echo CHtml::button(Yii::t('message', 'return'), array('onclick' => 'location.href=\'' . Yii::app()->createUrl("/blog/msglist") . '\'',)); ?>

