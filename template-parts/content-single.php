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

    <div class="entry-header text-center">

        <?php the_title( '<h1 class="blog-single-title">', '</h1>'); ?>

    </div>

    <div class="entry-content">

        <?php the_content(); ?>

    </div>

    <div>
        <?php
           comments_template()
        ?>
    </div>
    <div>
        <?php get_template_part( 'template-parts/related','article'); ?>
    </div>










</article>