<?php
function petiscosecia_theme_customizer_edit_pencil( $wp_customize, $setting_id, $selectorCss ){
  $wp_customize->selective_refresh->add_partial(
    $setting_id, 
    array(
      'selector'  => $selectorCss,
    ));
}
