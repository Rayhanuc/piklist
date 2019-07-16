<?php

/*
Title: Section Type
Post Type: section
Order:10
*/

piklist('field',array(
	'type' => 'select',
	'field' => 'twentyseventeen_section_type',
	'label' => __('Section Type','twentyseventeen'),
	'choices' => array(
		'none' => __('Select A Type','twentyseventeen'),
		'banner' => __('Banner','twentyseventeen'),
		'testimonial' => __('Testimonial','twentyseventeen'),
		'service' => __('Service','twentyseventeen'),
		'newsletter' => __('Newsletter','twentyseventeen'),
		'skill' => __('Skills','twentyseventeen'),
	)
	
));
