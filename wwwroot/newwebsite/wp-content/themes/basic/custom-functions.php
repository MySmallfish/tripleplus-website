<?php 

function sp_clean_static_url($content) {
   $thisURL = get_bloginfo('url');
   $stuff = str_replace(' src=\"'.$thisURL, ' src=\"', $content );
   $stuff = str_replace(' href=\"'.$thisURL, ' href=\"', $stuff );
	return $stuff;
}
function clean_static_url($content) {
   $thisURL = get_bloginfo('url');
   $stuff = str_replace( $thisURL, '', $content );
	return $stuff;
}

add_filter('content_save_pre','sp_clean_static_url','99');
add_filter('bloginfo_url', 'sp_clean_static_url');
add_filter('theme_root_uri', 'sp_clean_static_url');
add_filter('stylesheet_directory_uri', 'sp_clean_static_url');
add_filter('template_directory_uri', 'sp_clean_static_url');
add_filter('the_permalink', 'sp_clean_static_url');
add_filter('wp_list_pages', 'sp_clean_static_url');
add_filter('wp_list_categories', 'sp_clean_static_url');
add_filter('wp_nav_menu', 'sp_clean_static_url');
add_filter('wp_get_attachment_url', 'sp_clean_static_url');
add_filter('wp_get_attachment_link', 'sp_clean_static_url');
add_filter('the_content_more_link', 'sp_clean_static_url');
add_filter('the_tags', 'sp_clean_static_url');
add_filter('get_pagenum_link', 'sp_clean_static_url');
add_filter('get_comment_link', 'sp_clean_static_url');
add_filter('month_link', 'sp_clean_static_url');
add_filter('day_link', 'sp_clean_static_url');
add_filter('year_link', 'sp_clean_static_url');
add_filter('tag_link', 'sp_clean_static_url');
add_filter('the_author_posts_link', 'sp_clean_static_url');

//function change_attachment_file_to_relative($post, $attachment) {
//if ( substr($post['post_mime_type'], 0, 5) == 'image' ) {
//   
//        $post['guid'] = clean_static_url($post['guid']);
//      
//}
//return $post;
//}
//
//add_filter('attachment_fields_to_save', 'change_attachment_file_to_relative',99);
//


/*
* Creating a function to create our CPT
*/
function create_productCategory_taxonomy() {

// Add new taxonomy, make it hierarchical like categories
//first do the translations part for GUI

  $labels = array(
    'name' => _x( 'Product category', 'taxonomy general name' ),
    'singular_name' => _x( 'Topic', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Product category' ),
    'all_items' => __( 'All Product category' ),
    'parent_item' => __( 'Parent Topic' ),
    'parent_item_colon' => __( 'Parent Topic:' ),
    'edit_item' => __( 'Edit Topic' ), 
    'update_item' => __( 'Update Topic' ),
    'add_new_item' => __( 'Add New Topic' ),
    'new_item_name' => __( 'New Topic Name' ),
    'menu_name' => __( 'Product category' ),
  ); 	

// Now register the taxonomy

  register_taxonomy('productcategory',array('products'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'productcategory' ),
  ));

}
add_action( 'init', 'create_productCategory_taxonomy', 0 );

function product_post_type() {

// Set UI labels for Custom Post Type
	$labels = array(
		'name'                => _x( 'Products', 'Post Type General Name', 'twentythirteen' ),
		'singular_name'       => _x( 'Product', 'Post Type Singular Name', 'twentythirteen' ),
		'menu_name'           => __( 'Products', 'twentythirteen' ),
		'parent_item_colon'   => __( 'Parent Product', 'twentythirteen' ),
		'all_items'           => __( 'All Products', 'twentythirteen' ),
		'view_item'           => __( 'View Product', 'twentythirteen' ),
		'add_new_item'        => __( 'Add New Product', 'twentythirteen' ),
		'add_new'             => __( 'Add New', 'twentythirteen' ),
		'edit_item'           => __( 'Edit Product', 'twentythirteen' ),
		'update_item'         => __( 'Update Product', 'twentythirteen' ),
		'search_items'        => __( 'Search Product', 'twentythirteen' ),
		'not_found'           => __( 'Not Found', 'twentythirteen' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
	);
	
// Set other options for Custom Post Type
	
	$args = array(
		'label'               => __( 'Products', 'twentythirteen' ),
		'description'         => __( 'Product Details', 'twentythirteen' ),
		'labels'              => $labels,
		// Features this CPT supports in Post Editor
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		// You can associate this CPT with a taxonomy or custom taxonomy. 
		'taxonomies'          => array( 'productcategory' ),
		/* A hierarchical CPT is like Pages and can have
		* Parent and child items. A non-hierarchical CPT
		* is like Posts.
		*/	
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
		
	);
	
	// Registering your Custom Post Type
	register_post_type( 'products', $args );
}

/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/

add_action( 'init', 'product_post_type', 0 );

?>