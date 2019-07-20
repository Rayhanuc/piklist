<?php

$twentyseventeen_term = get_queried_object(  );
print_r($twentyseventeen_term);
echo "<br/>";

$twentyseventeen_term_id = $twentyseventeen_term->term_id;
$twentyseventeen_term_extra = get_term_meta($twentyseventeen_term_id,"extra_data",true);
echo $twentyseventeen_term_extra;
echo "<br/>";

$twentyseventeen_term_image_id = get_term_meta($twentyseventeen_term_id,"category_image",true);
// echo $twentyseventeen_term_image_id;
echo wp_get_attachment_image( $twentyseventeen_term_image_id, 'large');





