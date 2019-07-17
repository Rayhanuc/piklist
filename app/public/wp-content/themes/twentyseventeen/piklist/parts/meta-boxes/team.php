<?php

/*
Title: Team
Post Type: post
 */

piklist('field', array(
    'type'     => 'group',
    'field'    => 'team_members',
    'label'    => __('Team Members', 'twentyseventeen'),
    'add_more' => true,
    'fields'   => array(
        array(
            'type'  => 'text',
            'field' => 'team_member_name',
            'label' => __('Name', 'twentyseventeen'),
        ),

        array(
            'type'     => 'group',
            'field'    => 'team_member_testimonials',
            'label'    => __('Testimonials', 'twentyseventeen'),
            'add_more' => true,
            'fields'   => array(
                array(
                    'type'       => 'text',
                    'field'      => 'tname',
                    'label'      => __('Name', 'twentyseventeen'),
                    'attributes' => array(
                        'class' => 'widefat',
                    ),
                ),

                array(
                    'type'       => 'file',
                    'field'      => 'timage',
                    'label'      => __('Image', 'twentyseventeen'),
                    'attributes' => array(
                        'class' => 'widefat',
                    ),
                ),

                array(
                    'type'       => 'text',
                    'field'      => 'description',
                    'label'      => __('Description', 'twentyseventeen'),
                    'attributes' => array(
                        'class' => 'widefat',
                    ),
                ),

            ),
        ),
    ),
));
