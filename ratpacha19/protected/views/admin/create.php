<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'Admins'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'แก้ไขข้อมูลผู้ดูแลระบบ', 'url'=>array('update')),
);
?>

<h1>Create Admin</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>