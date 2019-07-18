<?php

/* 
* Template Name: Homepage
 */


 $twentyseventeen_section_ids = get_post_meta(get_the_ID(), 'page_sections');

//  print_r($twentyseventeen_sections);

foreach ($twentyseventeen_section_ids as $twentyseventeen_section_id) {
    $twentyseventeen_section = get_post($twentyseventeen_section_id);
    $twentyseventeen_section_type = get_post_meta($twentyseventeen_section_id,'section_type2',true);

    echo $twentyseventeen_section->post_title." : ".$twentyseventeen_section_type."<br/>";
}