<?php
/* @var $this WebboardController */
/* @var $model Webboard */

$this->breadcrumbs=array(
	'Webboards'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Webboard', 'url'=>array('index')),
	array('label'=>'Create Webboard', 'url'=>array('create')),
	array('label'=>'Update Webboard', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Webboard', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Webboard', 'url'=>array('admin')),
);
?>

<h1>กระดานสนทนา #<?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(

		'title',
		array (
		'name' => 'webboard.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/webboard/' . $model->image, '', array (
				'width' => 200,
				'height' => 150
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/webboard/noimage.jpg', '', array (
				'width' => 200,
				'height' => 150
		) )
),
	
		'detail',
		'post_date',
		'editpost_date',
		'name_user_post',
	),
)); ?>
<br />		
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider' => $comment->search ( '$model=>id', 'search', array (
				'webboard_id' => $comment->webboard_id = $model->id 
		) ),
	'template'=>'{items}{pager}',	
	'itemView'=>'_view',
)); ?>
		<br/>
		
<h1>แสดงความคิดเห็น</h1>
		<div class="form">

	
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'topic1-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
		
		
		<div class="row">
		<?php echo $form->labelEx($comment,'comment'); ?>
		<?php echo $form->textArea($comment,'comment',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($comment,'comment'); ?>
		</div>
		
		<div class="row">
		<?php echo $form->labelEx($comment,'nickname'); ?>
		<?php echo $form->textField($comment,'nickname',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($comment,'nickname'); ?>
		</div>
		
	
		<div class="row buttons">
		<?php echo CHtml::submitButton($comment->isNewRecord ? 'แสดงความคิดเห็น' : 'save'); ?>
	</div>

<?php $this->endWidget(); ?>	</div>

<p style="color: red;">***กรุณาใช้ถ้อยคำที่สุภาพในการแสดงความคิดเห็น</p>
