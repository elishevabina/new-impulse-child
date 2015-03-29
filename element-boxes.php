			<?php for ($a = 0; $a <= 2; $a+=2) { ?>
		
		<div class="row elbox-row"> 
		
		 <?php for ($b = 1; $b <= 2; $b++) { ?>
		 
		<?php $i = $a + $b; ?>
		  
		  
				<div class="six columns elbox">
	
	<div class="title-box">						
						
				<div class="title-head"><h1>
					<a href="<?php echo get_field('box_link' . $i); ?>">
						<?php echo get_field('box_head' . $i); ?></h1></div>
					</a>
				</div> <!-- title-box close -->
				
												
	<?php if(get_field('box_image' . $i) != NULL): ?> 
		<div class="box-img">
		<a href="<?php echo get_field('box_link' . $i); ?>">
		<img src="<?php echo get_field('box_image' . $i);?>" 
			alt="<?php echo get_field('box_head' . $i); ?>" /></a> 
					
					</div> <!--box-img close-->
					<?php endif;?>
					
				
					
					<div class="box-content">

				<?php echo get_field('box_text' . $i); ?>
					
					</div> <!--box-content close-->
					
			
				</div><!--box ends--> 
				
				<?php } ?>  </div><!--row ends--> 
				
				 <?php } ?>

			
	<div class="clear"></div>
