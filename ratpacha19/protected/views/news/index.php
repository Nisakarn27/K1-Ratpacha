<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	'Manage',
);?>

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
<h1>ข่าวประชาสัมพันธ์</h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'news-grid',
	'dataProvider'=>$model->search(),
	
	'columns'=>array(
		array (
						'name' => 'No.',
						'value' => '$this->grid->dataProvider->pagination->offset+$row+1' 
				),
			'title',
		
		'create_date',
		
			array(
					'class'=>'bootstrap.widgets.TbButtonColumn',
					'htmlOptions'=>array('style'=>'width: 30px'),
					'template'=>'{view}',
			),
	),
)); ?>
