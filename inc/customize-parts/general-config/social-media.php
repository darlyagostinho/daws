<?php
Kirki::add_section( 'sec_social_media', array(
  'title'          => esc_html__( 'Redes Sociais', 'kirki' ),
  'description'    => esc_html__( 'Seção Redes Sociais', 'kirki' ),
  'panel'          => 'panel_general_config',
  'priority'       => 160,
) );

//hide section
Kirki::add_field( 'er_dreams', [
	'type'        => 'toggle',
	'settings'    => 'set_social_media_hide',
	'label'       => esc_html__( 'Exibir a Seção Redes Sociais?', 'kirki' ),
	'section'     => 'sec_social_media',
	'priority'    => 0,
] );

//Title
Kirki::add_field( 'er_dreams', [
	'type'     => 'text',
	'settings' => 'set_social_media_title',
	'label'    => esc_html__( 'Título da Seção Redes Sociais', 'kirki' ),
	'section'  => 'sec_social_media',
	'default'  => esc_html__( 'Redes Sociais', 'kirki' ),
	'priority' => 1,
] );

//Facebook - Checkbox
Kirki::add_field( 'er_dreams', [
	'type'     => 'checkbox',
	'settings' => 'set_social_media_facebook_hide',
	'label'    => esc_html__( 'Facebook', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Facebook - link
Kirki::add_field( 'er_dreams', [
	'type'     => 'link',
	'settings' => 'set_social_media_facebook_link',
	'label'    => esc_html__( 'Link do Facebook', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Instagram - Checkbox
Kirki::add_field( 'er_dreams', [
	'type'     => 'checkbox',
	'settings' => 'set_social_media_instagram_hide',
	'label'    => esc_html__( 'Instagram', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Instagram - link
Kirki::add_field( 'er_dreams', [
	'type'     => 'link',
	'settings' => 'set_social_media_instagram_link',
	'label'    => esc_html__( 'Link do Instagram', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Tiktok - Checkbox
Kirki::add_field( 'er_dreams', [
	'type'     => 'checkbox',
	'settings' => 'set_social_media_tiktok_hide',
	'label'    => esc_html__( 'TikTok', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Tiktok - link
Kirki::add_field( 'er_dreams', [
	'type'     => 'link',
	'settings' => 'set_social_media_tiktok_link',
	'label'    => esc_html__( 'Link do TikTok', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Youtube - Checkbox
Kirki::add_field( 'er_dreams', [
	'type'     => 'checkbox',
	'settings' => 'set_social_media_youtube_hide',
	'label'    => esc_html__( 'Youtube', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//Youtube - link
Kirki::add_field( 'er_dreams', [
	'type'     => 'link',
	'settings' => 'set_social_media_youtube_link',
	'label'    => esc_html__( 'Link do Youtube', 'kirki' ),
	'section'  => 'sec_social_media',
] );

//pencil title section
function petiscosecia_theme_customizer_edit_pencil_general_config_social_media( $wp_customize ){
	petiscosecia_theme_customizer_edit_pencil( $wp_customize, 'set_social_media_title', '.social__title' );
}
