<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");

if (isset($_POST["submit"])) {
    $errors = array();

    $city_name = $_POST["city_name"];
    if (empty($city_name) || $city_name == "نام شهر") {
        array_push($errors,"نام شهر را وارد کنید");
    }

    $state_name = $_POST["state_name"];
    if (empty($state_name) || $state_name == "نام استان") {
        array_push($errors,"نام استان را وارد کنید");
    }

    $address = $_POST["address"];
    if (empty($address)) {
        array_push($errors,"آدرس را وارد کنید");
    }
    
    $house_type = $_POST["house_type"];
    if (empty($house_type) || $house_type == "نوع ملک") {
        array_push($errors,"نوع خانه را وارد کنید");
    }

    $house_grouping = $_POST["house_grouping"];
    if (empty($house_grouping) || $house_grouping == "گروه بندی ملک") {
        array_push($errors,"گروه بندی ملک را وارد کنید");
    }

    $room_number = $_POST["room_number"];
    if (empty($room_number)) {
        $room_number = 0;
    }

    $pathroom = $_POST["pathroom"];
    if (empty($pathroom)) {
        
    }


}


?>
<?php 
// http://localhost:2211/?page_id=53
/**
 * template name: send_advertising
 */
get_header();

?>
<main style="margin-top: 168px">
    <div class="container ">
        <div class="row">
            <div class="col-12 ">
                <div class="card mb-5  ">
                    <div class="card-body">
                        
                            
                       

                        <!--    <div class="eror_advertising">
                            <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                    <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger">adres ra vared konid</p>
                                    </div>
                                </div> -->
                                
                                
                                
                                
                                
                            <form class="mt-4 form-send" action="http://localhost:2211/?page_id=53" method="POST">    
                                <div class="row">
                                    <div class=" form-group col-12 col-lg-6">
                                    <p>نام شهر:</p> 
                                    <select onchange="ostan(this);" class="custom-select ml-lg-3 mb-2 mb-lg-0 city_f" name="city_name">
                                        <option selected> نام شهر</option>
                                        <option data-val="31" value="اصفهان"> اصفهان</option>
                                        <option data-val="35" value="یزد">یزد</option>
                                        <option data-val="21" value="تهران"> تهران</option>
                                        <option data-val="51" value="تهران"> مشهد</option>
                                    </select>
                                </div>
                                <div class=" form-group col-12 col-lg-6 shahr">
                                    <p>نام استان:</p>
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0 state_f" name="state_name">
                                        <option selected> نام استان</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control address_h" placeholder="آدرس را وارد کنید " name="address_h">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0 house_type" name="house_type">
                                        <option selected> نوع ملک</option>
                                        <option value="زمین">زمین</option>
                                        <option value="اداری تجاری"> اداری تجاری</option>
                                        <option value="مسکونی"> مسکونی</option>
                                        <option value="آپارتمان"> آپارتمان</option>
                                        <option value="باغ"> باغ</option>
                                        <option value=" کلنگی"> کلنگی</option>
                                        <option value="ویلایی"> ویلایی</option>
                                        <option value="انبار و سوله کارگاه"> انبار و سوله کارگاه</option>
                                        <option value="خانه معمولی"> خانه معمولی</option>
                                        <option value="مغازه"> مغازه</option>
                                        <option value="پانسیون"> پانسیون</option>

                                    </select>
                                </div>

                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0 houses_group" name="house_grouping">
                                        <option selected> گروه بندی ملک</option>
                                        <option value="خریدوفروش خانه و آپارتمان"> خریدوفروش خانه و آپارتمان</option>
                                        <option value="رهن و اجاره خانه و آپارتمان"> رهن و اجاره خانه و آپارتمان</option>
                                        <option value="پیش فروش خریدوفروش خانه و آپارتمان"> پیش فروش خریدوفروش خانه و آپارتمان</option>
                                        <option value="اجاره کوتاه مدت و سوییت"> اجاره کوتاه مدت و سوییت</option>
                                        <option value="رهن و اجاره ویلا و باغ"> رهن و اجاره ویلا و باغ</option>
                                        <option value="خرید و فروش ویلا و باغ"> خرید و فروش ویلا و باغ</option>
                                        <option value="پیش فروش ویلا و باغ"> پیش فروش ویلا و باغ</option>
                                        <option value="خریدوفروش مغازه"> خریدوفروش مغازه</option>
                                        <option value="رهن و اجاره مغازه"> رهن و اجاره مغازه</option>
                                      

                                    </select>
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control" placeholder="تعداد اتاق" name="room_number">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control" placeholder="تعداد حمام" name="pathroom">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control" placeholder="تعداد سرویس بهداشتی ">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control meterage_f" placeholder="متراژ ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0">
                                        <option selected> آسانسور</option>
                                        <option value="1"> دراد</option>
                                        <option value="2"> ندارد</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0">
                                        <option selected> پارکینگ</option>
                                        <option value="1"> دراد</option>
                                        <option value="2"> ندارد</option>

                                    </select>

                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0">
                                        <option selected> انبار</option>
                                        <option value="1"> دراد</option>
                                        <option value="2"> ندارد</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control create_year" placeholder="سال ساخت ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control met_store" placeholder="قیمت متراژ ">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6 rhen_price">
                                    <p>قیمت رهن :</p>
                                    <input type="tel" class="form-control store_s"
                                           placeholder="به طور مثال: رهن 50 میلیون تومان">
                                </div>
                                <div class=" form-group col-12 col-lg-6  mount_price">
                                    <p>قیمت ماهیانه اجاره:</p>
                                    <input type="tel" class="form-control store_ag"
                                           placeholder="به طور مثال: ماهی 20 میلیون تومان  ">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <p>قیمت کل ملک :</p>
                                    <input type="tel" class="form-control all_store"
                                           placeholder="به طور مثال: قیمت کل ملک سه میلیارد تومان  ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p>امکانات ملک :</p>
                                    <input type="text" class="form-control"
                                           placeholder="به طور مثال: mdf,کولر,آشپز خانه ">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <p>قیمت پیش فروش :</p>
                                    <input type="tel" class="form-control all_store"
                                           placeholder="به طور مثال: قیمت کل ملک سه میلیارد تومان  ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p>اجاره کوتاه مدت :</p>
                                    <input type="text" class="form-control"
                                           placeholder="به طور مثال روزانه ۲۰۰ هزار تومان">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <p>موضوع ملک :</p>
                                    <input type="text" class="form-control"
                                           placeholder="به طور مثال: خانه 200 متری در سه راه سمین ">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <p>توضیحات ملک :</p>
                                    <textarea name="" class="form-control w-100 d-block description" cols="50" rows="10"
                                              style="resize: none;"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-12 "><br><br>
                            <div class="form-group">
                                <p style="font-family: Tahoma">آپلود عکس آگهی</p>
                                <div class="input-group">
                                    <div class="input-group-btn mt-2">
           <span class="fileUpload btn btn-success">
               <span class="upl">
                   <i class="fa fa-plus" style="font-size: 40px;"></i>
                </span>
                <input type="file" class="upload up">
            </span></div>
            <div class="input-group-btn mt-2">
                <span class="fileUpload btn btn-success">
      <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up">
    </span>
                                    </div>
                                    <div class="input-group-btn mt-2">
                                        <span class="fileUpload btn btn-success">
                                            <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
      </span>
      <input type="file" class="upload up">
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
  <span class="fileUpload btn btn-success">
      <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
                                    </div>
                                    <div class="input-group-btn mt-2">
                                        <span class="fileUpload btn btn-success">
                                            <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>
<div class="input-group-btn mt-2">
    <span class="fileUpload btn btn-success">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up" >
    </span>
</div>


</div>
</div>

</div>
<div class="send mt-3 text-center ">
    <input type="submit" name="submit" class="btn px-5 hvr-push btn-outline-success submit-btn" value="ارسال آگهی">
</div>
</div>

</div>



</div>

</div>
</form>

    </div>

    </div>

    </div>

    </div>
</main>
<?php 

get_footer();

?>
