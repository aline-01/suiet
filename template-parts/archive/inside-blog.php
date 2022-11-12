

<div class="col-12 col-lg-3">
    <div class="card border-0 card-hover-2 mb-5 archive">
        <div class="card-img-top">
            <div class="overly-card">
                <p>
                    <i class="fa fa-book" aria-hidden="true" style="font-size: 13px"></i>

                    زمان مطالعه 3 دقیقه
                </p>
            </div>

            <?php echo get_the_post_thumbnail(get_the_ID(),'medium_large',array('class'=>'img-fluid'))  ?>
        </div>
        <div class="card-body">
            <p  class="d-block text-center text-danger"> <?php the_title() ?></p>
            <small class="text-muted font-sm " style="line-height: 22px"><?php the_excerpt();?></small>
            <time datetime="<?php echo get_post_time('Y-m-d:i',get_the_ID())?>">  <p style="font-size: 10px "><?php echo get_the_date()?></p></time>
        </div>
        <div class="card-footer bg-transparent">
            <a href="<?php the_permalink();?>"  class="btn btn-block  text-success " style="font-size: 13px"> <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>

                ادامه مطلب
            </a>


        </div>
    </div>

</div>


