<?php
/*
Title: Testimonial
Post Type: post
 */
piklist('field', array(
    'type'     => 'group',
    'field'    => 'twentyseventeen_testimonials',
    'label'    => __('Name', 'twentyseventeen'),
    'add_more' => true,
    'fields'   => array(
        array(
            'type'       => 'text',
            'field'      => 'twentyseventeen_tname',
            'label'      => __('Name', 'twentyseventeen'),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),
        array(
            'type'       => 'file',
            'field'      => 'twentyseventeen_timage',
            'label'      => __('Image', 'twentyseventeen'),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),
        array(
            'type'       => 'text',
            'field'      => 'twentyseventeen_description',
            'label'      => __('Description', 'twentyseventeen'),
            'attributes' => array(
                'class' => 'widefat',
            ),
        ),

    ),
));
