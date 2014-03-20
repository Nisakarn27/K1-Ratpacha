<?php
/* @var $this WebboardController */
/* @var $model Webboard */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form = $this->beginWidget ( 'CActiveForm', array (
		'id' => 'clinic-form',
		'htmlOptions' => array (
				'enctype' => 'multipart/form-data' 
		) 
) );
 ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->fileField($model,'image',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textArea($model,'detail',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>



	<div class="row">
		<?php echo $form->labelEx($model,'name_user_post'); ?>
		<?php echo $form->textField($model,'name_user_post',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'name_user_post'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->