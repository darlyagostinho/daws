<?php
Kirki::add_section( 'sec_min_buy', array(
  'title'          => esc_html__( 'Valor Mínimo Compra', 'kirki' ),
  'description'    => esc_html__( 'Seção Valor Mínimo Compra', 'kirki' ),
  'panel'          => 'panel_general_config',
  'priority'       => 160,
) );

//hide section
Kirki::add_field( 'er_dreams', [
	'type'        => 'toggle',
	'settings'    => 'set_min_buy_hide',
	'label'       => esc_html__( 'Exibir Valor Mínimo para Compra?', 'kirki' ),
	'section'     => 'sec_min_buy',
	'priority'    => 0,
  'default'     => 1,
] );

Kirki::add_field( 'er_dreams', [
	'type'        => 'text',
	'settings'    => 'set_min_buy_currency',
	'label'       => esc_html__( 'Símbolo monetário', 'kirki' ),
  'description'       => esc_html__( 'Ex.: R$', 'kirki' ),
	'section'     => 'sec_min_buy',
  'default'     => esc_html__( 'R$', 'kirki' ),
] );

Kirki::add_field( 'er_dreams', [
	'type'        => 'text',
	'settings'    => 'set_min_buy_value',
	'label'       => esc_html__( 'Valor mínimo da compra', 'kirki' ),
  'description'       => esc_html__( 'Ex.: 200', 'kirki' ),
	'section'     => 'sec_min_buy',
  'default'     => esc_html__( '200', 'kirki' ),
] );

Kirki::add_field( 'er_dreams', [
	'type'        => 'text',
	'settings'    => 'set_min_buy_aditional_text',
	'label'       => esc_html__( 'Texto complementar para o valor mínimo', 'kirki' ),
  'description'       => esc_html__( 'Ex.: para entrega em Goiânia e Aparecida de Goiânia.', 'kirki' ),
	'section'     => 'sec_min_buy',
  'default'     => esc_html__( 'para entrega em Goiânia ou Aparecida de Goiânia.', 'kirki' ),
] );




//pencil title section
function petiscosecia_theme_customizer_edit_pencil_general_config_min_buy( $wp_customize ){
	petiscosecia_theme_customizer_edit_pencil( $wp_customize, 'set_min_buy_hide', '.min_buy__info' );
}
