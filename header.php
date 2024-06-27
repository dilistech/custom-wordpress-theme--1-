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

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <?php wp_head(); ?>



</head>


<body>
    <div id="pre-loader" class="pre-loader">
        <div class="loader">
            <p><span class="gold-color">Gold</span>Tech</p>
            <h6>You're welcome, content is loading...</h6>
        </div>

    </div>

    <header id="header-id" class="display-none">
        <div class="header">
            <nav class="nav-header-menu">
                <ul class="logo">
                    <li><a href="https://degoldtech.com.ng/"><span class="gold-color">Wehostafrica</a></li>
                    <li id="logo-icon" class="logo-icon"><span><a href="#"><img
                                    src="http://localhost:8082/wehostafrica/wp-content/uploads/2021/01/wehostafrica-logo.png"
                                    alt=""></a></span></li>
                </ul>
                <?php
					wp_nav_menu(
						array(
							'menu' 			=> 'primary_menu',
							'theme_location' => 'primary_menu',
							'container'      => 'ul',
							'menu_class'     => 'main-menu',
							

						)
					);
					?>

            </nav>
        </div>
    </header>
    <section id="section-id" class="content display-none">