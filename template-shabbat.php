<?php /* Template Name: Shabbat
With widget sidebar 
*/ ?> 


<?php get_header(); ?>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script src="https://www.limmudboston.org/wp-content/themes/impulse-child/javascript/google-map-display.js" type="text/javascript"></script>

	 
	
		<!--content-->
		<div class="row" id="content_container">
		
		
		<?php get_template_part( 'navigation' ); ?>
		
		
			<!--middle col--><div class="seven columns">
		
				<div id="middle-col">
					<?php get_template_part( 'breadcrumbs' ); ?>
					
					<h2 class="shabbat supertitle">Shabbat: The REST of Limmud</h2>
		            <h1 class="shabbat title"><?php the_title(); ?></h1> 
		            
		    	<div class="post-entry">
		        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		            
		            <h2 class="shabbat subtitle"><?php the_field('subtitle'); ?></h2>
		            <div class="shabbat location"><?php the_field('location'); ?></div>
		            <div class="shabbat logistics"><?php the_field('logistics'); ?></div>
				
					
					<div class="shabbat content"><?php the_field('description'); ?></div>
					
					<div class="shabbat speaker-pic">
					    <?php 
					    	$pic = get_field('speaker_pic');
					    	if ($pic) {
					    	    echo wp_get_attachment_image( $pic, 'medium' );
					    	}
					    ?>
					</div>
					<div class="shabbat speaker-bio"><?php the_field('speaker_bio'); ?></div>
					
					<?php if (get_field('congregation')): ?>
						<h3 class="shabbat about-cong">
							About <?php the_field('congregation');?>
						</h3>
						<div class="cong-description">
							<?php the_field('cong_description'); ?>
							<?php 
								$cong_url = get_field('cong_url');
								$cong_url = str_replace('http://', '', $cong_url);
								$cong_url = str_replace('https://', '', $cong_url);
							?>
							<a href="http://<?php echo $cong_url ?>">
								<?php echo $cong_url ?> </a>
						</div>
					<?php endif; ?>
					<div class="shabbat other">
						<?php the_field('other_text'); ?>
					</div>
			</div><!--post-entry end-->
					<div class="clear"></div>
						
						
					
					
					<!--?php comments_template( '', true ); ?-->

<?php endwhile; ?>
	</div> <!--middle-col end-->

</div> <!--column end-->

<div class="shabbat map three columns">
<?php 
$location = get_field('map');
 
if( !empty($location["address"]) ): 
?>
<div class="acf-map">
	<div class="marker" data-lat="<?php echo $location['lat']; ?>" 
	data-lng="<?php echo $location['lng']; ?>"></div>
</div>
<?php endif; ?>

<div class="shabbat map-text">
<?php
	$address = get_field('map_query');
	if ($address) {
		$address = explode(' ', $address);
		$address = implode('+', $address);
?>	
		<small>View <?php the_field('congregation') ?> in 
		<a href="http://maps.google.com/maps?t=m&q=<?php echo $address ?>">
		a larger map</a>.
		</small>
		
	<?php }?>
	<?php if (get_field('directions_url')): ?>
		<p><a href="<?php the_field('directions_url') ?>">
			Click for directions from the <?php if (get_field('congregation')) {
			the_field('congregation');
			} else print 'venue';?> website.
		</a></p>
	<?php endif; ?>
	</div>
	
</div>
	<?php get_sidebar(); ?>

</div>
<!--content end-->
		

<?php get_footer(); ?>