<?php
include("includes/db_config_db_connection.php");
include("includes/functions.php");
if (isset($_GET["dis_cookie"])) {
    setcookie("user_access",$_COOKIE["user_access"],time() - 11000,"/");
}
if (isset($_COOKIE["user_access"])) {
    // $this_user = $functions->get_user_by_id($_COOKIE["user_access"]);    
    // var_dump($this_user);
}


 get_header();
?>
<main class="iransans" style="margin-top: 200px">

    <div class="container-fluid py-3" style="margin-top: 100px"  >
        <div class="row">
            <div class="col-12">
                <div class="swiper-container "  >
                    <div class="swiper-wrapper" id="gallery_wrapper">
                        <div class="swiper-slide"><img src= "<?php echo get_template_directory_uri() ?>/assets/img/final%202.jpg" style="width: 80%; height: 80%" alt="suiet_slider" ></div>
                        <div class="swiper-slide"><img src= "<?php echo get_template_directory_uri() ?>/assets/img/final%203.jpg" style="width: 80%; height: 80%" alt="suiet_slider"></div>
                        <div class="swiper-slide"><img src= "<?php echo get_template_directory_uri() ?>/assets/img/final-1.jpg" style="width: 80%; height: 80%" alt="suiet_slider"></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>

    </div>
    <div class="blog py-1">

        <div class="container">
            <div class=" text-center">
                <h5 class="d-block" style="color: #FFFFFF" >  بلاگ </h5>
            </div>
            <div class="slider-2st">
                <div class="slider1">
                    <div class="col-12 col-lg-3">
                        <div class="card border-0 card-hover-2">
                            <div class="card-img-top">
                                <div class="overly-card">
                                    <p>
                                        <i class="fa fa-book" aria-hidden="true" style="font-size: 13px"></i>

                                        زمان مطالعه 3 دقیقه
                                    </p>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mountains-1587287_640.jpg" class="img-fluid card-img">
                            </div>
                            <div class="card-body">
                                <p  class="d-block text-center text-danger"> چرا خانه های هوشمند؟</p>
                                <small class="text-muted font-sm ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                <p style="font-size: 10px">18خرداد 1401</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="#" class="btn btn-block  text-success " style="font-size: 13px"> <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>

                                    ادامه مطلب
                                </a>


                            </div>
                        </div>



                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-0 card-hover-2">
                            <div class="card-img-top">
                                <div class="overly-card">
                                    <p>
                                        <i class="fa fa-book" aria-hidden="true" style="font-size: 13px"></i>

                                        زمان مطالعه 3 دقیقه
                                    </p>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mountains-1587287_640.jpg" class="img-fluid card-img">
                            </div>
                            <div class="card-body">
                                <p  class="d-block text-center text-danger"> چرا خانه های هوشمند؟</p>
                                <small class="text-muted font-sm ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                <p style="font-size: 10px">18خرداد 1401</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="#" class="btn btn-block  text-success " style="font-size: 13px"> <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>

                                    ادامه مطلب
                                </a>

                            </div>
                        </div>



                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-0 card-hover-2">
                            <div class="card-img-top">
                                <div class="overly-card">
                                    <p>
                                        <i class="fa fa-book" aria-hidden="true" style="font-size: 13px"></i>

                                        زمان مطالعه 3 دقیقه
                                    </p>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mountains-1587287_640.jpg" class="img-fluid card-img">
                            </div>
                            <div class="card-body">
                                <p  class="d-block text-center text-danger"> چرا خانه های هوشمند؟</p>
                                <small class="text-muted font-sm ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                <p style="font-size: 10px">18خرداد 1401</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="#" class="btn btn-block  text-success " style="font-size: 13px"> <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>

                                    ادامه مطلب
                                </a>


                            </div>
                        </div>



                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-0 card-hover-2">
                            <div class="card-img-top">
                                <div class="overly-card">
                                    <p>
                                        <i class="fa fa-book" aria-hidden="true" style="font-size: 13px"></i>

                                        زمان مطالعه 3 دقیقه
                                    </p>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mountains-1587287_640.jpg" class="img-fluid card-img">
                            </div>
                            <div class="card-body">
                                <p  class="d-block text-center text-danger"> چرا خانه های هوشمند؟</p>
                                <small class="text-muted font-sm ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                <p style="font-size: 10px">18خرداد 1401</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="#" class="btn btn-block  text-success " style="font-size: 13px"> <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>

                                    ادامه مطلب
                                </a>

                            </div>
                        </div>



                    </div>
                    <div class="col-12 col-lg-3">
                        <div class="card border-0 card-hover-2">
                            <div class="card-img-top">
                                <div class="overly-card">
                                    <p>
                                        <i class="fa fa-book" aria-hidden="true" style="font-size: 13px"></i>

                                        زمان مطالعه 3 دقیقه
                                    </p>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/mountains-1587287_640.jpg" class="img-fluid card-img">
                            </div>
                            <div class="card-body">
                                <p  class="d-block text-center text-danger"> چرا خانه های هوشمند؟</p>
                                <small class="text-muted font-sm ">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.</small>
                                <p style="font-size: 10px">18خرداد 1401</p>
                            </div>
                            <div class="card-footer bg-transparent">
                                <a href="#" class="btn btn-block  text-success " style="font-size: 13px"> <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>

                                    ادامه مطلب
                                </a>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

    <div class="container mt-2">
        <div class="row">
            <div class="col-12 text-center font-md py-2">
                <p>
                    مشاوران املاک
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card border-0 brands-card">
                    <div class="card-body py-2">
                        <div class="slider-2st">
                            <span class="slickArrow nex4st"> <i class="fas fa-chevron-right"></i> </span>
                            <span class="slickArrow prev4st"> <i class="fas fa-chevron-left"></i> </span>
                            <div class="slider22 d-flex justify-content-between">
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll3.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll4.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll5.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll6.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll3.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll4.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll5.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll6.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll3.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="card border-0 brands">
                                        <div class="card-body py-3">
                                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/scroll4.jpg" class="img-fluid d-block mx-auto">
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="azadari py-3" >

        <div class="container">
            <div class=" text-center">
                <h6 class="d-block " style="color: #FFFFFF" >  خانه های عذاداری(ویژه ی محرم) </h6>
            </div>
            <div class="slider-2st">
                <div class="slider_azadari">
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                            <div class="card-img card-img-custom">
                                <div class="View">
                                    <a href="#" class="btn">مشاهده بیشتر</a>
                                </div>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">
                            </div>

                            <div class="card-body ">

                                <div class=" text-center">
                                    <a href="#" class="text-dark">اصفهان</a>
                                </div>
                                <div class="mt-2">
                                    <p class="font-lg text-danger">سوییت 200 متری</p>
                                </div>
                                <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                                <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                    اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                                </small>
                                <div>
                                    <small class="text-muted"> اتاق: 1 </small>
                                    <small class=" px-1 text-muted">حمام: 1 </small>
                                    <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                    <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                    <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                    <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                    <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                    <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                                <small class="text-muted  ">
                                    <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                    امین پوربابایی
                                </small>
                                <small class="text-muted d-flex ">
                                    <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                    &nbsp;
                                    هم اکنون
                                </small>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                            <div class="card-img card-img-custom">
                                <div class="View">
                                    <a href="#" class="btn">مشاهده بیشتر</a>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                            </div>
                            <div class="card-body ">
                                <div class=" text-center">
                                    <a href="#" class="text-dark">اصفهان</a>
                                </div>
                                <div class="mt-2">
                                    <p class="font-lg text-danger">سوییت 200 متری</p>
                                </div>
                                <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                                <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                    اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                                </small>
                                <div>
                                    <small class="text-muted"> اتاق: 1 </small>
                                    <small class=" px-1 text-muted">حمام: 1 </small>
                                    <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                    <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                    <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                    <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                    <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                    <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                                <small class="text-muted  ">
                                    <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                    مصطفی محمدی
                                </small>
                                <small class="text-muted d-flex ">
                                    <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                    &nbsp;
                                    هم اکنون
                                </small>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                            <div class="card-img card-img-custom">
                                <div class="View">
                                    <a href="#" class="btn">مشاهده بیشتر</a>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                            </div>
                            <div class="card-body ">
                                <div class=" text-center">
                                    <a href="#" class="text-dark">اصفهان</a>
                                </div>
                                <div class="mt-2">
                                    <p class="font-lg text-danger">سوییت 200 متری</p>
                                </div>
                                <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                                <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                    اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                                </small>
                                <div>
                                    <small class="text-muted"> اتاق: 1 </small>
                                    <small class=" px-1 text-muted">حمام: 1 </small>
                                    <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                    <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                    <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                    <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                    <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                    <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                                <small class="text-muted  ">
                                    <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                    مصطفی محمدی
                                </small>
                                <small class="text-muted d-flex ">
                                    <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                    &nbsp;
                                    هم اکنون
                                </small>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                            <div class="card-img card-img-custom">
                                <div class="View">
                                    <a href="#" class="btn">مشاهده بیشتر</a>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                            </div>
                            <div class="card-body ">
                                <div class=" text-center">
                                    <a href="#" class="text-dark">اصفهان</a>
                                </div>
                                <div class="mt-2">
                                    <p class="font-lg text-danger">سوییت 200 متری</p>
                                </div>
                                <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                                <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                    اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                                </small>
                                <div>
                                    <small class="text-muted"> اتاق: 1 </small>
                                    <small class=" px-1 text-muted">حمام: 1 </small>
                                    <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                    <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                    <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                    <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                    <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                    <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                                <small class="text-muted  ">
                                    <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                    مصطفی محمدی
                                </small>
                                <small class="text-muted d-flex ">
                                    <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                    &nbsp;
                                    هم اکنون
                                </small>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                            <div class="card-img card-img-custom">
                                <div class="View">
                                    <a href="#" class="btn">مشاهده بیشتر</a>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                            </div>
                            <div class="card-body ">
                                <div class=" text-center">
                                    <a href="#" class="text-dark">اصفهان</a>
                                </div>
                                <div class="mt-2">
                                    <p class="font-lg text-danger">سوییت 200 متری</p>
                                </div>
                                <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                                <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                    اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                                </small>
                                <div>
                                    <small class="text-muted"> اتاق: 1 </small>
                                    <small class=" px-1 text-muted">حمام: 1 </small>
                                    <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                    <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                    <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                    <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                    <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                    <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                                <small class="text-muted  ">
                                    <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                    مصطفی محمدی
                                </small>
                                <small class="text-muted d-flex ">
                                    <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                    &nbsp;
                                    هم اکنون
                                </small>
                            </div>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                            <div class="card-img card-img-custom">
                                <div class="View">
                                    <a href="#" class="btn">مشاهده بیشتر</a>
                                </div>

                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                            </div>
                            <div class="card-body ">
                                <div class=" text-center">
                                    <a href="#" class="text-dark">اصفهان</a>
                                </div>
                                <div class="mt-2">
                                    <p class="font-lg text-danger">سوییت 200 متری</p>
                                </div>
                                <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                                <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                    اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                                </small>
                                <div>
                                    <small class="text-muted"> اتاق: 1 </small>
                                    <small class=" px-1 text-muted">حمام: 1 </small>
                                    <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                    <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                    <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                    <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                    <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                    <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                                </div>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                                <small class="text-muted  ">
                                    <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                    مصطفی محمدی
                                </small>
                                <small class="text-muted d-flex ">
                                    <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                    &nbsp;
                                    هم اکنون
                                </small>
                            </div>
                        </div>

                    </div>
                </div>


            </div>

        </div>

    </div>
    <div class="py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 text-center  ">
                    <p class="txt">آخرین آگهی ها</p>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">
                        </div>

                        <div class="card-body ">

                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                امین پوربابایی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3 py-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3 py-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3 py-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-3 py-3">
                    <div class="card border-0 mb-2 mb-lg-0 View-hover  ">
                        <div class="card-img card-img-custom">
                            <div class="View">
                                <a href="#" class="btn">مشاهده بیشتر</a>
                            </div>

                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/shiraz2.jpg" class="img-fluid card-img-top" alt="agahi">

                        </div>
                        <div class="card-body ">
                            <div class=" text-center">
                                <a href="#" class="text-dark">اصفهان</a>
                            </div>
                            <div class="mt-2">
                                <p class="font-lg text-danger">سوییت 200 متری</p>
                            </div>
                            <small class="text-success mb-2 d-block" style="font-size: 14px"> رهن و اجاره </small>
                            <small class="text-muted mb-1 d-block py-2"><i class="fas fa-map-marker align-middle"></i>
                                اصفهان-شهرک ولیعصر-خ مولانا خ سعادت-کوچه سوم-پلاک:a23
                            </small>
                            <div>
                                <small class="text-muted"> اتاق: 1 </small>
                                <small class=" px-1 text-muted">حمام: 1 </small>
                                <small class=" px-1 text-muted"> سرویس بهداشتی:2 </small>
                                <small class="px-1 text-muted"> متراژ: 200 متر مربع </small>
                                <small class=" px-1 text-muted"> اسانسور:ندارد </small>
                                <small class=" px-1 text-muted"> پارکینگ:ندارد </small>
                                <small class=" text-muted"> نوع ملک:آپارتمان </small>
                                <small class=" px-1 text-muted"> قیمت:500ملیون تومان </small>
                            </div>
                        </div>
                        <div class="card-footer d-flex justify-content-between align-items-center bg-white">
                            <small class="text-muted  ">
                                <i class="fa fa-user align-middle" aria-hidden="true"></i>
                                مصطفی محمدی
                            </small>
                            <small class="text-muted d-flex ">
                                <i class="fa fa-calendar align-middle  mt-1" aria-hidden="true"></i>
                                &nbsp;
                                هم اکنون
                            </small>
                        </div>
                    </div>

                </div>


            </div>
        </div>

    </div>

</main>
<?php
get_footer();
?>