
<?php
/* @var $this PersonalController */
/* @var $model Personal */

$this->breadcrumbs=array(
	'Personals'=>array('index'),
	$model->name,
);




		
		
		
$this->menu=array(
	array('label'=>'List Personal', 'url'=>array('index')),
	array('label'=>'Create Personal', 'url'=>array('create')),
	array('label'=>'Update Personal', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Personal', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Personal', 'url'=>array('admin')),
);
?>
	
		
			
    			
<h1>View Personal #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
array (
		'name' => 'personal.image',
		'type' => 'html',
		'value' => ($model->image) ? CHtml::image ( Yii::app ()->request->baseUrl . '/images/' . $model->image, '', array (
				'width' => 200,
				'height' => 150
		) ) : CHtml::image ( Yii::app ()->request->baseUrl . '/images/noimage.jpg', '', array (
				'width' => 200,
				'height' => 150
		) )
),
		'name',
		'specification',
		'position',
		'group.group',
	
	),
));



?>
