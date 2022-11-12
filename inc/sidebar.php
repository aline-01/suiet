<?php
add_action( 'widgets_init', 'suiet_register_sidebars' );
function suiet_register_sidebars() {

    register_sidebar(
        array(
            'id'            => 'navigation-footer-1',
            'name'          => __( 'footer navigation 1','suiet' ),
            'description'   => __( 'A short description of the sidebar.','suiet' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );

}
{

    register_sidebar(
        array(
            'id'            => 'navigation-footer-2',
            'name'          => __( 'footer navigation 2','suiet' ),
            'description'   => __( 'A short description of the sidebar.','suiet' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );

}
{

    register_sidebar(
        array(
            'id'            => 'navigation-footer-3',
            'name'          => __( 'footer navigation 3','suiet' ),
            'description'   => __( 'A short description of the sidebar.','suiet' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );

}
{

    register_sidebar(
        array(
            'id'            => 'navigation-footer-4',
            'name'          => __( 'footer navigation 4','suiet' ),
            'description'   => __( 'A short description of the sidebar.','suiet' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );

}
{

    register_sidebar(
        array(
            'id'            => 'navigation-footer-5',
            'name'          => __( 'footer navigation 5','suiet' ),
            'description'   => __( 'A short description of the sidebar.','suiet' ),
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '<p>',
            'after_title'   => '</p>',
        )
    );
    register_sidebar(
        array(
            'id'            => 'single-sidebar',
            'name'          => __( 'single sidebar','suiet' ),
            'description'   => __( 'A short description of the sidebar.','suiet' ),
            'before_widget' => ' <div class="card-body pb-2"><div class="d-flex flex-column">',
            'after_widget'  => '</div></div>',
            'before_title'  => ' <h6 class="mb-0">',
            'after_title'   => '</h6>',
        )
    );

}


