<?php
/**
 * template name:contact us
 */

?>
<?php get_header(); ?>
<main style="margin-top: 168px">
    <div class="container ">
        <div class="row">
            <div class="col-12  ">
                <div class="card mb-5  ">
                    <div class="card-body">
                        <p style="font-size: 15px;font-weight: 300; ">نظرات و پیشنهادات</p>
                        <p style="font-size: 15px;font-weight: 300; ">نظرات خود را با ما در میان بزارید...</p>
                        <div class="mt-4">
                            <p class="mb-1">
                                <strong> <i class="fas fa-phone-square align-middle"></i> پشتیبانی سایت آگهی املاک اینترنتی سوئیت  </strong>
                            </p>
                            <small> جهت مشکلات وپیگیری آگهی سایت آگهی املاک سوئیت همینجا با ما درمیان بگذارید   </small>
                        </div>
                        <div class="mt-4">
                            <p class="mb-1">
                                <strong> <i class="fa fa-arrow-circle-down align-middle mx-1" aria-hidden="true"></i>به ما بپیوندید  </strong>

                            </p>
                            <a href="#" class="btn text-muted ml-2 bg-light "  > <i class="fab fa-instagram align-middle"></i> </a>
                            <a href="#" class="btn text-muted ml-2 bg-light"> <i class="fab fa-telegram align-middle"></i> </a>

                        </div>
                        <br>
                        <small style="line-height: 19px">
                            <?php if (have_posts()):
                                while (have_posts()):
                                    the_post();
                                    the_content();
                                endwhile;
                            else:
                                echo 'no post';
                            endif; ?>
                        </small>




                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
</main>
<?php get_footer(); ?>