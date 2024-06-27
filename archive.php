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
	the_archive_title('<h1 class="">','</h1>');
?>

<?php
	while ( have_posts() ) :
		the_post();
		get_template_part( 'template-parts/content','archive');
	endwhile; 
?>

<div class="pagination">
    <?php
previous_post_link();
?>
</div>


<?php get_footer(); ?>