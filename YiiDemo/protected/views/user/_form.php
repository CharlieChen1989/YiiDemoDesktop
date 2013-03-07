<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
        'enableAjaxValidation' => true,
            ));
    ?>
    <p class="note"><?php echo Yii::t('site','Fields with'); ?> <span class="required">*</span> <?php echo Yii::t('site','are required.'); ?>  </p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'VerifyPassword'); ?>
        <?php echo $form->passwordField($model, 'verifypassword', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'verifypassword'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'email'); ?>
        <?php echo $form->textField($model, 'email', array('size' => 50, 'maxlength' => 50)); ?>
        <?php echo $form->error($model, 'email'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'nationality'); ?>
        <?php
        echo $form->dropDownList($model, 'nationality', $countryList, array(
            'empty' => Yii::t('view_Member', Yii::t('user','Please choose your country')),
            'ajax' => array(
                'type' => 'POST',
                'url' => Yii::app()->createUrl('/user/DynamicState'),
                'data' => array('stateID' => 'js:this.value', 'old' => $model->stateID),
                'update' => '#'.get_class($model).'_stateID',
            ),
        ));
        ?>		
    </div>
    <div class="row">
        <?php echo $form->labelEx($model, 'stateID'); ?>
        <?php
        echo $form->dropDownList($model, 'stateID', StateCodesTbl::model()->getStateList($model->nationality), array(
            'empty' => Yii::t('view_Member', Yii::t('user','Please choose your Province')),
              'ajax' => array(
                'type' => 'POST',
                'url' => Yii::app()->createUrl('/user/DynamicCity'),
                'data' => array('stateID' => 'js:this.value'),
                'update' => '#'.get_class($model).'_cityID',
            ),
            
        ));
        ?>
        <?php echo $form->error($model, 'stateID'); ?>
    </div>
        <div class="row">
        <?php echo $form->labelEx($model, 'cityID'); ?>
        <?php
        echo $form->dropDownList($model, 'cityID', CityCodesTbl::model()->getCityList($model->stateID), array(
            'empty' => Yii::t('view_Member', Yii::t('user','Please choose your City')),
            'ajax' => array(
                'type' => 'POST',
                'url' => Yii::app()->createUrl('/user/DynamicCode'),
                'data' => array('cityID' => 'js:this.value'),
                'update' => '#postcode',)
          
        ));        
        ?>
        <?php echo $form->error($model, 'cityID'); ?>
    </div>
    <label id="postcode"><?php echo Yii::t('user','Post Code'); ?>:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo Yii::t('user','Area Code'); ?>:</label>
    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('user','Create') : Yii::t('user','Save')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
