<?php
Kirki::add_section( 'sec_google_config', array(
  'title'          => esc_html__( 'Configurações Google', 'kirki' ),
  'description'    => esc_html__( 'Seção Configurações Google', 'kirki' ),
  'panel'          => 'panel_general_config',
  'priority'       => 160,
) );

//hide section
Kirki::add_field( 'er_dreams', [
	'type'        => 'toggle',
	'settings'    => 'sec_google_analytics_hide',
	'label'       => esc_html__( 'Exibir Google Analytics (Monitar Visitas no Site)?', 'kirki' ),
	'section'     => 'sec_google_config',
	'default'     => '1',
	'priority'    => 0,
] );

Kirki::add_field( 'er_dreams', [
	'type'        => 'code',
	'settings'    => 'set_google_analytics_config',
	'label'       => esc_html__( 'Copie e cole o script fornecedido na Conta do Google Analytics', 'kirki' ),
  'description'       => esc_html__( 'Tag de site global (gtag.js)', 'kirki' ),
	'section'     => 'sec_google_config',
  'default'     => '',
	'choices'     => [
		'language' => 'js',
	],
] );