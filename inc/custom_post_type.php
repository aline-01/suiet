<?php
function cptui_register_my_cpts() {

    /**
     * Post Type: real state.
     */

    $labels = [
        "name" => __( "real state", "suiet" ),
        "singular_name" => __( "state", "suiet" ),
        "add_new" => __( "add real", "suiet" ),
        "edit_item" => __( "edit real", "suiet" ),
        "new_item" => __( "new real", "suiet" ),
    ];

    $args = [
        "label" => __( "real state", "suiet" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => true,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "my_real_state", "with_front" => true ],
        "query_var" => true,
        "menu_position" => 100,
        "menu_icon" => "dashicons-admin-site",
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "custom-fields", "author", "page-attributes", "post-formats" ],
    ];

    register_post_type( "my_real_state", $args );

    /**
     * Post Type: blog.
     */

    $labels = [
        "name" => __( "blog", "suiet" ),
        "singular_name" => __( "blog", "suiet" ),
        "all_items" => __( "all blog", "suiet" ),
        "add_new" => __( "add blog", "suiet" ),
        "add_new_item" => __( "add blog", "suiet" ),
        "edit_item" => __( "edit blog", "suiet" ),
    ];

    $args = [
        "label" => __( "blog", "suiet" ),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "rewrite" => [ "slug" => "my_blog", "with_front" => true ],
        "query_var" => true,
        "menu_icon" => "dashicons-admin-site",
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
        "taxonomies" => [ "category", "post_tag" ],
    ];

    register_post_type( "my_blog", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );
