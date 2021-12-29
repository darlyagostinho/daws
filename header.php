<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package erdreams
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

  <header class="header__main">
    <div class="container">
      <div class="row header__wrapper">
        <div class="col-3 hamburger__menu__btn__wrapper">
          <button type="button" class="hamburger__menu__btn" aria-haspopup="true" aria-controls="header__mobile__menu"
            aria-expanded="false" aria-label="Abrir Menu">
            <div class="hamburger__menu__bar"></div>
            <div class="hamburger__menu__bar"></div>
            <div class="hamburger__menu__bar"></div>
          </button>
        </div>
        <div class="col-5 col-xl-2 text__center logo__wrapper">
          <div class="logo">
            <?php the_custom_logo(); ?>
          </div>
        </div>
        <div class="col-3 text__center header__mobile__cart__icon">
          <a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver Carrinho' ); ?>" class="position__relative">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 22.216 28.43">
              <path
                d="M-436.189,94.372a4.876,4.876,0,0,1,4.746-5.685,4.873,4.873,0,0,1,4.747,5.685c.286,0,.568.005.849,0a4.108,4.108,0,0,1,1.742.266,3.669,3.669,0,0,1,2.377,3.2c.352,3.63.673,7.264,1,10.9.129,1.414.277,2.826.373,4.243a3.768,3.768,0,0,1-3.9,4.124c-4.743,0-9.486-.047-14.228.019a3.924,3.924,0,0,1-4.041-4.5c.274-2.33.439-4.671.652-7.008.238-2.611.46-5.224.72-7.833a3.747,3.747,0,0,1,3.759-3.4C-437,94.367-436.608,94.372-436.189,94.372Zm0,1.9c-.5,0-.961-.035-1.42.007a1.848,1.848,0,0,0-1.656,1.638c-.132,1.325-.244,2.65-.364,3.976q-.249,2.738-.5,5.478c-.174,1.914-.36,3.827-.515,5.743a1.866,1.866,0,0,0,1.968,2.082q7.232,0,14.465,0a1.867,1.867,0,0,0,1.958-2.092c-.093-1.248-.218-2.494-.331-3.741q-.28-3.092-.564-6.184c-.16-1.757-.311-3.516-.484-5.272a1.776,1.776,0,0,0-1.461-1.584,14.1,14.1,0,0,0-1.611-.086c0,.672.007.737,0,1.357a.946.946,0,0,1-.961.954.95.95,0,0,1-.933-.955c-.009-.522,0-.491,0-1.015v-.3h-5.692c0,.587,0,.6,0,1.174a.971.971,0,0,1-.941,1.094.967.967,0,0,1-.956-1.082C-436.187,96.9-436.186,96.88-436.186,96.275Zm1.848-1.927h5.738c0-.357.009-.692,0-1.026a2.849,2.849,0,0,0-2.533-2.724,2.8,2.8,0,0,0-3.031,2.062A11.866,11.866,0,0,0-434.338,94.348Z"
                transform="translate(442.558 -88.687)" fill="#A97975"></path>
            </svg>
            <span class="shop__cart__badge mobile"><?php echo WC()->cart->get_cart_contents_count() ;?></span>
          </a>
        </div>
        <nav class="col-xl-6 nav__header__desktop">
          <!-- header-nav -->
          <?php 
          wp_nav_menu(
            array(
              'theme_location' => 'header',
              'menu_id' => 'header__nav__menu',
              'container_class' => 'container',
            )
          );
        ?>
          <!-- #header-nav -->
        </nav>
        <div class="col-xl-4 nav__header__desktop__icons__wrapper">
          <ul class="flex__container flex__align__items__center">
            <li class="nav__item p__0">
              <?php aws_get_search_form( true ); ?>
            </li>
            <li class="nav__item">
              <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"
                title="<?php echo erdreams_get_logged_user() ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="26.299" height="26.251" viewBox="0 0 26.299 26.251">
                  <g transform="translate(0 0)">
                    <path
                      d="M-127.945-60.818a13.142,13.142,0,0,1,13.17,13.148,13.144,13.144,0,0,1-13.275,13.1,13.157,13.157,0,0,1-13.024-13.09A13.14,13.14,0,0,1-127.945-60.818Zm-8.286,20.629a8.4,8.4,0,0,1,7.589-6.535c4.682-.239,7.6,2.151,9.046,6.571a10.34,10.34,0,0,0,1.556-2.167,10.988,10.988,0,0,0,1.189-7.478,11.234,11.234,0,0,0-11.119-9.165,11.27,11.27,0,0,0-11.04,9.2,11.158,11.158,0,0,0,.247,5.129A10.4,10.4,0,0,0-136.231-40.189Zm7.422,3.749a12.113,12.113,0,0,0,7.244-1.968.4.4,0,0,0,.21-.43c-.05-.367-.066-.741-.147-1.1a6.548,6.548,0,0,0-7.276-5.124,6.589,6.589,0,0,0-5.719,6.178.476.476,0,0,0,.22.485A10.857,10.857,0,0,0-128.809-36.44Z"
                      transform="translate(141.074 60.818)" fill="#fff"></path>
                    <path
                      d="M-28.325-12.894a4.7,4.7,0,0,1,4.676,4.656,4.7,4.7,0,0,1-4.675,4.719,4.7,4.7,0,0,1-4.718-4.7A4.7,4.7,0,0,1-28.325-12.894Zm-.018,1.875a2.819,2.819,0,0,0-2.821,2.808,2.822,2.822,0,0,0,2.813,2.817,2.821,2.821,0,0,0,2.822-2.837A2.823,2.823,0,0,0-28.343-11.019Z"
                      transform="translate(41.496 16.644)" fill="#fff"></path>
                  </g>
                </svg>
              </a>
            </li>
            <li class="nav__item position__relative">
              <a href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver Carrinho' ); ?>">
                <svg xmlns="http://www.w3.org/2000/svg" width="22.216" height="28.43" viewBox="0 0 22.216 28.43">
                  <path
                    d="M-436.189,94.372a4.876,4.876,0,0,1,4.746-5.685,4.873,4.873,0,0,1,4.747,5.685c.286,0,.568.005.849,0a4.108,4.108,0,0,1,1.742.266,3.669,3.669,0,0,1,2.377,3.2c.352,3.63.673,7.264,1,10.9.129,1.414.277,2.826.373,4.243a3.768,3.768,0,0,1-3.9,4.124c-4.743,0-9.486-.047-14.228.019a3.924,3.924,0,0,1-4.041-4.5c.274-2.33.439-4.671.652-7.008.238-2.611.46-5.224.72-7.833a3.747,3.747,0,0,1,3.759-3.4C-437,94.367-436.608,94.372-436.189,94.372Zm0,1.9c-.5,0-.961-.035-1.42.007a1.848,1.848,0,0,0-1.656,1.638c-.132,1.325-.244,2.65-.364,3.976q-.249,2.738-.5,5.478c-.174,1.914-.36,3.827-.515,5.743a1.866,1.866,0,0,0,1.968,2.082q7.232,0,14.465,0a1.867,1.867,0,0,0,1.958-2.092c-.093-1.248-.218-2.494-.331-3.741q-.28-3.092-.564-6.184c-.16-1.757-.311-3.516-.484-5.272a1.776,1.776,0,0,0-1.461-1.584,14.1,14.1,0,0,0-1.611-.086c0,.672.007.737,0,1.357a.946.946,0,0,1-.961.954.95.95,0,0,1-.933-.955c-.009-.522,0-.491,0-1.015v-.3h-5.692c0,.587,0,.6,0,1.174a.971.971,0,0,1-.941,1.094.967.967,0,0,1-.956-1.082C-436.187,96.9-436.186,96.88-436.186,96.275Zm1.848-1.927h5.738c0-.357.009-.692,0-1.026a2.849,2.849,0,0,0-2.533-2.724,2.8,2.8,0,0,0-3.031,2.062A11.866,11.866,0,0,0-434.338,94.348Z"
                    transform="translate(442.558 -88.687)" fill="#fff"></path>
                </svg>
                <span class="shop__cart__badge"><?php echo WC()->cart->get_cart_contents_count() ;?></span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!--mobile search form-->
    <div class="row g-0 header__mobile__search__form mt__1rem">
      <div class="col-12">
      <?php aws_get_search_form( true ); ?>
      </div>
    </div>
    <!--#mobile search form-->

    <!--mobile menu-->
    <?php 
      wp_nav_menu(
        array(
          'theme_location' => 'mobile',
          'menu_id' => 'header__mobile__menu',
          'menu_class' => 'header__mobile__menu',
          'container_class' => 'container',
        )
      );
    ?>
    <!--#mobile menu-->
  </header>