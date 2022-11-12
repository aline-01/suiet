<?php
function suiet_register_my_menus() {
    register_nav_menus(
        array(
            'header-menu' => __( 'Header Menu','suiet' ),
        )
    );
}
add_action( 'init', 'suiet_register_my_menus' );