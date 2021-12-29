<?php
require_once get_template_directory() . '/inc/kirki-config.php';
require_once get_template_directory() . '/inc/customize-general/pencil.php';
require_once get_template_directory() . '/inc/customize-general/panels.php';
require_once get_template_directory() . '/inc/customize-parts/about/history.php';
require_once get_template_directory() . '/inc/customize-parts/about/team.php';
require_once get_template_directory() . '/inc/customize-parts/about/gallery.php';
require_once get_template_directory() . '/inc/customize-parts/contact/contact.php';
require_once get_template_directory() . '/inc/customize-parts/contact/form.php';
require_once get_template_directory() . '/inc/customize-parts/contact/map.php';
require_once get_template_directory() . '/inc/customize-parts/faq/faq.php';
require_once get_template_directory() . '/inc/customize-parts/general-config/social-media.php';
require_once get_template_directory() . '/inc/customize-parts/general-config/footer-title.php';
require_once get_template_directory() . '/inc/customize-parts/general-config/float-whatsapp.php';
require_once get_template_directory() . '/inc/customize-parts/general-config/min-buy.php';
require_once get_template_directory() . '/inc/customize-parts/general-config/google-config.php';
require_once get_template_directory() . '/inc/customize-parts/home/slide.php';
require_once get_template_directory() . '/inc/customize-parts/home/product-categories.php';



function petiscosecia_theme_customizer( $wp_customize ){
  petiscosecia_theme_customizer_edit_pencil_about_history( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_about_team( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_about_gallery( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_contact_contact( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_contact_form( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_contact_map( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_faq( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_general_config_social_media( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_float_whatsapp_btn( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_general_config_footer_title( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_general_config_min_buy( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_home_slider( $wp_customize );
  petiscosecia_theme_customizer_edit_pencil_home_product_category( $wp_customize );
}

add_action( 'customize_register', 'petiscosecia_theme_customizer' );