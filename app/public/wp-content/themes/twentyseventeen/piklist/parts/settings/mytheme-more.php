<?php

 /*
 Title: Advanced Settings
 Setting: mytheme_settings
 */
piklist('field', array(
    'type' => 'text',
    'field' => 'text2',
    'label' => __('Advanced Text Box','piklist'),
    'description' => __('Field Description','piklist'),
    'help' => 'This is help text.',
    'value' => 'Default text',
    'attributes' => array(
    'class' => 'text'
    )
   ));
  
  piklist('field', array(
   'type' => 'colorpicker',
    'field' => 'colorpicker2',
    'label' => __('Advanced color','piklist'),
    'value' => '#aee029',
    'description' => __('Click in the box to select a color.','piklist'),
    'help' => 'This is help text.',
    'attributes' => array(
    'class' => 'text'
   )
   ));