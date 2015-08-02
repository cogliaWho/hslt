<?php

/* Register custom menu */
function register_my_menus() {
    register_nav_menus(
    array(
        'header-menu' => __( 'Header Menu' ),
        'header-top-navigation' => __( 'Header Top Navigation' ),
        'footer-navigation' => __( 'Footer Navigation' ))
    );
}

add_action( 'init', 'register_my_menus' );

/* Add support to meta boxes plug in by define the extra fields */

add_filter( 'rwmb_meta_boxes', 'hslt_register_meta_boxes' );

function hslt_register_meta_boxes( $meta_boxes )
{
    $prefix = 'hslt_';

    $meta_boxes[] = array(
        'id'       => 'imgConTesto',
        'title'    => 'Immagine con testo',
        'pages'    => array( 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Immagine',
                'desc'  => 'Immagine che compare nelle pagine di primo e secondo livello.',
                'id'    => $prefix . 'imgPage',
                'type'  => 'plupload_image',
                'class' => 'hslt-imgPage',
                'clone' => false
            ),
            array(
                'name'  => 'Testo Immagine',
                'desc'  => 'Testo che compare sotto all immagine',
                'id'    => $prefix . 'imgTxt',
                'type'  => 'textarea',
                'class' => 'hslt-imgText',
                'clone' => false
            )
        )
    );

    $meta_boxes[] = array(
        'id'       => 'hpBox1',
        'title'    => 'Home Page Box 1',
        'pages'    => array( 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Immagine Box 1',
                'desc'  => 'Immagine che compare nel box 1 della Home Page.',
                'id'    => $prefix . 'hpImgBox1',
                'type'  => 'image_advanced',
                'class' => 'hp-custom-box-Img',
                'clone' => false
            ),
            array(
                'name'  => 'Testo Box 1',
                'desc'  => 'Testo che compare nel box 1 della Home Page.',
                'id'    => $prefix . 'hpTxtBox1',
                'type'  => 'textarea',
                'class' => 'hp-custom-box-text',
                'clone' => false
            ),
            array(
                'name'  => 'Link a una pagina',
                'desc'  => 'Seleziona la pagina a cui vuoi linkare il box 1',
                'id'    => $prefix . 'hpLinkPageBox1',
                'type'  => 'post',
                'post_type' => 'page',
                'clone' => false
            ),
            array(
                'name'  => 'Link a una news',
                'desc'  => 'Seleziona la news a cui vuoi linkare il box 1',
                'id'    => $prefix . 'hpLinkNewsBox1',
                'type'  => 'post',
                'clone' => false
            )
        )
    );

    $meta_boxes[] = array(
        'id'       => 'hpBox2',
        'title'    => 'Home Page Box 2',
        'pages'    => array( 'page' ),
        'context'  => 'normal',
        'priority' => 'high',

        'fields' => array(
            array(
                'name'  => 'Immagine Box 2',
                'desc'  => 'Immagine che compare nel box 2 della Home Page.',
                'id'    => $prefix . 'hpImgBox2',
                'type'  => 'image_advanced',
                'class' => 'hp-custom-box-Img',
                'clone' => false
            ),
            array(
                'name'  => 'Testo Box 2',
                'desc'  => 'Testo che compare nel box 2 della Home Page.',
                'id'    => $prefix . 'hpTxtBox2',
                'type'  => 'textarea',
                'class' => 'hp-custom-box-text',
                'clone' => false
            ),
            array(
                'name'  => 'Link a una pagina',
                'desc'  => 'Seleziona la pagina a cui vuoi linkare il box 2',
                'id'    => $prefix . 'hpLinkPageBox2',
                'type'  => 'post',
                'post_type' => 'page',
                'clone' => false
            ),
            array(
                'name'  => 'Link a una news',
                'desc'  => 'Seleziona la news a cui vuoi linkare il box 2',
                'id'    => $prefix . 'hpLinkNewsBox2',
                'type'  => 'post',
                'clone' => false
            )
        )
    );

    return $meta_boxes;
}

