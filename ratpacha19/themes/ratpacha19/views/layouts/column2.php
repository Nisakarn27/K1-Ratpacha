<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
	<div class="row-fluid">
        <div class="span3">
          <div class="well sidebar-nav">
          <div class="nav-header" style="font-size: 14px"><strong>Main Menu</strong></div>
              <?php
			$this->widget('zii.widgets.CMenu', array(
				'items'=>$this->menu,
				'htmlOptions'=>array('class'=>'nav nav-list'),
			));
			?>   
			
          </div><!--/.well -->
        </div><!--/span-->
        
        
        
        <div class="span9">
          <div id="content">
			<?php echo $content ?>
          </div>
        </div><!--/span-->
        
      
        
        
        
        
        
        
        
        
        
        
      </div><!--/row-->
      
    
      
      
      
      
      
<?php $this->endContent(); ?>


      
      
    