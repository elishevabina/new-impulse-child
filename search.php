<?php get_header(); ?>

<!--content-->
<div class="row" id="content_container">
			
	<?php get_template_part( 'navigation' ); ?>
		
	<!--right col-->
	<div class="eight columns">
	<div id="right-col">
		
		<h1><?php printf( __( 'Search Results for: %s', 'impulse' ), '' . get_search_query() . '' ); ?></h1>
				
		<?php if ( have_posts() ) : ?>
				
				<!-- courtesy of asdfg asdf via http://wordpress.org/support/topic/searchphp-only-show-headlines-of-pages-->
			<?php while (have_posts()) : the_post(); ?>

			<div <?php post_class() ?> class="search-result">
				<h4 id="post-<?php the_ID(); ?>">
				    <a href="<?php the_permalink() ?>" 
					rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
				    <?php the_title(); ?></a>
				</h4>
				<?php the_excerpt();?>

			</div>

			<?php endwhile; ?>
		
		<?php else : ?>

			<div class="post-head-notfound">
				<h1><?php _e( 'Nothing Found', 'impulse' ); ?></h1>
			</div><!--head end-->
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'impulse' ); ?></p>
				<?php include(TEMPLATEPATH . "/searchform.php"); ?>	
		<?php endif; ?>
		
	</div> <!--right-col end-->
    </div> <!--columns end-->

<div class="one column"> </div>

</div>
<!--content end-->

<div class="clear"></div>

<?php get_footer(); ?>
