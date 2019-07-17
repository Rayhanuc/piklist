<?php

/*
 * Title: Some Metabox Title
 * Post Type: post
 */

piklist('field', array(
    'type'       => 'text',
    'field'      => 'textfield1',
    'label'      => __('My Field', 'twentyseventeen'),
    'value'      => 'default',
    'attributes' => array(
        'class' => 'widefat',
    ),
));

piklist('field', array(
    'type'  => 'colorpicker',
    'field' => 'colorfield1',
    'label' => __('My Color Field', 'twentyseventeen'),
    'value' => '#FF0000',
));

piklist('field', array(
    'type'       => 'text',
    'field'      => 'favfoods',
    'label'      => __('My Favorite Foods', 'twentyseventeen'),
    'attributes' => array(
        'class' => 'widefat',
    ),
    'add_more'   => true,
));
