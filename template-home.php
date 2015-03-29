<?php /* Template Name: Home
*/ ?> 

<?php get_header(); ?>

<?php if(!is_front_page()) { ?>

	<div id="subhead_container">
		
		<div class="row">

		<div class="twelve columns">
		
<h1><?php if ( is_category() ) {
		single_cat_title();
		} elseif (is_tag() ) {
		echo (__( 'Archives for ', 'impulse' )); single_tag_title();
	} elseif (is_archive() ) {
		echo (__( 'Archives for ', 'impulse' )); single_month_title();
	} else {
		wp_title('',true);
	} ?></h1>
			
			</div>	
			
	</div></div>
	
<?php } ?>

<!-- impulse has a slider here -->

<!--welcome
<?php if(get_field('welcome_text') != NULL): ?>
	<div class="row" id="welcome_container">

		<div class="nine columns">
		
	<h1><?php echo get_field('welcome_text');?> </h1></div>
	
	<?php if(get_field('welcome_button') != NULL): ?>
		<div class="three columns"> 
		<a class="button large" href="<?php echo get_field('welcome_button_link'); ?>">
			<?php echo get_field('welcome_button'); ?></a> 
		</div>
	<?php endif; ?>
	 <hr />
	</div>
	<?php endif; ?>--><!--welcome end--> 


<!-- home boxes -->
<?php if(is_front_page()) { ?>
	
	<div id="box_container">

			<?php get_template_part( 'element-boxes', 'index' ); ?>
	</div>
	
<!-- home boxes end -->



<div class="clear"></div>
<?php } ?> 
<!--content-->



<?php get_footer(); ?>