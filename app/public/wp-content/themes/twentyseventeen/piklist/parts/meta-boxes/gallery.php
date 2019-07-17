<?php

/*
 * Title: Gallery Images
 * Post Type: post
 */

piklist('field', array(
    'type'    => 'select',
    'field'   => 'twentyseventeen_gallery_type',
    'label'   => __('Gallery Display Type', 'twentyseventeen'),
    'value'   => 'carousel',
    'choices' => array(
        'carousel'  => __('Carousel', 'twentyseventeen'),
        'justified' => __('Justified', 'twentyseventeen'),
    ),
));

piklist('field', array(
    'type'     => 'file',
    'field'    => 'twentyseventeen_gallery',
    'label'    => __('Gallery Images', 'twentyseventeen'),
    'options'  => array(
        'model_title' => __('Add Image', 'twentyseventeen'),
        'save'        => 'id',
    ),
    'add_more' => true,
));
