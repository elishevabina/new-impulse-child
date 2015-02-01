<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 * 
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = wp_get_theme(get_stylesheet_directory() . '/style.css');
	$themename = $themename['Name'];
	$themename = preg_replace("/\W/", "", strtolower($themename) );
	$themename = 'impulse';
	
	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);
	
	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the "id" fields, make sure to use all lowercase and no spaces.
 *  
 */

function optionsframework_options() {
	
	// Test data
	$blog_home_array = array("on" => "on","off" => "off");
	
	// Multicheck Array
	$multicheck_array = array("one" => "French Toast", "two" => "Pancake", "three" => "Omelette", "four" => "Crepe", "five" => "Waffle");
	
	// Multicheck Defaults
	$multicheck_defaults = array("one" => "1","five" => "1");
	
	
	// Pull all the categories into an array
	$options_categories = array();  
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
    	$options_categories[$category->cat_ID] = $category->cat_name;
	}
	
	// Pull all the pages into an array
	$options_pages = array();  
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
    	$options_pages[$page->ID] = $page->post_title;
	}
		
	// If using image radio buttons, define a directory path
	$imagepath =  get_stylesheet_directory_uri() . '/images/';
		
	$options = array();
																																																																																																													
						
	/*$options[] = array( "name" => "Slider Settings",
						"type" => "heading");
						
	$options[] = array( "name" => "Slider on/off",
						"desc" => "Select \"on\" to show a slider",
						"id" => "slider_boolean",
						"std" => "off",
						"type" => "select",
						"class" => "mini",
						"options" => $blog_home_array);	
	
	$options[] = array( "name" => "Slider heading 1",
						"desc" => "Heading for the slider.",
						"id" => "slider_head1",
						"std" => "",
						"type" => "text");			
						
	$options[] = array( "name" => "Slider image 1",
						"desc" => "970px x 370px minimum. Upload your image for homepage slider.",
						"id" => "slider_image1",
						"type" => "upload");
						
	$options[] = array( "name" => "Slider image link",
						"desc" => "Paste here the link of the page or post.",
						"id" => "slider_link1",
						"std" => "",
						"type" => "text");
						
	$options[] = array( "name" => "Slider heading 2",
						"desc" => "Heading for the slider.",
						"id" => "slider_head2",
						"std" => "",
						"type" => "text");						
						
	$options[] = array( "name" => "Slider image 2",
						"desc" => "970px x 370px minimum. Upload your image for homepage slider.",
						"id" => "slider_image2",
						"type" => "upload");
						
	$options[] = array( "name" => "Slider read more link",
						"desc" => "Paste here the link of the page or post.",
						"id" => "slider_link2",
						"std" => "",
						"type" => "text");	
	*/							

	$options[] = array( "name" => "Header Settings",
						"type" => "heading");
						
	$options[] = array( "name" => "Logo image",
						"desc" => "Upload your logo image over here.",
						"id" => "logo_image",
						"type" => "upload");
						
	$options[] = array( "name" => "Header text area",
						"desc" => "A text area in the middle of the header",
						"id" => "header_text",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Header extras",
						"desc" => "Another text area in the header",
						"id" => "header_extras",
						"std" => "",
						"type" => "textarea");
						
	$options[] = array( "name" => "Favicon Settings",
						"type" => "heading");
						
	$options[] = array( "name" => "Favicon image",
						"desc" => "Upload your favicon image over here or enter url.",
						"id" => "favicon_image",
						"type" => "upload");						
						
	$options[] = array( "name" => "Footer Settings",
						"type" => "heading");
						
	$options[] = array( "name" => "Footer copyright text",
						"desc" => "Enter your company name here.",
						"id" => "footer_cr",
						"std" => "",
						"type" => "text");	
						
	$options[] = array( "name" => "Google Analytics Code",
						"desc" => "You can paste your Google Analytics or other tracking code in this box.",
						"id" => "go_code",
						"std" => "",
						"type" => "textarea");
						
															
	return $options;
}