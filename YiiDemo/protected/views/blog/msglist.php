<?php
$this->menu = array(
    array('label' => Yii::t('message', 'Create Meassage'), 'url' => array('index')),
    array('label' => Yii::t('message', 'Manage Meassages'), 'url' => array('admin')),
);
?>
<?php echo CHtml::cssFile('/css/pages.css'); ?>
<?php
$this->widget('zii.widgets.CListView', array(
    'dataProvider' => $dataProvider,
    'itemView' => '_view',
));
?>
