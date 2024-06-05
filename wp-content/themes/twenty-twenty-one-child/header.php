<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

   
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick-theme.css" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/slick.css" />
    
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<section class="header-main-sec">
        <div class="container">
            <div class="header-box">
                <div class="inner-conter-header">
                <div class="logo-image">
                    <?php  echo the_custom_logo(); ?>
                    </div>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class'     => 'menu_navbar_set',
                        )
                    );
                    ?>
                    <div class="hamburger">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
