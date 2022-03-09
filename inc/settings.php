<?php

/**
 * Includes code to customize the theme
 * Go to Appearance > Customize
 */

add_action('customize_register', 'theme_header_customizer');
add_action('customize_register', 'theme_site_identity_customizer');

/*
* Header Section
*/
function theme_header_customizer($wp_customize){
	//adding section in wordpress customizer   
   $wp_customize->add_section('header_settings_section', array('title' => 'Header Settings'));
   //adding setting for Header area
   $wp_customize->add_setting('show_utility_bar', array(
	'default'        => '',
	));
	$wp_customize->add_setting('utility_bar_color', array(
		'default'        => '',
	));
    $wp_customize->add_setting('address', array(
        'default'        => '',
    ));
    $wp_customize->add_setting('address_link', array(
        'default'        => '',
    ));
   $wp_customize->add_setting('phone_number', array(
	'default'        => '',
	));
	$wp_customize->add_setting('email_address', array(
		'default'        => '',
	));
	$wp_customize->add_setting('facebook_url', array(
	'default'        => '',
	));
	$wp_customize->add_setting('instagram_url', array(
	'default'        => '',
	));
	$wp_customize->add_setting('spanish_page', array(
		'default'        => '',
	));
    $wp_customize->add_control('show_utility_bar', array(
		'label'   => 'Show Utility Bar',
		'section' => 'header_settings_section',
		'type'    => 'checkbox',
        'choices' => array(
            'true' => __( 'True' ),
          ),
	));
	$wp_customize->add_control('utility_bar_color', array(
		'label'   => 'Utility Bar Color',
		'section' => 'header_settings_section',
		'type'    => 'select',
        'choices' => array(
            'white' => __( 'White' ),
			'primary' => __( 'Primary' ),
			'dark' => __( 'Dark' ),
			'secondary' => __( 'Secondary' ),
			'peach' => __( 'Peach' ),
			'green' => __( 'Green' ),
			'pink' => __( 'Pink' ),
          ),
	));
    $wp_customize->add_control('address', array(
		'label'   => 'Address',
		'section' => 'header_settings_section',
		'type'    => 'text',
	));
    $wp_customize->add_control('address_link', array(
		'label'   => 'Address Link',
		'section' => 'header_settings_section',
		'type'    => 'text',
	));
	$wp_customize->add_control('phone_number', array(
		'label'   => 'Phone Number',
		'section' => 'header_settings_section',
		'type'    => 'text',
	));
	$wp_customize->add_control('email_address', array(
		'label'   => 'Email Address',
		 'section' => 'header_settings_section',
		'type'    => 'text',
	));
	   $wp_customize->add_control('facebook_url', array(
		'label'   => 'Facebook URL',
		'section' => 'header_settings_section',
		'type'    => 'text',
	));
	   $wp_customize->add_control('instagram_url', array(
		'label'   => 'Instagram URL',
		'section' => 'header_settings_section',
		'type'    => 'text',
	));
	$wp_customize->add_control('spanish_page', array(
		'label'   => 'Spanish Page',
		'section' => 'header_settings_section',
		'type'    => 'dropdown-pages',
	));
}

/*
* Site Identity
*/
function theme_site_identity_customizer($wp_customize){
	//adding section in wordpress customizer   
   $wp_customize->add_setting('logo_width', array(
	'default'        => '',
	));
	$wp_customize->add_control('logo_width', array(
		'label'   => 'Logo Width (px)',
		'section' => 'title_tagline',
		'type'    => 'text',
	));
}
