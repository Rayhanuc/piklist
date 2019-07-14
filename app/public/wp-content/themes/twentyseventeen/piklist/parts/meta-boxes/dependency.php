<?php

/*
Title: Dependency Demo
Post Type: post
*/

piklist('field',array(
	'type' => 'select',
	'field' => 'colors',
	'label' => __('select a color','twentyseventeen'),
	'choices' => array(
		'red' => __('Red','twentyseventeen'),
		'green' => __('Green','twentyseventeen'),
		'cyan' => __('Cyan','twentyseventeen'),
		'other' => __('Other','twentyseventeen'),
	)
));

piklist('field',array(
	'type' => 'select',
	'field' => 'colors2',
	'label' => __('select a secondary color','twentyseventeen'),
	'choices' => array(
		'red' => __('Red','twentyseventeen'),
		'green' => __('Green','twentyseventeen'),
		'cyan' => __('Cyan','twentyseventeen'),
		'other' => __('Other','twentyseventeen'),
	)
));

piklist('field', array(
	'type' => 'colorpicker',
	'field' => 'othercolor',
	'label' => __('Select Color','twentyseventeen'),
	'value' => '#FFFFFF',
	'conditions' => array(
		// 'relation' => 'or',
		array(
			'field' => 'colors',
			'value' => 'other'
		),
		array(
			'field' => 'colors2',
			'value' => 'cyan'
		),
	)
));