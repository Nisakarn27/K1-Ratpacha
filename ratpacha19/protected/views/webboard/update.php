<?php
/* @var $this WebboardController */
/* @var $model Webboard */

$this->breadcrumbs=array(
	'Webboards'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Webboard', 'url'=>array('index')),
	array('label'=>'Create Webboard', 'url'=>array('create')),
	array('label'=>'View Webboard', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Webboard', 'url'=>array('admin')),
);
?>

<h1>แก้ไขข้อมูลสนทนา<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>