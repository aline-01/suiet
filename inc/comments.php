<?php

add_filter( 'comment_form_fields', 'suiet_comment_fields_custom_order' );
function suiet_comment_fields_custom_order( $fields ) {
    $comment_field = $fields['comment'];
    $author_field = $fields['author'];
    $email_field = $fields['email'];
    unset( $fields['comment'] );
    unset( $fields['url'] );
    unset( $fields['cookies'] );
    // the order of fields is the order below, change it as needed:
    $fields['author'] = $author_field;
    $fields['email'] = $email_field;
    $fields['comment'] = $comment_field;
    // done ordering, now return the fields:
    return $fields;
}