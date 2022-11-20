<?php


$message = ( isset( $_POST[ 'message' ] ) ? wp_strip_all_tags( $_POST[ 'message' ] ) : null );


$response = [
    'response' => [
        'status' => 'success'
    ]
];


if ( is_null( $message ) ) {
    $response[ 'response' ][ 'status' ] = 'error';
}


if ( $response[ 'response' ][ 'status' ] === 'success' ) {
    $response[ 'response' ][ 'message' ] = $message;
}


wp_send_json( $response );

exit;
