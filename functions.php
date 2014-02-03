<?php	
	//Remove login error text
	add_filter('login_errors',create_function('$a', "return null;"));
	
	// remove junk from head
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wp_generator');
	remove_action('wp_head', 'feed_links', 2);
	remove_action('wp_head', 'index_rel_link');
	remove_action('wp_head', 'wlwmanifest_link');
	remove_action('wp_head', 'feed_links_extra', 3);
	remove_action('wp_head', 'start_post_rel_link', 10, 0);
	remove_action('wp_head', 'parent_post_rel_link', 10, 0);
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	
	//Adds Post Thumbanails 
	if (function_exists('add_theme_support') ) {
		add_theme_support('post-thumbnails');
	}
	
	//Add excerpt to pages 
	add_post_type_support('page', 'excerpt');
	
	//Post Thumbnail Size 'large'
	if (function_exists('add_image_size') ) {
		add_image_size('size-large', 652,9999);
	}

	//Post Thumbnail Size 'medium'
	if (function_exists('add_image_size') ) {
		add_image_size('size-medium', 330,9999);
	}
	
	//Post Thumbnail Size 'small'
	if (function_exists('add_image_size') ) {
		add_image_size('size-small', 230,9999);
	}
	
	function my_scripts_method() {
		wp_deregister_script( 'jquery' );
		wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js');
		wp_enqueue_script( 'jquery' );
	}    
	
	add_action('wp_enqueue_scripts', 'my_scripts_method');
	
	// custom excerpt ellipses
	function custom_excerpt_more($more) {
		return '...';
	}
	add_filter('excerpt_more', 'custom_excerpt_more');

	//Creates Custom Post Type
	add_action('init', 'quotes_register');

	function quotes_register() {

	$labels = array(
		'name' => _x('Quotes', 'post type general name'),
		'singular_name' => _x('Quote', 'post type singular name'),
		'add_new' => _x('Add new', 'quote'),
		'add_new_item' => __('Add New quote'),
		'edit_item' => __('Edit quote'),
		'new_item' => __('New quote'),
		'view_item' => __('View quotes'),
		'search_items' => __('Search quotes'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail','comments', 'meta', 'custom-fields')
	  ); 

	register_post_type( 'quotes' , $args );
	}

?>