<?php
/**
 * @link https://dilistech.com/
 *
 * @package Dilistech
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */?>
<?php
$tags = wp_get_post_terms( get_queried_object_id(), 'post_tag', ['fields' => 'ids'] );
$args = [
    'post__not_in'        => array( get_queried_object_id() ),
    'posts_per_page'      => 5,
    'ignore_sticky_posts' => 1,
    'orderby'             => 'rand',
    'tax_query' => [
        [
            'taxonomy' => 'post_tag',
            'terms'    => $tags
        ]
    ]
];
$my_query = new wp_query( $args );
if( $my_query->have_posts() ) {
    echo '<div id="related" class="related"><h4>Related Posts</h4>';
        while( $my_query->have_posts() ) {
            $my_query->the_post(); ?>
            <div class="related-posts">

                <h5><a href="<?php the_permalink()?>" rel="bookmark" title="<?php the_title(); ?>" rel="nofollow"><?php the_title(); ?></a></h5>
                

            </div>
        <?php }
        wp_reset_postdata();
    echo '</div><!--related-->';
}
?> 