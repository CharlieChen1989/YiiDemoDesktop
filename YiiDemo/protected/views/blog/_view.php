<div class="view">	
	<?php echo CHtml::link(CHtml::encode($data->message_title), array('view', 'id'=>$data->message_ID)); ?>        
	<?php echo CHtml::encode($data->update_date); ?>
	<br />
</div>