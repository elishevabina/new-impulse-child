<?php /* Template Name: Home
*/ ?> 

<?php get_header(); ?>

<!-- slider-->

<?php if(of_get_option('slider_boolean') == "on") { ?>
<div id="slider_container">

	<div class="row">

		<div class="twelve columns">
	
			<?php get_template_part( 'element-slider' ); ?>

		</div>
	</div>
</div>

<?php }  ?> <!-- slider end -->

 


<!-- home boxes-->

	
	<div class="row" id="box_container">


        <div>
			<?php get_template_part( 'element-boxes', 'index' ); ?>
		</div>
		
		
	</div>

    
<!-- home boxes end -->


<div class="clear"></div>

		

<?php get_footer(); ?>