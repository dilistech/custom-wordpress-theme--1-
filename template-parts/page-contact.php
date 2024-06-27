<?php
/**
 * @link https://degoldtech.com.ng/
 *
 * @package de Goldtech
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */?>
<main id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <section class="contact-page">
        <div class="contact-bg"></div>
        <div class="wrapper">
            <div class="info">
                <div class="contact-info">
                    <div>Phone: +234-816-258-7097</div>
                    <div>Email: info@degoldtech.com.ng</div>
                </div>
            </div>
        
             <?php
                dynamic_sidebar('sidebar-1');
            ?>
        </div>

    </section>

	
	
</main>