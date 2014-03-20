<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<?php
$this->menu=array(
	array('label'=>'หน้าแรก', 'url'=>array('index')),
	array('label'=>'ประวัติโรงเรียน', 'url'=>array('/site/page',
													'view' => 'about' )),
	array('label'=>'ข้อมูลพื้นฐานโรงเรียน', 'url'=>array('/site/page',
													'view' => 'vision')),
	array('label'=>'พระบรมราโชบาย', 'url'=>array('/site/page',
		'view' => 'royal_policy')),
	array('label'=>'ทำเนียบครูและบุคลากร', 'url'=>array('index')),
		
);?>
<h1>เข้าสู่ระบบ</h1>



<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
		<p class="hint">
		
		</p>
	</div>

	<div class="row rememberMe">
		<?php echo $form->checkBox($model,'rememberMe'); ?>
		<?php echo $form->label($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
