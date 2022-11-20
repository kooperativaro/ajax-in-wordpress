<?php


/*
 * Template Name: AJAX
*/


if ( $_SERVER[ 'REQUEST_METHOD' ] === 'POST' ) {
    $targets = [
        'procesare-cerere'
    ];

    if ( isset( $_REQUEST[ 'target' ] ) ) {
        if ( ! in_array( $_REQUEST[ 'target' ], $targets ) ) {
            wp_safe_redirect( home_url( '/' ) );
            exit;
        }
    } else {
        wp_safe_redirect( home_url( '/' ) );
        exit;
    }

    include( get_template_directory() . '/' . $_REQUEST[ 'target' ] . '.php' );
} else {
    wp_safe_redirect( home_url( '/' ) );
    exit;
}
