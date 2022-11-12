<?php
function cptui_register_my_cpts_my_blog() {

    /**
     * Post Type: blog.
     */

    $labels = [
        "name" => __( "بلاگ", "suiet" ),
        "singular_name" => __( "blog", "suiet" ),
        "all_items" => __( "همه بلاگ ها", "suiet" ),
        "add_new" => __( "افزودن بلاگ", "suiet" ),
        "add_new_item" => __( "افزودن بلاگ", "suiet" ),
        "edit_item" => __( "ویرایش بلاگ", "suiet" ),
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
        "menu_icon" => "dashicons-format-aside",
        "supports" => [ "title", "editor", "thumbnail", "excerpt", "trackbacks", "custom-fields", "comments", "revisions", "author", "page-attributes", "post-formats" ],
        "taxonomies" => [ "category", "post_tag" ],
    ];

    register_post_type( "my_blog", $args );
}

add_action( 'init', 'cptui_register_my_cpts_my_blog' );
