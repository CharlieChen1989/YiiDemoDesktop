<div class="form"><?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'msg-edit',
    'enableAjaxValidation' => true,
        ));
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
        <?php echo CHtml::submitButton('update',array('name'=>'submitBtn',)); ?>
    </div>
<?php $this->endWidget() ?>
</div>

