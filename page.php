<?php get_header(); ?>


		<div class="row" id="content_container">
		
		
		
		
			<!--right col--><div class="eight columns">
		
				<div id="right-col">
					<?php get_template_part( 'breadcrumbs' ); ?>
					
		            <h1><?php the_title(); ?></h1> 

				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					
					<div class="post-entry">
				

						<?php the_content(); ?>
						<div class="clear"></div>
						<?php wp_link_pages( array( 'before' => '' . __( 'Pages:', 'impulse' ), 'after' => '' ) ); ?>
						
					</div><!--post-entry end-->
					
					<!--?php comments_template( '', true ); ?-->

<?php endwhile; ?>
	</div> <!--right-col end-->

</div> <!--column end-->
<div class="one column">
	</div>
</div>
<!--content end-->
		

<?php get_footer(); ?>