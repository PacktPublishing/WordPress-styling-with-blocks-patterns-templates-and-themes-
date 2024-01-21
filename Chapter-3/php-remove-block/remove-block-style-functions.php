<?php
/* add this to functions.php after this comment */

function prefix_remove_core_block_styles() {  
    wp_dequeue_style( 'wp-block-quote' );  
}  
add_action( 'wp_enqueue_scripts', 'prefix_remove_core_block_styles' );