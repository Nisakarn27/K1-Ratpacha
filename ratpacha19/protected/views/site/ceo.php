
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

<br><br><center><h1>ทำเนียบผู้บริหาร</h1>
<img height='400px' width='700px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/page1.2.jpg'></center>
<br>
