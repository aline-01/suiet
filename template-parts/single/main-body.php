
<div class="card border-0 content_blog mb-3">
    <div class="card-body" style="line-height: 30px; font-size: 13px;" >


        <?php if (have_posts()):
            while (have_posts()):
                the_post();
                get_template_part('template-parts/single/single-header');
                the_content();
                get_template_part('template-parts/single/single-footer');
            endwhile;
        else:
            echo 'no post';
        endif; ?>

    </div>


</div>
