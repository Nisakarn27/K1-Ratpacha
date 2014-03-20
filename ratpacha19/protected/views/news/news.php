<h1>ข่าวประชาสัมพันธ์</h1>

<?php 
$this->widget('zii.widgets.grid.CGridView',array(
	'id'=>'Topics-grid',
		'dataProvider'=>$model,
		
		'columns'=>array(
	
				array('name'=>'No.',
						'value'=>'$this->grid->dataProvider->pagination->offset+$row+1',),
			 'title',
				'news',
				 'create_date',
				  
				



array(
		'class'=>'bootstrap.widgets.TbButtonColumn',
		'htmlOptions'=>array('style'=>'width: 30px'),
		'template'=>'{view}{delete}',
),

)

));
