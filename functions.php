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
        'priority'          => 72,
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

//customizer
function kancelaria_hero_customizer($wp_customize){
    $wp_customize->add_section('baner', array(
        'title'             => __('Sekcja hero'), 
        'priority'          => 70,
    ));   
    $wp_customize->add_setting('baner-title', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('baner-subtitle', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('baner-img', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_control('baner-title',array(
        'label'             => __('📝 Tytuł'),
        'type'              => 'input',
        'section'           => 'baner',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'baner-title',    
    ));
    $wp_customize->add_control('baner-subtitle',array(
        'label'             => __('📝 Podtytuł'),
        'type'              => 'input',
        'section'           => 'baner',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'baner-subtitle',    
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'baner-img', array(
        'label'             => __('🖼️ Zdjęcie główne'),
        'section'           => 'baner',
        'settings'          => 'baner-img',    
    )));
}
add_action( 'customize_register', 'kancelaria_hero_customizer' );

//customizer contact
function kancelaria_contact_customizer($wp_customize){
    $wp_customize->add_section('contact', array(
        'title'             => __('Sekcja kontaktowa'), 
        'priority'          => 71,
    ));  
    $wp_customize->add_setting('contact-text', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    )); 
    $wp_customize->add_setting('contact-phone', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('contact-mail', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('contact-card', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('contact-addres', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('contact-img', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_control('contact-text',array(
        'label'             => __('📝 Tekst'),
        'type'              => 'textarea',
        'section'           => 'contact',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'contact-text',    
    ));
    $wp_customize->add_control('contact-phone',array(
        'label'             => __('📱 Numer telefonu'),
        'type'              => 'input',
        'section'           => 'contact',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'contact-phone',    
    ));
    $wp_customize->add_control('contact-mail',array(
        'label'             => __('✉️ E-mail'),
        'type'              => 'input',
        'section'           => 'contact',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'contact-mail',    
    ));
    $wp_customize->add_control('contact-card',array(
        'label'             => __('💵 Numer konta'),
        'type'              => 'input',
        'section'           => 'contact',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'contact-card',    
    ));
    $wp_customize->add_control('contact-addres',array(
        'label'             => __('🗺️ Adres'),
        'type'              => 'input',
        'section'           => 'contact',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'contact-addres',    
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'contact-img', array(
        'label'             => __('🖼️ Zdjęcie'),
        'section'           => 'contact',
        'settings'          => 'contact-img',    
    )));
}
add_action( 'customize_register', 'kancelaria_contact_customizer' );

//about customizer
function kancelaria_about_customizer($wp_customize){
    $wp_customize->add_section('about', array(
        'title'             => __('Sekcja o mnie'), 
        'priority'          => 71,
    ));   
    $wp_customize->add_setting('about-text', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_setting('about-img', array(
        'transport'         => 'refresh',
        'capability'        => 'edit_theme_options',
        'height'         => 325,
    ));
    $wp_customize->add_control('about-text',array(
        'label'             => __('📝 Tekst'),
        'type'              => 'textarea',
        'section'           => 'about',
        'input_attrs' => array(
            'class' => '',
            'style' => '',
          ),
        'settings'          => 'about-text',    
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about-img', array(
        'label'             => __('🖼️ Zdjęcie profilowe'),
        'section'           => 'about',
        'settings'          => 'about-img',    
    )));
}
add_action( 'customize_register', 'kancelaria_about_customizer' );
