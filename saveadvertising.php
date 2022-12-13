<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");



if (isset($_POST["submit"])) {
    $errors = array();

    if (!isset($_COOKIE["user_access"])) {
        $functions->header_to("http://localhost:2211/?page_id=25&adver");
    }else {
        $user_id = $_COOKIE["user_access"];
    }
    
    $city_name = $_POST["city_name"];
    if (empty($city_name) || $city_name == "نام شهر") {
        array_push($errors,"نام شهر را وارد کنید");
    }
    
    $state_name = $_POST["state_name"];
    if (empty($state_name) || $state_name == "نام استان") {
        array_push($errors,"نام استان را وارد کنید");
    }
    
    $address = $_POST["address_h"];
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
        $pathroom = 0;
    }
    
    $toilets = $_POST["toilets"];
    if (empty($toilets)) {
        $toilets = 0;
    }
    
    $metrage = $_POST["metrage"];
    if (empty($metrage)) {
        array_push($errors,"متراژ را وارد کنید");
    }
    
    $elevator = $_POST["elevator"];
    if (empty($elevator) || $elevator == "آسانسور") {
        $elevator = 0;
    }
    
    $parking = $_POST["parking"];
    if (empty($parking) || $parking == "پارکینگ") {
        $parking = 0;
    }
    
    $store = $_POST["store"];
    if (empty($store) || $store == "انبار") {
        $store = 0;
    }
    
    $created_year = $_POST["created_year"];
    if (empty($created_year)) {
        array_push($errors,"سال ساخت رو وارد کنید");
    }
    
    $metrage_price = $_POST["metrage_price"];
    if (empty($metrage_price)) {
        array_push($errors,"قیمت متراژ را وارد کنید");
    }
    
    $moterage_price = $_POST["mortgage_price"];
    if (empty($moterage_price)) {
        array_push($errors,"قیمت رهن را وارد کنید");
    }
    
    $mount_price = $_POST["mount_price"];
    if (empty($mount_price)) {
        array_push($errors,"قیمت ماهیانه اجاره را وارد کنید");
    }
    
    $all_price = $_POST["all_price"];
    if (empty($all_price)) {
        array_push($errors,"قیمت کل ملک را وارد کنید ");
    }
    
    $house_options = $_POST["house_options"];
    if (empty($house_options)) {
        $house_options = "not set";
    }
    
    $presale_price = $_POST["presale_price"];
    if (empty($presale_price)) {
        $presale_price = "not set";
    }
    
    $short_rental = $_POST["short_rental"];
    if (empty($short_rental)) {
        $short_rental = "not set";     
    }
    
    $about_house = $_POST["about_house"];
    if (empty($about_house)) {
        $about_house = "not set";
    }
    
    $descryption = $_POST["descryption"];
    if (empty($descryption)) {
        array_push($errors,"توضیحات ملک را وارد کنید");
    }
    
    // $img = $_FILES["img1"];
    // $path = "/home/alien-01/Desktop/wordpress/wp-content/themes/suiet v2/suiet v2/images/adver-img/".$img["name"];
    // $temp_name = $img["tmp_name"];
    // $is_upload = move_uploaded_file($temp_name,$path);
    // var_dump($is_upload);
    // var_dump($_FILES["img1"]);
    
    $img_1 = $functions->upload_image($_FILES["img1"]);
    if ($img_1 == "unValid") {
        array_push($errors,"تصویر یک برای آپلود ناموفق بود");
    }
    $img_2 = $functions->upload_image($_FILES["img2"]);
    if ($img_2 == "unValid") {
        array_push($errors,"اپلود عکس دو ناموفق بود");
    }
    $img_3 = $functions->upload_image($_FILES["img3"]);
    if ($img_3 == "unValid") {
        array_push($errors,"اپلود عکس سه ناموفق بود");
    }
    $img_4 = $functions->upload_image($_FILES["img4"]);
    if ($img_4 == "unValid") {
        array_push($errors,"اپلود عکس چهار ناموفق بود");
    }
    $img_5 = $functions->upload_image($_FILES["img5"]);
    if ($img_5 == "unValid") {
        array_push($errors,"اپلود عکس پنج ناموفق بود");
    }
    $img_6 = $functions->upload_image($_FILES["img6"]);
    if ($img_6 == "unValid") {
        array_push($errors,"اپلود عکس ششم ناموفق بود");
    }
    $img_7 = $functions->upload_image($_FILES["img7"]);
    if ($img_7 == "unValid") {
        array_push($errors,"اپلود عکس هفت ناموفق بود");   
    }
    $img_8 = $functions->upload_image($_FILES["img8"]);
    if ($img_8 == "unValid") {
        array_push($errors,"اپلود عکس هشت ناموفق بود");   
    }
    $img_9 = $functions->upload_image($_FILES["img9"]);
    if ($img_9 == "unValid") {
        array_push($errors,"اپلود عکس نه ناموفق بود");   
    }
    $img_10 = $functions->upload_image($_FILES["img10"]);
    if ($img_10 == "unValid") {
        array_push($errors,"اپلود عکس ده ناموفق بود");   
    }
    $img_11 = $functions->upload_image($_FILES["img11"]);
    if ($img_11 == "unValid") {
        array_push($errors,"اپلود عکس یازده ناموفق بود");   
    }
    $img_12 = $functions->upload_image($_FILES["img12"]);
    if ($img_12 == "unValid") {
        array_push($errors,"اپلود عکس دوازده ناموفق بود");   
    }
    $img_13 = $functions->upload_image($_FILES["img13"]);
    if ($img_13 == "unValid") {
        array_push($errors,"اپلود عکس سیزده ناموفق بود");   
    }
    $img_14 = $functions->upload_image($_FILES["img14"]);
    if ($img_14 == "unValid") {
        array_push($errors,"اپلود عکس چهارده ناموفق بود");   
    }
    $img_15 = $functions->upload_image($_FILES["img15"]);
    if ($img_15 == "unValid") {
        array_push($errors,"اپلود عکس پانزده ناموفق بود");   
    }
    $img_16 = $functions->upload_image($_FILES["img16"]);
    if ($img_16 == "unValid") {
        array_push($errors,"اپلود عکس شانزده ناموفق بود");
    }
    $img_17 = $functions->upload_image($_FILES["img17"]);
    if ($img_17 == "unValid") {
        array_push($errors,"اپلود عکس هفده ناموفق بود");
    }
    $img_18 = $functions->upload_image($_FILES["img18"]);
    if ($img_18 == "unValid") {
        array_push($errors,"اپلود عکس هجده ناموفق بود");
    }
    $img_19 = $functions->upload_image($_FILES["img19"]);
    if ($img_19 == "unValid") {
        array_push($errors,"اپلود عکس نوزده ناموفق بود");
    }
    $img_20 = $functions->upload_image($_FILES["img20"]);
    if ($img_20 == "unValid") {
        array_push($errors,"اپلود عکس بیست ناموفق بود");
    }
    
    $all_image_array = [$img_1,$img_2,$img_3,$img_4,$img_5,$img_6,$img_7,$img_8,$img_9,$img_10,$img_11,$img_12,$img_13,$img_14,$img_15,$img_16,$img_17,$img_18,$img_19,$img_20];
    $one_image = false;
    foreach($all_image_array as $img_l) {
        if ($img_l != false) {
            $one_image = true;
        }
    }  
    
    if ($one_image == false) {
        array_push($errors,"حداقل یک عکس وارد کنید");
    }
    
    if ($img_1 == false) $img_1 = "not_set";
    if ($img_2 == false) $img_2 = "not_set";
    if ($img_3 == false) $img_3 = "not_set";
    if ($img_4 == false) $img_4 = "not_set";
    if ($img_5 == false) $img_5 = "not_set";
    if ($img_6 == false) $img_6 = "not_set";
    if ($img_7 == false) $img_7 = "not_set";
    if ($img_8 == false) $img_8 = "not_set";
    if ($img_9 == false) $img_9 = "not_set";
    if ($img_10 == false) $img_10 = "not_set";
    if ($img_11 == false) $img_11 = "not_set";
    if ($img_12 == false) $img_12 = "not_set";
    if ($img_13 == false) $img_13 = "not_set";
    if ($img_14 == false) $img_14 = "not_set";
    if ($img_15 == false) $img_15 = "not_set";
    if ($img_16 == false) $img_16 = "not_set";
    if ($img_17 == false) $img_17 = "not_set";
    if ($img_18 == false) $img_18 = "not_set";
    if ($img_19 == false) $img_19 = "not_set";
    if ($img_20 == false) $img_20 = "not_set";
    
    
    $date_modify = $functions->get_date();
    
    $random_number = $functions->make_random_number(1,9,10);
    $random_number = "su-" . $random_number;
    
    if (empty($errors)) {
        //insert data to database
        $sql_adver = "insert into  advertising(city_name,state_name,address,house_type,house_grouping,room_number,pathroom_number,toilets_number,meterage,elevator,parking,store,create_year,metrage_store,mortgage,mount_price,house_all_price,options,presale_price,short_rental,about_house,house_description,images1,images2,images3,images4,images5,images6,images7,images8,images9,images10,images11,images12,images13,images14,images15,images16,images17,images18,images19,images20,send_date,user_sender,rand_number) 
        value (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
        $query_adver = $connection->prepare($sql_adver);
        $query_adver->bindValue(1,$city_name);
        $query_adver->bindValue(2,$state_name);
        $query_adver->bindValue(3,$address);
        $query_adver->bindValue(4,$house_type);
        $query_adver->bindValue(5,$house_grouping);
        $query_adver->bindValue(6,$room_number);
        $query_adver->bindValue(7,$pathroom);
        $query_adver->bindValue(8,$toilets);
        $query_adver->bindValue(9,$metrage);
        $query_adver->bindValue(10,$elevator);
        $query_adver->bindValue(11,$parking);
        $query_adver->bindValue(12,$store);
        $query_adver->bindValue(13,$created_year);
        $query_adver->bindValue(14,$metrage_price);
        $query_adver->bindValue(15,$moterage_price);
        $query_adver->bindValue(16,$mount_price);
        $query_adver->bindValue(17,$all_price);
        $query_adver->bindValue(18,$house_options);
        $query_adver->bindValue(19,$presale_price);
        $query_adver->bindValue(20,$short_rental);
        $query_adver->bindValue(21,$about_house);
        $query_adver->bindValue(22,$descryption);
        $query_adver->bindValue(23,$img_1);
        $query_adver->bindValue(24,$img_2);
        $query_adver->bindValue(25,$img_3);
        $query_adver->bindValue(26,$img_4);
        $query_adver->bindValue(27,$img_5);
        $query_adver->bindValue(28,$img_6);
        $query_adver->bindValue(29,$img_7);
        $query_adver->bindValue(30,$img_8);
        $query_adver->bindValue(31,$img_9);
        $query_adver->bindValue(32,$img_10);
        $query_adver->bindValue(33,$img_11);
        $query_adver->bindValue(34,$img_12);
        $query_adver->bindValue(35,$img_13);
        $query_adver->bindValue(36,$img_14);
        $query_adver->bindValue(37,$img_15);
        $query_adver->bindValue(38,$img_16);
        $query_adver->bindValue(39,$img_17);
        $query_adver->bindValue(40,$img_18);
        $query_adver->bindValue(41,$img_19);
        $query_adver->bindValue(42,$img_20);
        $query_adver->bindValue(43,$date_modify);
        $query_adver->bindValue(44,$user_id);
        $query_adver->bindValue(45,$random_number);
        $query_adver->execute();
        
        
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
                <div class="card mb-5">
                    <div class="card-body">
                        
                            
                       
                    <?php if (isset($_POST["submit"]) && !empty($errors)) {
                        foreach($errors as $err) {
                        ?>
                            <div class="eror_advertising">
                                <div class="row">
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger"><?php echo $err; ?></p>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <p class="text-danger"><?php echo $err; ?></p>
                                    </div>
                                </div>
                    <?php  } } ?>
                                <!--<div class="row">
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
                                    </div> -->
                                </div>
                                
                                
                                
                            <form class="mt-4 form-send" enctype="multipart/form-data" action="http://localhost:2211/?page_id=53" method="POST">    
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
                                    <input type="tel" class="form-control" placeholder="تعداد سرویس بهداشتی " name="toilets">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control meterage_f" placeholder="متراژ " name="metrage">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0" name="elevator">
                                        <option selected> آسانسور</option>
                                        <option value="1"> دراد</option>
                                        <option value="0"> ندارد</option>

                                    </select>
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0" name="parking">
                                        <option selected> پارکینگ</option>
                                        <option value="1"> دراد</option>
                                        <option value="0"> ندارد</option>

                                    </select>

                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <select class="custom-select ml-lg-3 mb-2 mb-lg-0" name="store">
                                        <option selected> انبار</option>
                                        <option value="1"> دراد</option>
                                        <option value="0"> ندارد</option>

                                    </select>
                                </div>
                            </div>

                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control create_year" placeholder="سال ساخت" name="created_year">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <input type="tel" class="form-control met_store" placeholder="قیمت متراژ" name="metrage_price">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6 rhen_price">
                                    <p>قیمت رهن :</p>
                                    <input type="tel" name="mortgage_price" class="form-control store_s"
                                           placeholder="به طور مثال: رهن 50 میلیون تومان">
                                </div>
                                <div class=" form-group col-12 col-lg-6  mount_price">
                                    <p>قیمت ماهیانه اجاره:</p>
                                    <input type="tel" name="mount_price" class="form-control store_ag"
                                           placeholder="به طور مثال: ماهی 20 میلیون تومان  ">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <p>قیمت کل ملک :</p>
                                    <input type="tel" name="all_price" class="form-control all_store"
                                           placeholder="به طور مثال: قیمت کل ملک سه میلیارد تومان  ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p>امکانات ملک :</p>
                                    <input type="text" name="house_options" class="form-control"
                                           placeholder="به طور مثال: mdf,کولر,آشپز خانه ">
                                </div>
                            </div>
                            <div class="row">

                                <div class=" form-group col-12 col-lg-6">
                                    <p>قیمت پیش فروش :</p>
                                    <input type="tel" class="form-control all_store" name="presale_price"
                                           placeholder="به طور مثال: قیمت کل ملک سه میلیارد تومان  ">
                                </div>
                                <div class=" form-group col-12 col-lg-6">
                                    <p>اجاره کوتاه مدت :</p>
                                    <input type="text" name="short_rental" class="form-control"
                                           placeholder="به طور مثال روزانه ۲۰۰ هزار تومان">
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-12">
                                    <p>موضوع ملک :</p>
                                    <input type="text" name="about_house" class="form-control"
                                           placeholder="به طور مثال: خانه 200 متری در سه راه سمین ">
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-12">
                                    <p>توضیحات ملک :</p>
                                    <textarea name="descryption" class="form-control w-100 d-block description" cols="50" rows="10"
                                              style="resize: none;"></textarea>
                                </div>
                            </div>
                            
                            <div class="col-12 "><br><br>
                            <div class="form-group">
                                <p style="font-family: Tahoma">آپلود عکس آگهی</p>
                                <div class="input-group">
                                    <div class="img_div input-group-btn mt-2">
           <span class="fileUpload btn btn-info">
               <span class="upls">
                   <i class="fa fa-plus" style="font-size: 40px;"></i>
                </span>
                <input type="file" class="upload up img_p" name="img1">
            </span></div>
            <div class="img_div input-group-btn mt-2">
                <span class="fileUpload btn btn-info">
      <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img2">
    </span>
         </div>
                                    <div class="img_div input-group-btn mt-2">
                                        <span class="fileUpload btn btn-info">
                                            <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
      </span>
      <input type="file" class="upload up img_p" name="img3">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p"  name="img4">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img5" >
    </span>
</div>
<div class="img_div input-group-btn mt-2">
  <span class="fileUpload btn btn-info">
      <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img6">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img7">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img8">
    </span>
                                    </div>
                                    <div class="input-group-btn mt-2">
                                        <span class="fileUpload btn btn-info">
                                            <span class="upl">
          <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img9">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img10">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img11">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img12">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img13">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img14">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img15">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img16">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img17">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img18">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img19">
    </span>
</div>
<div class="img_div input-group-btn mt-2">
    <span class="fileUpload btn btn-info">
        <span class="upl">
            <i class="fa fa-plus" style="font-size: 40px;"></i>
        </span>
        <input type="file" class="upload up img_p" name="img20">
    </span>
</div>


</div>
</div>

</div>
<div class="send mt-3 text-center "><br>
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
