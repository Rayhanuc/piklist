<?php

/* 
    Title: Job Application Information
    Post Type: job

*/


piklist('field',array(
    'type'  => 'text',
    'field' => 'email',
    'scope' => 'post_meta',
    'label' => __('Email', 'twentyseventeen')
));

piklist('field',array(
    'type'  => 'text',
    'field' => 'phone',
    'scope' => 'post_meta',
    'label' => __('Phone Number', 'twentyseventeen')
 ));