<?php
/**
  * @link https://wehostafrica.com/
 *
 * @package Wehostafrica
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
 

get_header();
?>



<?php
	while ( have_posts() ) :
		the_post();	

		get_template_part( 'template-parts/front', 'page' );

	endwhile;
?>
<?php get_footer();?>