

<?php $navcheck = '' ; ?>

<!--re-renamed the nav menu #nav to trigger superfish.-->	
	<?php $navcheck = wp_nav_menu( array( 'container_class' => 'menu-header2', 
	'theme_location' => 'primary' , 
	'menu_id' => 'nav', 'fallback_cb' => '', 'echo' => false ) ); ?>

 <?php  if ($navcheck == '') { ?>
	
	<ul id="nav">
		<li class="page_item"><a href="<?php echo esc_url(home_url()); ?>" title="Home">Home</a></li>				
		<?php wp_list_pages('title_li=&sort_column=menu_order'); ?>

	</ul>
<?php } else echo($navcheck); ?>

