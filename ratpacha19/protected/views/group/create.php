<?php
/* @var $this GroupController */
/* @var $model Group */

$this->breadcrumbs=array(
	'Groups'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Group', 'url'=>array('index')),
	array('label'=>'Manage Group', 'url'=>array('admin')),
);
?>

<h1>เพิ่มกลุ่มสาระการเรียนรู้</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>