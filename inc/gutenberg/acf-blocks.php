<?php 

add_action('acf/init', 'web_acc_block');
function web_acc_block() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a Spalter block.
        acf_register_block_type(array(
            'name'              => 'accweb',
            'title'             => __('Accordion WEB'),
            'description'       => __('Accordion'),
            'render_template'   => 'template-parts/gutenberg-blocks/acc/acc.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'acc' ),
            'supports'        => [
                'anchor' => true,
                'color'           => [
                    'background' => true,
                    'text'       => true,
                    'jsx'        => true,
                ],
            ],
        ));
    }
}
