<?php

/*
Title: Select Gender
 */
?>
<p>Lorem strong ipsum dolor sit amet, consectetur adipisicing elit. Voluptates, molestiae.</p>
<?php
piklist('field', array(
    'type'    => 'checkbox', // select / radio / checkbox
    'field'   => 'sex',
    'label'   => __('Gender', 'twentyseventeen'),
    'choices' => array(
        ''  => 'Don\'t Disclose',
        'm' => 'Male',
        'f' => 'Female',
    ),
));
