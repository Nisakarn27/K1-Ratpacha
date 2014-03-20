<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->id,
);
/*
$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);*/?>
<?php

$this->menu=array(
		array('label'=>'หน้าแรก', 'url'=>array('news/index')),
		array('label'=>'ประวัติโรงเรียน', 'url'=>array('/site/page',
				'view' => 'about' )),
		array('label'=>'ข้อมูลพื้นฐานโรงเรียน', 'url'=>array('/site/page',
				'view' => 'vision')),
		array('label'=>'พระบรมราโชบาย', 'url'=>array('/site/page',
				'view' => 'royal_policy')),
		array('label'=>'ทำเนียบครูและบุคลากร', 'url'=>array('index')),
		array (
				'label' => 'ทำเนียบผู้บริหาร',
				'url' => array (
						'ceo'
				)
		),

);?>


<h1>ข่าว<?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
	
		'title',
		array (
				'name' => 'news.image',
				'type' => 'html',
				'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/news_images/' . $model->image, '', array (
						'width' => 400,
						'height' => 200
				) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/news_images/noimage.jpg', '', array (
						'width' => 200,
						'height' => 150
				) )
		),
		'news',
		
		'create_date',
		'update_date',
	
	),
)); ?>

