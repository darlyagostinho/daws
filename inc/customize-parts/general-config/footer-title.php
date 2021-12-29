<?php
Kirki::add_section( 'sec_footer_title', array(
  'title'          => esc_html__( 'Título Menus do Rodapé', 'kirki' ),
  'panel'          => 'panel_general_config',
  'priority'       => 160,
) );

//Title Institutional
Kirki::add_field( 'er_dreams', [
	'type'     => 'text',
	'settings' => 'sec_footer_title_institutional',
	'label'    => esc_html__( 'Título Menu Institucional', 'kirki' ),
	'section'  => 'sec_footer_title',
	'default'  => esc_html__( 'Institucional', 'kirki' ),
] );

//Title Categories
Kirki::add_field( 'er_dreams', [
	'type'     => 'text',
	'settings' => 'sec_footer_title_categories',
	'label'    => esc_html__( 'Título Menu Categorias', 'kirki' ),
	'section'  => 'sec_footer_title',
	'default'  => esc_html__( 'Categorias', 'kirki' ),
] );

//Title Call Center
Kirki::add_field( 'er_dreams', [
	'type'     => 'text',
	'settings' => 'sec_footer_title_call_center',
	'label'    => esc_html__( 'Título Menu Central de Atendimento', 'kirki' ),
	'section'  => 'sec_footer_title',
	'default'  => esc_html__( 'Central de Atendimento', 'kirki' ),
] );

//Title My Account
Kirki::add_field( 'er_dreams', [
	'type'     => 'text',
	'settings' => 'sec_footer_title_my_account',
	'label'    => esc_html__( 'Título Menu Minha Conta', 'kirki' ),
	'section'  => 'sec_footer_title',
	'default'  => esc_html__( 'Minha Conta', 'kirki' ),
] );

//pencil title section
function petiscosecia_theme_customizer_edit_pencil_general_config_footer_title( $wp_customize ){
	petiscosecia_theme_customizer_edit_pencil( $wp_customize, 'sec_footer_title_institutional', '.footer__title' );
}