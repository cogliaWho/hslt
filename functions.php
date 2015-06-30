<?php

/* Register custom menu */
function register_my_menus() {
    register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu' ),
        'second-level-menu' => __( 'Second Level Menu' ))
    );
}

add_action( 'init', 'register_my_menus' );

/* Add support to meta boxes plug in by define the extra fields */

add_filter( 'rwmb_meta_boxes', 'hslt_register_meta_boxes' );

function hslt_register_meta_boxes( $meta_boxes )
{
    $prefix = 'hslt_';

    // 1st meta box
    $meta_boxes[] = array(
        'id'       => 'ImgText',
        'title'    => 'Testo Immagine',
        'pages'    => array( 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Testo Immagine',
                'desc'  => 'Testo che compare al di sotto delle immagine nei template di primo e secondo livello',
                'id'    => $prefix . 'testoImg',
                'type'  => 'wysiwyg',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true
            ),
        )
    );

    // 2nd meta box
    $meta_boxes[] = array(
        'title'    => 'Extra Links',
        'pages'    => array( 'page' ),
        'fields' => array(
            array(
                'name'  => 'Link extra',
                'desc'  => 'Link che compare in alto a destra nelle pagine di primo e secondo livello (es: statuto)',
                'id'    => $prefix . 'linkExtra',
                'type'  => 'wysiwyg',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true
            ),
        )
    );

    return $meta_boxes;
}
