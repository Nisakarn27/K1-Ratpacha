<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>

<h1>เพิ่มข้อมูลบุคลากร</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>