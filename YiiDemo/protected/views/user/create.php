<?php
$this->breadcrumbs=array(
	Yii::t('user','Users')=>array('index'),
	Yii::t('user','Create'),
);

$this->menu=array(
	array('label'=>Yii::t('user','List User'), 'url'=>array('index')),
	array('label'=>Yii::t('user','Manage User'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('user','Create User'); ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model,'countryList'=>$countryList)); ?>