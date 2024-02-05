<?php
/* add this to functions.php after this comment */

if ( ! function_exists( 'blockstylingexample_enqueue_block_editor_assets' ) ) : 
function blockstylingexample_enqueue_block_editor_assets() {  
    wp_enqueue_script(  
        'blockstylingexample-block-js',  
        get_stylesheet_directory_uri() . '/assets/js/block-styles.js',  
        array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),  
        filemtime( plugin_dir_path( __FILE__ ) . '/assets/js/block-styles.js' )  
    );  
} 
endif;
add_action( 'enqueue_block_editor_assets', 'blockstylingexample_enqueue_block_editor_assets' ); 

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
endif;
add_action( 'init', 'blockstylingexample_enqueue_block_styles' ); 
