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

<section class="wrapper blog-content">
    <!-- <h1 class="blog-header"> Blog</h1> -->
    <main>



        <section class="blog-posts">


            <?php
			if( have_posts() ):
				

				while ( have_posts() ) :
					
					the_post();
					get_template_part( 'template-parts/content' );


				endwhile; 
			endif;
		?>

            <div class="pagination">
                <?php
				echo paginate_links();
			?>
            </div>


        </section>
    </main>

    <sidebar>

        <?php
		dynamic_sidebar('sidebar-1');
		?>
    </sidebar>



</section>






<?php get_footer(); ?>