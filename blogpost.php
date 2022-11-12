<?php
/**
 * template name: blogpost
 */

?>
<?php get_header();?>
<main style="margin-top: 230px">
    <div class="container">
        <div class="row">
            <div class="col-12  ">
                <?php get_template_part('template-parts/archive/filter') ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mx-2 my-5 text-center" >
                <h5 class="font-md" >آخرین اخبار ومقالات </h5>
            </div>

            <?php get_template_part('template-parts/archive/loop-archive') ?>

        </div>

    </div>



</main>
<?php get_footer();?>
