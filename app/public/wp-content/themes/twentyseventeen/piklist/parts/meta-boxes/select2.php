<?php

piklist('field', array(
    'type'       => 'select',
    'field'      => 'us_states',
    'label'      => 'Select a post',
    'required'   => true,
    'choices'    => piklist(get_posts(array(
        'posts_per_page' => -1,
        'post_status'    => 'publish',
    )), array(
        'ID',
        'post_title',
    )),

    'attributes' => array(
        'class'            => 'select2-select',
        'style'            => 'width: 80%',
        'data-placeholder' => 'Choose a Post',
        'multiple'         => 'multiple',
    ),
));
