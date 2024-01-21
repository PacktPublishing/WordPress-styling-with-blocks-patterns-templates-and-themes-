<?php
/* add this to functions.php after this comment */

if ( ! function_exists( 'blockstylingexample_block_styles' ) ) : 
    function blockstylingexample_block_styles() { 
        register_block_style( 
            'core/quote', 
            array( 
                'name' => 'feature-quote', 
                'label' => __( 'Feature quote', 'blockstylingexample' ), 
                'inline_style' => ' 
                    .is-style-feature-quote { 
                        border: 20px groove currentColor!important; 
                        font-size: 200%; 
                        font-weight: bold; 
                        padding: 10px; 
                }' 
            ) 
        ); 
    }  
add_action( 'init', 'blockstylingexample_block_styles' ); 
endif;

if ( ! function_exists( 'blockstylingexample_enqueue_block_styles' ) ) : 
    function blockstylingexample_enqueue_block_styles() { 
       wp_enqueue_block_style( 'core/quote', array(
            'handle' => 'blockstylingexample-is-feature-quote', 
            'src'    => get_parent_theme_file_uri( 'assets/custom/block-styles.css' ), 
            'ver'    => wp_get_theme( get_template() )->get( 'Version' ), 
            'path'   => get_parent_theme_file_path( 'assets/custom/block-styles.css' ), 
        ) 
    ); 
} 
add_action( 'init', 'blockstylingexample_enqueue_block_styles' ); 
endif;