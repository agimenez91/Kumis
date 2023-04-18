<?php

    function my_scripts_and_css() {

        //  REMOVE GUTENBERG CSS
        wp_dequeue_style ( 'wp-block-library' );
        wp_dequeue_style ( 'wp-block-library-theme' );
        wp_dequeue_style ( 'wc-blocks-style' );

        if ( !is_admin() ) {
        // THEME SCRIPTS
        wp_enqueue_script ( 'js-main', get_stylesheet_directory_uri() . '/js/index.js' );

        // THEME STYLES
        // VERSIÓN wp_enqueue_style ( 'css-main', get_stylesheet_uri() );
        wp_enqueue_style ('css-main', get_stylesheet_uri(),'', filemtime ( get_template_directory() . '/style.css' ),);
        }
    }

    add_action ( 'wp_enqueue_scripts', 'my_scripts_and_css', 100 );

    //  AÑADIR SOPORTE PARA...

        add_theme_support ( 'title-tag' );
        add_theme_support ( 'post-thumbnails' );
        add_post_type_support ( 'page', 'excerpt' );

    //  REGISTRO DE MENÚS

        register_nav_menu ( 'header-menu', 'Cabecera del sitio' );
        register_nav_menu ( 'footer-menu-legal', 'Menu de enlaces legales' );

    // REGISTRO DE WIDGETS

        function custom_theme_widgets_init() {

            // Primera zona de widgets
            register_sidebar( array(
                'name' => __( 'Area footer izquierda', 'kumis' ),
                'id' => 'widgets-1',
                'description' => __( 'Area de widgets para el tema kumis', 'kumis' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            ) );
        
            // Segunda zona de widgets
            register_sidebar( array(
                'name' => __( 'Area footer derecha', 'kumis' ),
                'id' => 'widgets-3',
                'description' => __( 'Tercera area de widgets para el tema kumis', 'kumis' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            ) );
        
            // Tercera zona de widgets
            register_sidebar( array(
                'name' => __( 'Area footer abajo', 'kumis' ),
                'id' => 'widgets-2',
                'description' => __( 'Segunda area de widgets para el tema kumis', 'kumis' ),
                'before_widget' => '',
                'after_widget'  => '',
                'before_title'  => '',
                'after_title'   => '',
            ) );

            // Cuarta zona de widgets
            register_sidebar( array(
                'name' => __( 'Sidebar blog', 'kumis' ),
                'id' => 'widgets-4',
                'description' => __( 'Sidebar 1 para el tema kumis', 'kumis' ),
                'before_widget' => '<aside class="sidebar nopaddingtop">',
                'after_widget'  => '</aside>',
                'before_title'  => '',
                'after_title'   => '',
            ) );

            // Quinta zona de widgets
            register_sidebar( array(
                'name' => __( 'Sidebar articulos', 'kumis' ),
                'id' => 'widgets-5',
                'description' => __( 'Sidebar 2 para el tema kumis', 'kumis' ),
                'before_widget' => '<aside class="sidebar">',
                'after_widget'  => '</aside>',
                'before_title'  => '',
                'after_title'   => '',
            ) );

            // Sexta zona de widgets
            register_sidebar( array(
                'name' => __( 'social media', 'kumis' ),
                'id' => 'widgets-6',
                'description' => __( 'Menú de redes sociales', 'kumis' ),
                'before_widget' => '<div class="social-media">',
                'after_widget'  => '</div>',
                'before_title'  => '',
                'after_title'   => '',
            ) );
        
        }       
    
    add_action( 'widgets_init', 'custom_theme_widgets_init' );    

    //  ACTIVACIÓN DE LAS PÁGINAS DE OPCIONES DE ACF
        acf_add_options_page ( array
        (
        'page_title' => 'Configuración del sitio web',
        'menu_slug' => 'config'
        ));
        
        acf_add_options_sub_page ( array
        (
        'page_title' => 'Personalización',
        'parent_slug' => 'config',
        ));
        
        acf_add_options_sub_page ( array
        (
        'page_title' => 'Scripts',
        'parent_slug' => 'config',
        ));

    //REEMPLAZAR CLASES

        //MENU LEGAL
        function add_menuclass($ulclass) {
            if (strpos($ulclass, 'menu-legal') !== false) {
                return preg_replace('/<ul /', '<ul id="menu--legal" class="menu-legal" ', $ulclass);
            } else {
                return $ulclass;
            }
        }
        add_filter('wp_nav_menu','add_menuclass');

    
?>