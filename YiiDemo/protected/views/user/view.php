<?php
$this->breadcrumbs=array(
	Yii::t('user','Users')=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>Yii::t('user','List User'), 'url'=>array('index')),
	array('label'=>Yii::t('user','Create User'), 'url'=>array('create')),
	array('label'=>Yii::t('user','Update User'), 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>Yii::t('user','Delete User'), 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>Yii::t('user','Manage User'), 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('user','View User #').$model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'prefLang',
		'email',
	),
)); ?>
