<style>
    h1{
        margin: -5px auto 10px auto;
    }
</style>

<h3><?php echo Yii::t('user','Users List'); ?></h3>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>


