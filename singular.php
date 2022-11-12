
<?php
 get_header();
?>
<main style="margin-top: 230px">
    <div class="container ">
        <div class="row">
            <?php get_template_part('template-parts/header/bread-crumb') ?>
            <?php $single_sidebar_page=(is_active_sidebar('single-sidebar')) ? 'col-lg-8':'';

            ?>
            <div class="col-12 <?php echo $single_sidebar_page?> ">
               <?php get_template_part('template-parts/single/main-body') ?>
            </div>

               <?php get_sidebar() ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>

</html>
