<?php

/*
Title: Repeatable Limit
Post Type: post
 */

piklist('field', array(
    'type'     => 'text',
    'field'    => 'feature',
    'label'    => __('Feature Name', 'twentyseventeen'),
    'add_more' => true,
    'validate' => array(
        array(
            'type'    => 'limit',
            'options' => array(
                'min' => 2,
                'max' => 4,
            ),
        ),
    ),

));
