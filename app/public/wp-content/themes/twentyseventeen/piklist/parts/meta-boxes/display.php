<?php

/*
Title: Display Options
Post Type: post
 */

piklist('field', array(
    'type'    => 'select',
    'field'   => 'display_options',
    'label'   => __('Select Display Type', 'twentyseventeen'),
    'choices' => array(
        'masonry'   => __('Masonry', 'twentyseventeen'),
        'standard'  => __('Standard', 'twentyseventeen'),
        'square'    => __('Square', 'twentyseventeen'),
        'justified' => __('Justified', 'twentyseventeen'),
    ),
));
