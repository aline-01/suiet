<?php
$args = array( 'posts_per_page' => -1);
$the_query = new WP_Query( $args );
if ( $the_query->have_posts() ) :
    while ( $the_query->have_posts() ) : $the_query->the_post();
        get_template_part('template-parts/archive/inside-loop');
        the_posts_pagination();
    endwhile;

else:
    _e( 'Sorry, no posts matched your criteria.', 'suiet' );

endif;


?>








