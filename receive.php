<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");

if (!isset($_GET["id"]) || empty($_GET["id"])) {
    $functions->header_to("http://localhost:2211/?page_id=43");
}else {
    $id = $functions->safe_input($_GET["id"]);
    $this_advr = $functions->get_advertising_by_id($id);
    if (empty($this_advr)) {
        $functions->header_to("http://localhost:2211/?page_id=43");
    }
    $who_posted = $functions->get_user_by_id($this_advr[0]["user_sender"]);
}

// $this_advertising = $functions->get_advertising_by_id($)

get_header();
// http://localhost:2211/?page_id=45
/**
 * template name: receive
 */

?>
<main style="margin-top: 168px">
    <div class="container ">
        <div class="row">
            <div class="col-12 ">
                <div class="card mb-5  ">
                    <div class="card-body">

                        <form class="mt-4 form-send">
                            <div class="row">

                                <div class="form-group col-12 col-lg-6">
                                    <p >شماره آگهی:</p>
                                    <input type="text" class="form-control" placeholder="su-1234566" value="<?php echo $this_advr[0]["rand_number"]; ?>" >

                                </div>
                                <div class="form-group col-12 col-lg-6">
                                    <p >نام و نام خانوادگی:</p>
                                    <input type="text" class="form-control" placeholder="امین پوربابایی" value="<?php echo $who_posted[0]["fname_lname"]; ?>">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-6">
                                    <p >نام مشاور املاک:</p>
                                    <input type="text" class="form-control" placeholder="املاک فربد" >
                                </div>
                                <div class="form-group col-12 col-lg-6">
                                    <p >موضوع ملک:</p>
                                    <input type="tel" class="form-control" value="<?php //echo $this_advr[0][] ?>" placeholder="خانه 100 متری در سه راه سمین ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >نام شهر:</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["city_name"]; ?>" placeholder="اصفهان ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >نام استان :</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["state_name"]; ?>" placeholder="باغ ابریشم">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-6">
                                    <p >شماره تلفن همراه:</p>
                                    <input type="text" class="form-control" value="<?php echo $who_posted[0]["phone_number"]; ?>"" placeholder="09131234567" >
                                </div>
                                <div class="form-group col-12 col-lg-6">
                                    <p >آدرس:</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["address"]; ?>" placeholder="اصفهان سه راه سمین ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >نوع ملک:</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["house_type"]; ?>" placeholder="کلنگی ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >گروه بندی ملک:</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["house_grouping"]; ?>" placeholder="خریدوفروش خانه و آپار تمان ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >تعداد اتاق:</p>
                                    <input type="tel" class="form-control" value="<?php if(empty($this_advr[0]["room_number"])) echo "وارد نشده است"; ; echo $this_advr[0]["room_number"];?>" placeholder="2 ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >تعداد حمام:</p>
                                    <input type="tel" class="form-control" value="<?php if(empty($this_advr[0]["pathroom_number"])) echo "وارد نشده است"; ; echo $this_advr[0]["pathroom_number"]; ?>" placeholder="3 ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >تعداد سرویس بهداشتی:</p>
                                    <input type="tel" class="form-control" value="<?php if(empty($this_advr[0]["toilets_number"])) echo "وارد نشده است"; ; echo $this_advr[0]["toilets_number"]; ?>" placeholder="2 ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >متراژ:</p>
                                    <input type="tel" class="form-control" value="<?php if(empty($this_advr[0]["meterage"])) echo "وارد نشده است"; ; echo $this_advr[0]["meterage"]; ?>" placeholder="1200 متر ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >آسانسور:</p>
                                    <input type="tel" class="form-control" value="<?php if ($this_adver[0]["elevator"] == 1) { echo "دارد"; }else { echo "ندارد"; } ?>" placeholder="دارد ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >پارکینگ :</p>
                                    <input type="tel" class="form-control" value="<?php if ($this_advr[0]["parking"] == 1) { echo "دارد"; }else { echo "ندارد"; } ?>" placeholder="دارد ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >انبار:</p>
                                    <input type="tel" class="form-control" value="<?php if ($this_advr[0]["store"] == 1) { echo "دارد"; }else { echo "ندارد"; } ?>" placeholder="دارد ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >سال ساخت :</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["create_year"]; ?>" placeholder="1356">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >قیمت متراژ:</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["metrage_store"]; ?>" placeholder="متری 10 میلیون تومان ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >قیمت رهن :</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["mortgage"]; ?>" placeholder="رهن 100 میلیون تومان">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >قیمت ماهیانه اجاره:</p>
                                    <input type="tel" class="form-control" value="<?php echo $this_advr[0]["mount_price"]; ?>" placeholder="ماهی 20 میلیون تومان ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p >قیمت کل ملک  :</p>
                                    <input type="tel" class="form-control" value="<?php if ($this_advr[0]["house_all_price"] == "not set") { echo "وارد نشده است"; }else { $this_advr[0]["house_all_price"]; } ?>" placeholder="قیمت کل ملک 3 میلیارد تومان  ">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" form-group col-12 col-lg-6">
                                    <p >امکانات ملک :</p>
                                    <input type="tel" class="form-control" value="<?php if ($this_advr[0]["options"] == "not set") { echo "وارد نشده است"; }else { echo $this_advr[0]["options"]; } ?>" placeholder="mdf ,کولر,پکیج, ">
                                </div>

                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <p >توضیحات ملک :</p>
                                    <textarea name="" value="<?php echo $this_advr[0]["house_description"]; ?>" placeholder="خانه 100 متری سه راه سمین " class="form-control w-100 d-block" cols="50" rows="10" style="resize: none;"></textarea>
                                </div>
                            </div>
                        </form>
                        <p>عکس های آگهی</p>
                        <div class="swiper-container">

                            <div class="swiper-wrapper">
                                <!-- Slides -->
                                <div class="swiper-slide text-center" >
                                    <div class="swiper-zoom-container swiper-slide-duplicate-active" >
                                        <img src="img/2-2.jpg" width="650" height="405" alt="آگهی ملک">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container swiper-slide-duplicate-active" >
                                        <img src="img/1-1.jpg" width="650" height="405" alt="آگهی ملک">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-zoom-container swiper-slide-duplicate-active" >
                                        <img src="img/shiraz2.jpg" width="650" height="405" alt="آگهی ملک">
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>


                            <div class="swiper-button-prev"></div>
                            <div class="swiper-button-next"></div>
                        </div>
                        <div class="send mt-3 ">
                            <a href="#" class="btn px-5 hvr-push btn-outline-success"> تایید آگهی </a>
                            <a href="#" class="btn px-5 hvr-push btn-outline-danger"> لغو آگهی  </a>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>

    </div>
</main>

</body>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/swiper.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/all.min.js"></script>
<script src="js/main.js"></script>

</html>