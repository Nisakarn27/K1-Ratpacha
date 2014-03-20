<?php
Yii::app ()->clientscript->registerCssFile ( Yii::app ()->theme->baseUrl . '/css/bootstrap.css' )->registerCssFile ( Yii::app ()->theme->baseUrl . '/css/bootstrap-responsive.css' )->registerCssFile ( Yii::app ()->theme->baseUrl . '/css/form.css' )?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Le styles -->
<style type="text/css">
body {
	padding-top: 60px;
	padding-bottom: 40px;
}

.sidebar-nav {
	padding: 9px 0;
}

@media ( max-width : 980px) {
	body {
		padding-top: 0px;
	}
}
</style>

<!-- Le fav and touch icons -->
<link rel="shortcut icon" href="images/favicon.ico">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72"
	href="images/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114"
	href="images/apple-touch-icon-114x114.png">

			<center>
<img height='600px' width='900px'
		src='<?php echo Yii::app()->theme->baseUrl; ?>/img/pro5.jpg'></center>

</head>

<body>
	<div class="navbar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse"> <span class="icon-bar"></span> <span
					class="icon-bar"></span> <span class="icon-bar"></span>
				</a> <a class="brand" href="<?php echo Yii::app()->homeURL='http://localhost/ratpacha19/index.php?r=news/index'; ?>"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
				
					<?php
					
					$this->widget ( 'zii.widgets.CMenu', array (
							'htmlOptions' => array (
									'class' => 'nav' 
							),
							'activeCssClass' => 'active',
							'items' => array (
									
									array (
											'label' => 'ข่าวประชาสัมพันธ์',
											'url' => array (
														'news/index' 
											) 
									),
									array (
											'label' => 'กระดานสนทนา',
											'url' => array (
													'/webboard/index'
											)
									),
									
									array (
											'label' => 'ติดต่อ',
											'url' => array (
													'/site/contact' 
											) 
									),
									array (
											'label' => 'เข้าสู่ระบบ',
											'url' => array (
													'/site/login' 
											),
											'visible' => Yii::app ()->user->isGuest 
									),
									array (
											'label' => 'จัดการข่าวประชาสัมพันธ์',
											'url' => array (
													'/news/admin'
											),
											'visible' => !Yii::app ()->user->isGuest
									),
										array (
												'label' => 'จัดการเว็บบอร์ด',
												'url' => array (
														'/webboard/admin'
												),
												'visible' => !Yii::app ()->user->isGuest
										),
									array (
											'label' => 'จัดการทำเนียบครูและบุคลากร',
											'url' => array (
													'/personal/admin'
											),
											'visible' => !Yii::app ()->user->isGuest
									),
									array (
											'label' => 'จัดการผู้ดูแลระบบ',
											'url' => array (
													'/admin/index'
											),
											'visible' => !Yii::app ()->user->isGuest
									),
									array (
											'label' => 'จัดการกลุ่มสาระ',
											'url' => array (
													'/group/create'
											),
											'visible' => !Yii::app ()->user->isGuest
									),
									array (
											'label' => 'ออกจากระบบ (' . Yii::app ()->user->name . ')',
											'url' => array (
													'/site/logout' 
											),
											'visible' => ! Yii::app ()->user->isGuest 
									) 
							) 
					) );
					?>
					<?php if(!Yii::app()->user->isGuest): ?>
					<p class="navbar-text pull-right">
						Last login date : <a href="#"><?php echo Yii::app()->session['last_login']?Yii::app()->session['last_login']:'Not set'; ?></a>
					</p>
					<?php endif; ?>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<br>
	<?php
    Yii::app()->clientScript->registerScript(
       'myHideEffect',
       '$(".flash-success").animate({opacity: 1.0}, 3000).fadeOut("slow");',
       CClientScript::POS_READY
    );
?>
 
<?php if(Yii::app()->user->hasFlash('success')):?>
    <div class="flash-success">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php endif; ?>

	<div class="container-fluid">

		<div class="row-fluid">
		<div class="span1"></div>
		<div class="span1"></div>
		
			
	
	
			<div class="span8">
	
    	<?php echo $content; ?>
    	<?php if(isset($this->breadcrumbs)):?>
	
	<?php endif?><br>
		</div><br>
		    
    </div>
		</div>
		

<hr>
		 <center><footer>
				<b> โรงเรียนราชประชานุเคราะห์ ๑๙ จังหวัดนครศรีธรรมราช <br> โทรศัพท์
					075-302187 โทรสาร 075 - 302042<br>
				</b>Copyright © <?php echo date("Y");?>
			
		</footer></center>

</body>
</html>
