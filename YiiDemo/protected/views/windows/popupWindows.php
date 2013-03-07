<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php echo CHtml::metaTag('text/html; charset=utf-8', null, 'Content-Type'); ?>
    <title>windows</title>
</head>
<body>
<?php
$this->breadcrumbs = array(
    'Message',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>

<div class="form"><?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'msg-add',
    'enableAjaxValidation' => true,
        ));
    $model = new Messages;  
?>
    <div class="row">
        <?php echo $form->labelEx($model, 'message_title'); ?>
        <?php echo $form->textField($model, 'message_title'); ?>
        <?php echo $form->error($model, 'message_title'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'message_content',array('style'=>'align:center;')); ?>
        <?php
        //$model = new Messages;    
        $this->widget('application.extensions.fckeditor.FCKEditorWidget', array(
            'model' => $model,
            'attribute' => 'message_content', //属性的名字
            'height' => '300px', //高度
            'width' => '800px', //宽度
            "toolbarSet" => 'Default',
            'fckeditor' => Yii::app()->basePath . '/../fckeditor/fckeditor.php',
            'fckBasePath' => Yii::app()->baseUrl . '/fckeditor/',
            'config' => array('ToolbarStartExpanded' => false,            
//            'SkinPath'=>Yii::app()->basePath .'/fckeditor/editor/skins/office2003/',          
            'EnableSourceXHTML'=>true,///false //为TRUE 时,当由可视化界面切换到代码页时,把HTML 处理成XHTML<o:p></o:p>
            'EnableXHTML'=>true,///false /是否允许使用XHTML 取代HTML<o:p></o:p>
            'FillEmptyBlocks'=>true,///false //使用这个功能,可以将空的块级元素用空格来替代<o:p></o:p>
            'ForcePasteAsPlainText'=>false,///false //强制粘贴为纯文本<o:p></o:p>
            'ForceSimpleAmpersand'=>true,//,/false //
        )));
        ?>
        <?php echo $form->error($model, 'message_content'); ?>
    </div>
    <div style="margin-top: 10px;">
        <?php echo CHtml::submitButton('submit'); ?>
    </div>
<?php $this->endWidget() ?>
</div>
</body>	




