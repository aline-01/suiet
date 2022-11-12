<div class="col-12 col-lg-6 contecting">
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/155%20-%20Copy%20(3).jpg" class="img-fluid">
    <?php if ( is_active_sidebar( 'navigation-footer-5' ) )
    {
        dynamic_sidebar( 'navigation-footer-5' );
    }else
    {

        echo (' <p class="font-md">  ازشمال تاجنوب از شرق به غرب با یه اشاره میتونی خونه ببینی <br>
             آگهی خریدو فروش
             <br>
            رهن و اجاره
            <br>
             اجاره کوتاه مدت
            <br>
             تجاری اداری مسکونی
             <br>
            پانسیون مغازه ویلا اداره
             </p>');
    }
    ?>
    <div class="d-flex flex-column flex-lg-row">
        <div class="card bg-transparent border-0 flex-grow-1">
            <small class="text-muted d-block">
                ساعت کاری شرکت از شنبه تا چهارشنبه
            </small>
            <small class="text-muted d-block">
                ساعت 8:30الی 18:00
            </small>
        </div>

        <div class="card bg-transparent border-0  flex-grow-1">
            <small class="text-muted d-block">
                ساعت کاری شرکت پنج شنبه ها
            </small>
            <small class="text-muted d-block">
                ساعت 8:30الی 13:00
            </small>
        </div>

    </div>
    <div class="d-flex flex-column flex-lg-row align-items-center justify-content-center mt-3">
        <a href="#" class="text-white">
            <div class="card messanger ">
                <div class="card-body d-flex align-items-center py-2 ">
                    <span class="text-white"><i class="fab fa-instagram " style="font-size: 25px" aria-hidden="true"></i> </span>
                    <p class="mb-0 mr-1 font-md ">اینستاگرام سایت آگهی املاک سوئیت</p>
                </div>
            </div>

        </a>
    </div>
</div>
