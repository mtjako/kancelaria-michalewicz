<?php
//styles and scripts
function kancelaria_register_styles_and_scripts(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('kancelaria-style', get_template_directory_uri().'/assets/css/style.css', array(), $version, 'all'); 
    wp_enqueue_script('kancelaria-script', get_template_directory_uri().'/assets/scripts/main.js', array(), $version, true); 
}
add_action('wp_enqueue_scripts','kancelaria_register_styles_and_scripts');

//supports
function kancelaria_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','kancelaria_theme_support');

//menu
function kancelaria_menus(){
    $locations = array(
        'primary' => 'Główna nawigacja',
    );
    register_nav_menus($locations);
}
add_action('init','kancelaria_menus');

//customizers
function kancelaria_footer_customizer($wp_customize){
    $wp_customize->add_section('footer', array(
        'title'             => __('Sekcja stopki'), 
        'priority'          => 70,
    ));   
    $wp_customize->add_setting('footer-linkedin', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('footer-facebook', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('footer-instagram', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_control('footer-linkedin',array(
        'label'             => __('🔗 LinkedIn link'),
        'type'              => 'input',
        'section'           => 'footer',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
            'placeholder' => __( '...' ),
          ),
        'settings'          => 'footer-linkedin',    
    ));
    $wp_customize->add_control('footer-facebook',array(
        'label'             => __('🔗 Facebook link'),
        'type'              => 'input',
        'section'           => 'footer',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
            'placeholder' => __( '...' ),
          ),
        'settings'          => 'footer-facebook',    
    ));
    $wp_customize->add_control('footer-instagram',array(
        'label'             => __('🔗 Instagram link'),
        'type'              => 'input',
        'section'           => 'footer',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
            'placeholder' => __( '...' ),
          ),
        'settings'          => 'footer-instagram',    
    ));
}
add_action( 'customize_register', 'kancelaria_footer_customizer' );