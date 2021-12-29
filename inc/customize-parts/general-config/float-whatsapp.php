<?php
Kirki::add_section( 'sec_float_whatsapp', array(
  'title'          => esc_html__( 'Botão Flutuante do WhatsApp', 'kirki' ),
  'panel'          => 'panel_general_config',
  'priority'       => 160,
) );

//hide section
Kirki::add_field( 'er_dreams', [
	'type'        => 'toggle',
	'settings'    => 'set_float_whatsapp_btn_hide',
	'label'       => esc_html__( 'Exibir o botão Flutuante do WhatsApp?', 'kirki' ),
	'section'     => 'sec_float_whatsapp',
	'default'     => '1',
] );

//Slide speed
Kirki::add_field( 'er_dreams', [
	'type'        => 'text',
	'settings'    => 'set_float_whatsapp_phone',
	'label'       => esc_html__( 'Telefone do WhatsApp', 'kirki' ),
	'description'       => esc_html__( 'Ex.: (62) 3983-8400', 'kirki' ),
	'section'     => 'sec_float_whatsapp',
	'default'     => '(62) 3983-8400',
] );

//pencil title section
function petiscosecia_theme_customizer_edit_pencil_float_whatsapp_btn( $wp_customize ){
	petiscosecia_theme_customizer_edit_pencil( $wp_customize, 'set_float_whatsapp_btn_hide', '.btn-float-whatsapp' );
}
