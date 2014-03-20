<?php
/* @var $this WebboardController */
/* @var $model Webboard */

$this->breadcrumbs=array(
	'Webboards'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Webboard', 'url'=>array('index')),
	array('label'=>'Create Webboard', 'url'=>array('create')),
);

?>

<br>
<br>
<h1>กระดานสนทนา</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'webboard-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		array (
						'name' => 'No.',
						'value' => '$this->grid->dataProvider->pagination->offset+$row+1' 
				),
		
		'title',
		'detail',
		'post_date',
		
		/*
		'name_user_post',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
