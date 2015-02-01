			<?php for ($i = 1; $i <= 3; $i++) { ?>
		
				<div class="four columns">
				
				

	
	<div class="title-box">						
						
				<div class="title-head"><h1><?php echo get_field('box_head' . $i); ?></h1></div>
				</div> <!-- title-box close -->
				
												
	<?php if(get_field('box_image' . $i) != NULL): ?> 
		<div class="box-head">
		<a href="<?php echo get_field('box_link' . $i); ?>">
		<img src="<?php echo get_field('box_image' . $i);?>" 
			alt="<?php echo get_field('box_head' . $i); ?>" /></a> 
					
					</div> <!--box-head close-->
					<?php endif;?>
					
				
					
					<div class="box-content">

				<?php echo get_field('box_text' . $i); ?>
					
					</div> <!--box-content close-->
					
				<?php if(get_field('box_link' . $i) != NULL): ?>
					<span class="read-more"><a href="<?php echo get_field('box_link' . $i); ?>">
						<?php _e('Read More' , 'impulse'); ?></a></span>
				<?php endif; ?>
			
				</div><!--box ends-->
				
		<?php } ?>
			
	<div class="clear"></div>
