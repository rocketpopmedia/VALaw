<?php



// Sidebars

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'before_widget' => '<section class="">',
		'after_widget' => '</section>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}

// Add Custom Menus

add_theme_support( 'menus' );
register_nav_menu('topnav', 'Top navigation menu');


// Add Custom Excerpt Lengths

function wpe_excerptlength_index($length) {
    return 160;
}
function wpe_excerptmore($more) {
    return '...<a href="'. get_permalink().'">Read More ></a>';
}

function wpe_excerpt($length_callback='', $more_callback='') {
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

add_filter( 'excerpt_length', 'td_excerptLength' );
function td_excerptLength( $length ) { return 80; }

//* Remove [...] from WordPress excerpts

function afn_customize_excerpt_more( $more ) {
   return '...';
}
add_filter('excerpt_more', 'afn_customize_excerpt_more');

// Add Post Thumbnails

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 50, 50, true );
add_image_size( 'category-thumb', 300, 9999, true );

//Clean your header
remove_action('wp_head', 'rsd_link'); // kill the RSD link
remove_action('wp_head', 'wlwmanifest_link'); // kill the WLW link
remove_action('wp_head', 'index_rel_link'); // kill the index link 
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // kill the prev link 
remove_action('wp_head', 'start_post_rel_link', 10, 0); // kill the start link 
remove_action('wp_head', 'feed_links', 2); // kill post and comment feeds 
remove_action('wp_head', 'feed_links_extra', 3); // kill category, author, and other extra feeds 
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // kill adjacent post links 
remove_action('wp_head', 'wp_generator'); // kill the wordpress version number // Add Custom Post Thumbnails & Taxonomies

// Add Custom Post Thumbnails & Taxonomies
/*

register_post_type('custom', array(
	'label' => __('Custom Post Type'),
	'singular_label' => __('Custom Post Type'),
	'public' => true,
	'show_ui' => true,
	'capability_type' => 'post',
	'hierarchical' => false,
	'rewrite' => true,
	'query_var' => false,
	'supports' => array('title', 'editor', 'author'),
));
add_action( 'init', 'build_taxonomies', 0 );

function build_taxonomies() {
    register_taxonomy( 'taxo', 'custom', array( 'hierarchical' => true, 'label' => 'Custom Taxonomy', 'query_var' => true, 'rewrite' => true ) ); 
}
*/

// Add Custom Meta Boxes

/*
add_action( 'add_meta_boxes', 'cd_add_quotet_meta' );
function cd_add_quote_meta()
{
    add_meta_box( 'quote-meta', __( 'A Custom Meta Box' ), 'cd_quote_meta_cb', 'page', 'normal', 'high' );
}

function cd_quote_meta_cb( $post )
{
    // Get values for filling in the inputs if we have them.
    $customMeta = get_post_meta( $post->ID, '_cd_custom_meta', true );

    // Nonce to verify intention later
    wp_nonce_field( 'save_quote_meta', 'custom_nonce' );
    ?>
    <p>
        <label for="customMeta">The title</label>
         <input type="text" class="widefat" id="customMeta" name="_cd_custom_meta" value="<?php echo $customMeta;?>" />
    </p>    
<?php

}

add_action( 'save_post', 'cd_custom_meta_save' );
function cd_custom_meta_save( $id )
{
    if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;

    if( !isset( $_POST['quote_nonce'] ) || !wp_verify_nonce( $_POST['custom_nonce'], 'save_custom_meta' ) ) return;

    if( !current_user_can( 'edit_post' ) ) return;

    $allowed = array(
        'p' => array()
    );

    if( isset( $_POST['_cd_custom_meta'] ) )
        update_post_meta( $id, '_cd_custom_meta', wp_kses( $_POST['_cd_custom_meta']) );

}
*/

function paginate() {
	global $wp_query, $wp_rewrite;
	$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
	
	$pagination = array(
		'base' => @add_query_arg('page','%#%'),
		'format' => '',
		'total' => $wp_query->max_num_pages,
		'current' => $current,
		'show_all' => true,
		'type' => 'list',
		'next_text' => '&raquo;',
		'prev_text' => '&laquo;'
		);
	
	if( $wp_rewrite->using_permalinks() )
		$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );
	
	if( !empty($wp_query->query_vars['s']) )
		$pagination['add_args'] = array( 's' => get_query_var( 's' ) );
	
	echo paginate_links( $pagination );
}


function scripts_and_styles() {

	wp_enqueue_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js', '','',true);
	wp_enqueue_script('staff', get_template_directory_uri() . '/js/staff.js', 'jquery', '', true);
	wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js', 'jquery', '', true);

	wp_enqueue_style('styles', get_template_directory_uri() . '/css/styles.css');
	wp_enqueue_style('stylesheet', get_template_directory_uri() . '/css/stylesheet.css');
}

add_action('wp_enqueue_scripts', 'scripts_and_styles');



?>