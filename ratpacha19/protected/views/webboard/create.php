<?php
/* @var $this WebboardController */
/* @var $model Webboard */

$this->breadcrumbs=array(
	'Webboards'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Webboard', 'url'=>array('index')),
	array('label'=>'Manage Webboard', 'url'=>array('admin')),
);
?>

<h1>เพิ่มหัวข้อสนทนา</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>