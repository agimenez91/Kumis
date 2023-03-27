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
        register_nav_menu ( 'footer-menu-left', 'Links footer izquierda' );
        register_nav_menu ( 'footer-menu-right', 'Links footer la derecha' );
        register_nav_menu ( 'footer-menu-legal', 'Menu de enlaces legales' );




?>