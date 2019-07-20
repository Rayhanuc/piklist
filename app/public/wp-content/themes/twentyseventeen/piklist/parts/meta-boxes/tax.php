<?php

/*
Title: Select Categories

 */
?>

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad dolorem ullam reiciendis quas illo dolor?
</p>

<?php

piklist('field', array(
    'type'        => 'select', // select / radio / checkbox
    'field'       => 'twentyseventeen_cats',
    'label'       => __('Select Categories', 'twentyseventeen'),
    'description' => __('Here is some information', 'twentyseventeen'),
    'choices'     => array(
        '' => __('Pick an option', 'twentyseventeen'),
    ) + piklist(get_terms(array(
        'taxonomy'   => 'category', // post_tag / category
        'hide_empty' => false,
    )), array(
        'term_id',
        'name',
    )
    ),
));