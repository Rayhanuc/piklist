<?php

/*
Title: Owner
 */

piklist('field', array(
    'type'    => 'radio',
    'field'   => 'owner',
    'label'   => __('Select Owner', 'twentyseventeen'),
    'choices' => array(
        '' => 'Select Owner',
    ) + piklist(get_users(), array('ID', 'display_name')),
));
