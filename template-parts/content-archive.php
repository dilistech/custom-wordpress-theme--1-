<?php
/**
  * @link https://wehostafrica.com/
 *
 * @package Wehostafrica
 * @subpackage Twenty_Twenty_One
 * @since 1.0.0
 */
 
?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <?php if( has_post_thumbnail() ): 
			$featured_image = wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) );
		?>

    <a class="post-image" href="<?php the_permalink(); ?>">
        <div class="blog-home-post-image" style="background-image: url(<?php echo $featured_image; ?>);"></div>
    </a>

    <?php endif; ?>

    <?php the_title( '<h1 class="entry-title"><a href="'. esc_url( get_permalink() ) .'" rel="bookmark">', '</a></h1>'); ?>







    <div class="entry-content">




        <div class="button-container text-center">
            <a href="<?php the_permalink(); ?>" class="btn btn-sunset"><?php _e( 'Read More' ); ?></a>
        </div>

    </div><!-- .entry-content -->


</article>