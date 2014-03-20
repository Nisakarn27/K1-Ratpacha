<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Admins',
);

$this->menu=array(
	array('label'=>'เพิ่มแอดมิน', 'url'=>array('create')),
	array('label'=>'แก้ไขข้อมูลแอดมิน', 'url'=>array('update')),
);
?>

<h1>ข้อมูลแอดมิน</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
