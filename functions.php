<?php

function enqueue_bootstrap() 
{ 
    wp_enqueue_script( "bootstrap_js", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js", [], "5.2", true );
    wp_enqueue_style("bootstrap_css", "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css", [], "5.2", false );
}

add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap' );
