<?php
/**
 * The template for displaying About Page
 * Template Name: About Page
 * Template Post Type: page
 * @link https://degoldtech.com.ng/
 *
 * @package de Goldtech
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */


	get_header();
?>
	

		
<?php

	if( have_posts() ):
		
		while ( have_posts() ) :
			the_post();
			

			get_template_part( 'template-parts/page', 'about' );
	

		endwhile; 
	endif;
?>

			
				
<?php get_footer(); ?>
