<?php

/*
Title: Section Type 2
Post Type: section
 */

piklist('field', array(
    'type'    => 'select',
    'field'   => 'section_type2',
    'label'   => __('Section Type 2', 'twentyseventeen'),
    'choices' => array(
        'gallery'     => __('Gallery', 'twentyseventeen'),
        'banner'      => __('Banner', 'twentyseventeen'),
        'testimonial' => __('Testimonial', 'twentyseventeen'),
        'service'     => __('Service', 'twentyseventeen'),
        'newsletter'  => __('Newsletter', 'twentyseventeen'),
    ),
));
