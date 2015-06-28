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
        'id'       => 'test',
        'title'    => 'Personal Information',
        'pages'    => array( 'post', 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Testo Pagina',
                'desc'  => 'Format: First Last',
                'id'    => $prefix . 'fname',
                'type'  => 'textarea',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );

    return $meta_boxes;
}
