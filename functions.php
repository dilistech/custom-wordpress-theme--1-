<?php
/**
  * @link https://wehostafrica.com/
 *
 * @package Wehostafrica
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
 


?>

<?php
function wehostafrica_scripts(){
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() .  '/assets/css/font-awesome.min.css', array(), 
    '4.7.0', 'all' );        
    wp_enqueue_style( 'wehostafrica-site-style', get_template_directory_uri() . '/assets/css/styles.css', array(), 
    wp_get_theme()->get( 'Version' ), 'all' );
    wp_enqueue_script( 'jquery-3.0.0', get_template_directory_uri() . '/assets/js/jquery-3.0.0.min.js', 
    array(), '3.0.0', true);
    wp_enqueue_script( 'wehostafrica-app', get_template_directory_uri() . '/assets/js/app.js', 
    array(), '1.0.0', true);
    
            
    if (is_page('contact')) {
        wp_enqueue_style( 'contact', get_template_directory_uri() . '/assets/css/contact.css', array(), 
        '1.0.0', 'all' ); 
    }
    
    elseif(is_page('blog')){
        wp_enqueue_style( 'blog', get_template_directory_uri() . '/assets/css/blog.css', array(), 
        '1.0.0', 'all' ); 
    }
    
   
        
}

add_action( 'wp_enqueue_scripts', 'wehostafrica_scripts' );

function wehostafrica_setup(){
add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );


register_nav_menus(
    array(
        'primary_menu' => __( 'Primary', 'wehostafrica_domain' ),    
        'footer_menu' => __( 'Footer', 'wehostafrica_domain' ),   
    )
);
}
add_action( 'after_setup_theme', 'wehostafrica_setup' );



function wehostafrica_posted_meta(){
	$posted_on = human_time_diff( get_the_time('U') , current_time('timestamp') );
	
	$categories = get_the_category();
	$separator = ', ';
	$output = '';
	$i = 1;
	$number_of_comments = get_comments_number();
	
	if( !empty($categories) ):
		foreach( $categories as $category ):
			if( $i > 1 ): $output .= $separator; endif;
			$output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( 'View all posts in%s', $category->name ) .'">' . esc_html( $category->name ) .'</a>';
			$i++; 
		endforeach;
	endif;
	
	return '<span class="posted-on">Posted <a href="'. esc_url( get_permalink() ) .'">' . $posted_on . '</a> ago</span> / <span class="posted-in">' . $output . '</span>';
}


function wehostafrica_widget_areas(){
    register_sidebar(
        array(
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
        'before_widget'  => '<div>',
        'after_widget'   => '</div>',

    ),
    array(
        'name'  => 'Sidebar',
        'id'    => 'sidebar-1',
        'description' =>'Footer Sidebar'
    )
    );
}
add_action('widgets_init','wehostafrica_widget_areas');


















function wehostafrica_get_post_view() {

    $count = get_post_meta( get_the_ID(), 'post_views_count', true );

    return "$count views";

}

function wehostafrica_set_post_view() {

    $key = 'post_views_count';

    $post_id = get_the_ID();

    $count = (int) get_post_meta( $post_id, $key, true );

    $count++;

    update_post_meta( $post_id, $key, $count );

}

function wehostafrica_posts_column_views( $columns ) {

    $columns['post_views'] = 'Views';

    return $columns;

}

function wehostafrica_posts_custom_column_views( $column ) {

    if ( $column === 'post_views') {

        echo wehostafrica_get_post_view();

    }

}

add_filter( 'manage_posts_columns', 'wehostafrica_posts_column_views' );

add_action( 'manage_posts_custom_column', 'wehostafrica_posts_custom_column_views' );