<?php
/**
 * template name: about us
 */

?>
<?php get_header() ?>
<main>
    <div class="container mb-4  " style="margin-top: 168px">
        <div class="row">

            <div class="col-12">
                <div class="card border-0 aboutus">
                    <div class="card-body py-lg-0 pr-lg-0 flex-lg-row flex-column d-flex align-items-center">
                        <?php echo get_the_post_thumbnail(get_the_ID(),'large',array('class'=>'img-fluid'))  ?>
                        <div class="mr-lg-3 mt-3 mt-lg-0">
                            <h5><?php the_title() ?> </h5>

                                <?php if (have_posts()):
                                    while (have_posts()):
                                        the_post();
                                        the_content();
                                    endwhile;
                                else:
                                    echo 'no post';
                                endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</main>
<?php get_footer()?>