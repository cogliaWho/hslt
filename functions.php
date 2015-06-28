<?php

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
?>
