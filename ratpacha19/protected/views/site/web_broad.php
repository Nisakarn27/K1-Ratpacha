<?php
$this->menu=array(
	array('label'=>'หน้าแรก', 'url'=>array('index')),
	array('label'=>'ประวัติโรงเรียน', 'url'=>array('/site/page',
													'view' => 'about' )),
	array('label'=>'ข้อมูลพื้นฐานโรงเรียน', 'url'=>array('/site/page',
													'view' => 'vision')),
		array('label'=>'พระบรมราโชบาย', 'url'=>array('/site/page',
				'view' => 'royal_policy')),
	array('label'=>'ทำเนียบครูและบุคลากร', 'url'=>array('index')),
		
);?>