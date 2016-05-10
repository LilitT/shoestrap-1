<?php

Shoestrap_Kirki::add_field( array(
	'type'        => 'radio-buttonset',
	'settings'    => 'header_position',
	'label'       => __( 'Header Location', 'shoestrap' ),
	'section'     => 'header',
	'default'     => 'top',
	'priority'    => 10,
	'choices'     => array(
		'top'     => esc_attr__( 'Top', 'shoestrap' ),
		'left'    => esc_attr__( 'Left', 'shoestrap' ),
		'right'   => esc_attr__( 'Right', 'shoestrap' ),
	),
));

Shoestrap_Kirki::add_field( array(
	'type'        => 'radio-buttonset',
	'settings'    => 'navigation_mode_top',
	'label'       => __( 'Navigation Mode', 'shoestrap' ),
	'section'     => 'header',
	'default'     => 'navbar',
	'priority'    => 10,
	'choices'     => array(
		'none'    => esc_attr__( 'None', 'shoestrap' ),
		'navbar'  => esc_attr__( 'Navbar', 'shoestrap' ),
		'pills'   => esc_attr__( 'Pills', 'shoestrap' ),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_position',
			'operator' => '==',
			'value'    => 'top',
		),
	),
));

Shoestrap_Kirki::add_field( array(
	'type'        => 'color',
	'settings'    => 'header_background_color',
	'label'       => __( 'Menu Background', 'shoestrap' ),
	'section'     => 'header',
	'default'     => 'rgba(0,0,0,0)',
	'priority'    => 10,
	'transport'   => 'refresh',
	'choices'     => array(
		'alpha'   => true,
	),
	'output'      => array(
		array(
			'element'  => array(
				'#site-navigation',
				'.top-bar',
				'.top-bar ul.submenu',
				'.is-dropdown-submenu',
			),
			'property' => 'background',
		),
	),
));

Shoestrap_Kirki::add_field( array(
	'type'        => 'dashicons',
	'settings'    => 'nav_pills_align',
	'label'       => __( 'Pills alignment', 'shoestrap' ),
	'section'     => 'header',
	'default'     => 'center',
	'priority'    => 10,
	'choices'     => array(
		'left'    => 'editor-alignleft',
		'center'  => 'editor-aligncenter',
		'right'   => 'editor-alignright',
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_position',
			'operator' => '==',
			'value'    => 'top',
		),
		array(
			'setting'  => 'navigation_mode_top',
			'operator' => '==',
			'value'    => 'pills',
		),
	),
));

Shoestrap_Kirki::add_field( array(
	'type'        => 'spacing',
	'settings'    => 'main_nav_margins',
	'label'       => __( 'Navigation Top & Bottom Margins', 'shoestrap' ),
	'section'     => 'header',
	'transport'   => 'auto',
	'default'     => array(
		'top'     => '1.5rem',
		'bottom'  => '1.5rem',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element'  => array(
				'#site-main-nav-pills',
				'#site-main-nav-navbar'
			),
			'property' => 'margin',
		),
	),
	'active_callback' => array(
		array(
			'setting'  => 'header_position',
			'operator' => '==',
			'value'    => 'top',
		),
		array(
			'setting'  => 'navigation_mode_top',
			'operator' => '!=',
			'value'    => 'none',
		),
	),
) );
