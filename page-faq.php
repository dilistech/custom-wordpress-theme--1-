<?php
/**
 * The template for displaying Faq Page
 * Template Name: Contact Page
 * Template Post Type: page
  * @link https://dilistech.com/
 *
 * @package DilisTech
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>
	
	
		

<?php

	if( have_posts() ):
	
		while ( have_posts() ) :
			the_post();		

			get_template_part( 'template-parts/page', 'faq' );

		endwhile; 
	endif;
?>


<?php get_footer(); ?>
