<?php
/*
Title: Terms Extra Fields
Taxonomy: category, post_tag
 */
?>
<p>
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed fringilla arcu ante, ut lobortis ex porttitor in. Nam at malesuada felis. Aliquam ornare cursus urna, at elementum est scelerisque malesuada.
</p>
<?php
piklist('field', array(
    'type'       => 'text',
    'field'      => 'extra_data',
    'label'      => __('Some Extra Data', 'twentyseventeen'),
    'help'       => __('Here is some help', 'twentyseventeen'),
    'attributes' => array(
        'class' => 'large-text',
    ),
));

piklist('field', array(
    'type'    => 'file',
    'field'   => 'category_image',
    'label'   => __('Category Image', 'twentyseventeen'),
    'help'    => __('Here is some help', 'twentyseventeen'),
    'options' => array(
        'model_title' => __('Category Image', 'twentyseventeen'),
        'help'        => __('Add', 'twentyseventeen'),
    ),
));