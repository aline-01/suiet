<?php
  $single_image=(is_active_sidebar('single-sidebar')) ? 'medium_large':'full';

 echo get_the_post_thumbnail(get_the_ID(),$single_image,array('class'=>'img-fluid')) ?>

<h5 class="d-block text-center mt-4 mb-2 text-success  " ><?php the_title() ?></h5>
<div class="d-flex justify-content-around align-items-center mt-3 flex-warp blog-info">
    <small class="text-center text-muted px-1"> نویسنده : <?php the_author()?></small>
    <small class="text-center text-muted px-1"> دسته بندی : <?php echo suiet_get_last_category(get_the_ID())?> </small>
    <small class="text-center text-muted px-1"> تاریخ:<?php the_date()?> </small>
    <small class="text-center text-muted px-1">زمان مورد نیاز برای مطالعه: ۱۰ دقیقه </small>
</div>
