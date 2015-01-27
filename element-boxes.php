			<?php for ($i = 1; $i <= 3; $i++) { ?>
		
				<div class="four columns">
				
				

	
	<div class="title-box">						
						
				<div class="title-head"><h1><?php echo of_get_option('box_head' . $i); ?></h1></div>
				</div> <!-- title-box close -->
				
												
	<?php if(of_get_option('box_image' . $i) != NULL): ?> 
		<div class="box-head">
		<a href="<?php echo of_get_option('box_link' . $i); ?>">
		<img src="<?php echo of_get_option('box_image' . $i);?>" 
			alt="<?php echo of_get_option('box_head' . $i); ?>" /></a> 
					
					</div> <!--box-head close-->
					<?php endif;?>
					
				
					
					<div class="box-content">

				<?php echo of_get_option('box_text' . $i); ?>
					
					</div> <!--box-content close-->
					
				<span class="read-more"><a href="<?php echo of_get_option('box_link' . $i); ?>"><?php _e('Read More' , 'impulse'); ?></a></span>
			
				</div><!--boxes  end-->
				
		<?php } ?>
			
	<div class="clear"></div>
