<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package er_dreams
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <?php wp_head(); ?>

  <?php if ( true == get_theme_mod( 'sec_google_analytics_hide', true ) )  : ?>
    <?php echo get_theme_mod( 'set_google_analytics_config' ); ?>  
  <?php endif;?>

</head>


<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>