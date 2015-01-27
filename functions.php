<?php 

//remove impulse's wp_title filter
remove_filter( 'wp_title', 'impulse_filter_wp_title', 10 );

function the_parent_slug() {
  global $post;
  if($post) {
  	if($post->post_parent == 0) return '';
  	$post_data = get_post($post->post_parent);
  	return $post_data->post_name;
  } return '';
}

//returns true if the current page is a descendent of the page 
function is_descendant( $path ) {      //the path to of the page we're looking for pages underneath
    global $post;               // load details about this page
	$parent = get_page_by_path( $path );
	
    if ($post && $parent) {
		$anc = get_post_ancestors( $post->ID );
		foreach ( $anc as $ancestor ) {
			if( $ancestor == $parent->ID ) {
				return true;
			}
		}
	}

    return false;  // the path is not an ancestor or the current page isn't a $post
}

/** filter function for wp_title 
function impulse_child_filter_wp_title( $old_title, $sep, $sep_location ){
 
// add padding to the sep
$ssep = ' ' . $sep . ' ';
 
// find the type of index page this is
if( is_category() ) $insert = $ssep . 'Category';
elseif( is_tag() ) $insert = $ssep . 'Tag';
elseif( is_author() ) $insert = $ssep . 'Author';
elseif( is_year() || is_month() || is_day() ) $insert = $ssep . 'Archives';
else $insert = $ssep;
 
// get the page number we're on (index)
if( get_query_var( 'paged' ) )
$num = $ssep . 'page ' . get_query_var( 'paged' );
 
// get the page number we're on (multipage post)
elseif( get_query_var( 'page' ) )
$num = $ssep . 'page ' . get_query_var( 'page' );
 
// else
else $num = NULL;
 
// concoct and return new title
return get_bloginfo( 'name' ) . $insert . $old_title . $num;
}

// call our custom wp_title filter, with normal (10) priority, and 3 args
add_filter( 'wp_title', 'impulse_child_filter_wp_title', 10, 3 );
*/