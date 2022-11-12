<div class="viwe">
    <p>
        <?php


        echo get_comments_number();

        ?>
        دیدگاه برای بلاگ
        <strong> " <?php the_title(); ?> " </strong>
        ارسال شده :
    </p>
</div>
<?php
 function suiet_comment_callback($comment, $args, $depth)
 {

     ?>

     <div class="card border-0 mb-3 " style="background:#bababa" <?php echo (!empty ($args ['has-children']))?'parent':'' ?>>

         <div class="card-body">

             <div class="d-flex align-items-center">
                 <?php  echo get_avatar( $comment, $args['avatar_size'],'','img-users',['class'=>'img-fluid ml-3'] ); ?>

                 <div>
                     <p class="mb-0"><?php echo  get_comment_author($comment); ?>    گفته :</p>
                     <small class="text-muted">  در تاریخ <?php echo get_comment_date(); ?> این دیدگاه ارسال شده :</small>
                 </div>
             </div>
             <p class="mt-3 font-sm" style="line-height: 34px!important;">
              <?php comment_text(); ?>
             </p>
             <?php
             comment_reply_link(
                 array_merge(
                     $args,
                     array(

                         'depth'     => $depth,
                         'max_depth' => $args['max_depth']
                     )
                 )
             );
             ?>
         </div>

     </div>
<?php


 }



?>
<div class="comment-list">
    <?php
    wp_list_comments( array(
        'short_ping'  => true,
        'avatar_size' => 64,
        'callback'=>'suiet_comment_callback'
    ) );
    ?>
</div>
<?php

if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
    ?>
    <nav class="navigation comment-navigation" role="navigation">
        <h3 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'suiet' ); ?></h3>
        <div class="nav-previous">   <?php echo previous_comments_link( __( ' کامنت های قدیمی تر', 'suiet' ) ); ?></div>



        <div class="nav-next"><?php next_comments_link( __( 'کامنت های جدیدتر', 'suiet' ) ); ?></div>
    </nav>
<?php endif;  ?>


<div class="form-comment mt-5">
    <?php

    $author='<div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text bg-white">
                    <small> نام و نام خانوادگی : </small>
                </div>
            </div>
            <input type="text" name="author" class="form-control font-md" placeholder="لطفا نام ونام خانوادگی خود را وارد کنید . . . ">
        </div>';

    $email='<div class="input-group my-3">
            <div class="input-group-prepend">
                <div class="input-group-text bg-white">
                    <small> ایمیل :</small>
                </div>
            </div>
            <input type="text" name="email" class="form-control font-md" placeholder="لطفا پست الکترونیکی خود را وارد کنید . . . ">
        </div>';
    $textarea='<div class="form-group">
            <textarea id="" cols="30" rows="10" name="comment" class="form-control font-md" placeholder="متن نظر شما . . . . "></textarea>
        </div>';
    //Array
    $comments_args = array(
        //Define Fields
        'fields' => array(
            //Author field
            'author' => $author,
            //Email Field
            'email' => $email,
        ),
        // Change the title of send button
        'label_submit' => esc_html__('ارسال نظر','suiet'),
        // Redefine your own textarea (the comment body).
        'comment_field' => $textarea,
        //Message Before Comment
//

        'comment_notes_before' =>sprintf('<small class="pb-2 d-block"> کامنت شما پس ازتایدد ادمین انتشار خواهد شد</small>'),
        // Remove "Text or HTML to be displayed after the set of comment fields".
        'comment_notes_after' => '',
    );
    comment_form( $comments_args );
    ?>
</div>