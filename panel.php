<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");

if (!isset($_COOKIE["user_access"])) {
    $functions->header_to("/");
}else {
    $user_id = $_COOKIE["user_access"];
    $accepted_user = $functions->check_user_accept($user_id);
    if (!$accepted_user) {
        $functions->header_to("/");
    }
}

$this_user = $functions->get_user_by_id($user_id);

if (isset($_POST["change_information"])) {
    echo "<h1>your want to change your information</h1>";
}

?>
<?php 
/**
 * template name: user_panel
 */

get_header();
?>
<main style="margin-top: 230px">
<div class="container my-3">
    <div class="row">
        <div class="col-12 col-lg-3 iransans">
            <div class="card border-0 mb-4 profile">
                <div class="card-body text-center ">
                    <img src="img/Group 1143.png" class="img-fluid mx-auto d-block" >
                   <small class="d-block mt-3"><?php echo $this_user[0]["fname_lname"] ?></small>
                </div>
               <div class="card-footer text-center d-flex justify-content-between align-items-center border-0 shadow-none py-3">
                   <a href="#"  class="border-left px-2 font-sm">تغییر رمز عبور</a>
                   <a href="#" class="font-sm"  style="margin-left: 30px " > خروج از حساب</a>

               </div>
            </div>
            <div class="card border-0 profile-side">
                <div class="card-header bg-transparent  pt-0">
                    <p class="mb-0 px-2 py-1 font-sm">دسترسی های کاربری </p>

                </div>
                 <div class="card-body px-8">
                     <ul class="nav flex-column pr-0">
                         <li class="nav-item mb-2">
                             <a href="#profile " class="nav-link active font-sm active" data-toggle="tab">
                                 <i class="fa fa-user-circle font-md align-middle" aria-hidden="true"></i>

                                 پروفایل کاربری

                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a href="#agahiman " class="nav-link  font-sm " data-toggle="tab">
                                 <i class="fa fa-eye font-md align-middle" aria-hidden="true"></i>

                                آگهی های من

                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a href="#agahi_mordealaghe " class="nav-link  font-sm " data-toggle="tab">
                                 <i class="fa fa-heart font-md align-middle" aria-hidden="true"></i>

                                آگهی ها مورد علاقه ام

                             </a>
                         </li>
                         <li class="nav-item mb-2">
                             <a href="#etelate_shakhsi " class="nav-link font-sm " data-toggle="tab">
                                 <i class="fa fa-address-card font-md align-middle" aria-hidden="true"></i>

                                 اطلاعات شخصی
                             </a>
                         </li>
                     </ul>

                 </div>
            </div>

        </div>
        <div class="col-12 col-lg-9 py-4">
            <div class="tab-content">
                <div class="tab-pane fade show active  " id="profile">
                    <div class="row">
                        <div class="col-12 col-lg-9">
                            <div class="card border-0 profile-side ">
                                <div class="card-header bg-transparent border-0 pt-0">
                                    <p class="mb-0 px-2 py-1 font-sm">اطلاعات شخصی</p>

                                </div>
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 user-info">
                                        <div>
                                            <p class="font-sm">نام و نام خانوادگی:</p>
                                            <p class="font-md"><?php echo $this_user[0]["fname_lname"]; ?></p>
                                        </div>
                                        <div>
                                            <p class="font-sm">شماره تلفن همراه:</p>
                                            <p class="font-md"><?php echo $this_user[0]["phone_number"]; ?></p>
                                        </div>
                                        <!-- <div>
                                            <p class="font-sm">آدرس ایمیل:</p>
                                            <p class="font-md">amintkd031@gmail.com</p>
                                        </div> -->

                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-3 mb-3 user-info">
                                        <div>
                                            <p class="font-sm" >حساب تایید شده</p>
                                            <p class="font-md">مرد  </p>
                                        </div>
                                        <div>
                                            <p class="font-sm">تاریخ عضویت :</p>
                                            <p class="font-md"><?php echo $this_user[0]["date_register"]; ?></p>
                                        </div>
                                        <div>
                                            <p class="font-sm">تاریخ آخرین ورود :</p>
                                            <p class="font-md"><?php echo $this_user[0]["last_login"]; ?></p>
                                        </div>

                                    </div>
                                    <!-- <div class="d-flex justify-content-between align-items-center  user-info">
                                        <div>
                                            <p class="font-sm">دریافت خبر نامه :</p>
                                            <p class="font-md">بله </p>
                                        </div>
                                        <div>
                                            <p class="font-sm">دریافت پیامک:</p>
                                            <p class="font-md">خیر</p>
                                        </div>
                                        <div>
                                            <p class="font-sm">دریافت نوتیفکشن:</p>
                                            <p class="font-md">بله </p>
                                        </div>

                                    </div> -->

                                </div>
                                <div class="card-footer border-0 py-3  text-center info-user-footer">
                                    <a href="http://localhost:2211/?page_id=30#etelate_shakhsi" class="font-md" >ویرایش اطلاعات شخصی</a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <div class="tab-pane fade " id="agahiman">
                    <div class="card border-0 agahiman">
                        <div class="card-header bg-transparent pt-0">
                         <p class="mb-0 px-2 py-1 font-md">آگهی های من</p>
                        </div>
                        <div class="card-body">
                            <table class="table table-borderless table-striped text-center table-responsive-md">
                              <thead>
                              <tr class="font-md">
                                  <th> ردیف:</th>
                                  <th> شماره آگهی:</th>
                                  <th> تاریخ آگهی های بارگزاری شده:</th>
                                  <th> وضعیت آگهی:</th>
                                  <th> مبلغ کل :</th>
                                  <th> عملیات پرداخت:</th>
                                  <th> مشاهده آگهی:</th>
                              </tr>
                              </thead>
                                <tbody>
                                <tr class="" style="font-size: 12px">
                                    <td>1</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-success">تایید</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-success">پرداخت شده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                <tr class="" style="font-size: 12px">
                                    <td>2</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-warning">درحال بررسی</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-success">پرداخت شده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                <tr class="" style="font-size: 12px">
                                    <td>3</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-danger">تایید نشد</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-danger">پرداخت نشده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                <tr class="" style="font-size: 12px">
                                    <td>4</td>
                                    <td>su-235489534</td>
                                    <td>20تیر1401</td>
                                    <td class="text-danger">  تایید نشد</td>
                                    <td>20هزارتومان</td>
                                    <td class="text-danger">پرداخت نشده</td>
                                    <td><a href="#">نمایش</a></td>
                                </tr>
                                </tbody>

                            </table>


                        </div>
                    </div>

                </div>
                <div class="tab-pane fade   " id="agahi_mordealaghe">
                    <div class="card border-0 agahi_mordealaghe">
                        <div class="card-header bg-transparent border-0 pt-0">
                        <p class="mb-0 px-2 py-1 font-md">آگهی های مورد علاقه ام</p>
                        </div>
                        <div class="card-body">
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2 info-user2">
                                     <div class="d-flex align-items-center">
                                         <img src="img/shiraz2.jpg" alt="agahi_mordealaghe" class="img-fluid ml-lg-2" style="border-radius: 15px; width: 10em">
                                         <div>
                                             <small class="d-block text-center text-dark"> اصفهان</small>
                                             <small class="d-block text-danger py-2">واحد 70 متری در شهرک ولیعصر اصفهان</small>
                                             <small class="d-block text-success py-2">خریدوفروش خانه وآپارتمان </small>
                                             <small class="d-block text-muted py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                 سه راه سیمین خ جانبازان خ سعادت کازرونی
                                             </small>
                                         </div>

                                     </div>
                                    <div>
                                        <a href="#" class="trash"><i class="fa fa-trash align-middle" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </a>
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2 info-user2">
                                    <div class="d-flex align-items-center">
                                        <img src="img/shiraz2.jpg" alt="agahi_mordealaghe" class="img-fluid ml-lg-2" style="border-radius: 15px; width: 10em">
                                        <div>
                                            <small class="d-block text-center text-dark"> اصفهان</small>
                                            <small class="d-block text-danger py-2">واحد 70 متری در شهرک ولیعصر اصفهان</small>
                                            <small class="d-block text-success py-2">خریدوفروش خانه وآپارتمان </small>
                                            <small class="d-block text-muted py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                سه راه سیمین خ جانبازان خ سعادت کازرونی
                                            </small>
                                        </div>

                                    </div>
                                    <div>
                                        <a href="#" class="trash"><i class="fa fa-trash align-middle" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </a>
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2 info-user2">
                                    <div class="d-flex align-items-center">
                                        <img src="img/shiraz2.jpg" alt="agahi_mordealaghe" class="img-fluid ml-lg-2" style="border-radius: 15px; width: 10em">
                                        <div>
                                            <small class="d-block text-center text-dark"> اصفهان</small>
                                            <small class="d-block text-danger py-2">واحد 70 متری در شهرک ولیعصر اصفهان</small>
                                            <small class="d-block text-success py-2">خریدوفروش خانه وآپارتمان </small>
                                            <small class="d-block text-muted py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                سه راه سیمین خ جانبازان خ سعادت کازرونی
                                            </small>
                                        </div>

                                    </div>
                                    <div>
                                        <a href="#" class="trash"><i class="fa fa-trash align-middle" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </a>
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2 info-user2">
                                    <div class="d-flex align-items-center">
                                        <img src="img/shiraz2.jpg" alt="agahi_mordealaghe" class="img-fluid ml-lg-2" style="border-radius: 15px; width: 10em">
                                        <div>
                                            <small class="d-block text-center text-dark"> اصفهان</small>
                                            <small class="d-block text-danger py-2">واحد 70 متری در شهرک ولیعصر اصفهان</small>
                                            <small class="d-block text-success py-2">خریدوفروش خانه وآپارتمان </small>
                                            <small class="d-block text-muted py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                سه راه سیمین خ جانبازان خ سعادت کازرونی
                                            </small>
                                        </div>

                                    </div>
                                    <div>
                                        <a href="#" class="trash"><i class="fa fa-trash align-middle" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </a>
                            <a href="#">
                                <div class="d-flex justify-content-between align-items-center border-bottom py-2 info-user2">
                                    <div class="d-flex align-items-center">
                                        <img src="img/shiraz2.jpg" alt="agahi_mordealaghe" class="img-fluid ml-lg-2" style="border-radius: 15px; width: 10em">
                                        <div>
                                            <small class="d-block text-center text-dark"> اصفهان</small>
                                            <small class="d-block text-danger py-2">واحد 70 متری در شهرک ولیعصر اصفهان</small>
                                            <small class="d-block text-success py-2">خریدوفروش خانه وآپارتمان </small>
                                            <small class="d-block text-muted py-2"><i class="fa fa-map-marker" aria-hidden="true"></i>
                                                سه راه سیمین خ جانبازان خ سعادت کازرونی
                                            </small>
                                        </div>

                                    </div>
                                    <div>
                                        <a href="#" class="trash"><i class="fa fa-trash align-middle" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                </div>
                            </a>
                        </div>
                        <div class="card-footer text-center border-0 info-user-footer">
                            <a href="#" class="font-md" >حذف و ویرایش علاقه مندی ها</a>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade   " id="etelate_shakhsi">
                      <div class="card border-0 etelate_shakhsi">
                          <div class="card-header bg-transparent border-0 pt-0">
                              <p class="mb-0 px-2 py-1 font-md">اطلاعات شخصی</p>

                          </div>
                          <div class="card-body">
                              <div class="size">
                                  <form action="http://localhost:2211/?page_id=30" method="POST">
                                      <div class="row">
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">نام:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" class="form-control " style="font-size: 13px" value="امین">
                                              </div>
                                          </div>
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">نام خانوادگی:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" class="form-control " style="font-size: 13px" placeholder="پوربابایی">
                                              </div>
                                          </div>   
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">تلفن همراه:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" class="form-control " style="font-size: 13px" value="09131234567">
                                              </div>
                                          </div>
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">شهر:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" class="form-control " style="font-size: 13px" value="اصفهان">
                                              </div>
                                          </div>
                                          <div class="form-group col-12 col-lg-6">
                                              <div class="input-group">
                                                  <div class="input-group-prepend">
                                                      <div class="input-group-text bg-white ">
                                                          <small class="text-muted font-md">استان:</small>
                                                      </div>
                                                  </div>
                                                  <input type="text" class="form-control " style="font-size: 13px" value="اصفهان">
                                              </div>

                                          </div>
                                          <div class="col-12 text-center py-2  btn btn-block  sabte_etelat">
                                             <button name="change_information" class="btn btn-block hvr-pulse-shrink"><a href="#">
                                                  ثبت اطلاعات <i class="fa fa-chevron-left align-middle" aria-hidden="true"></i></a></button>

                                          </div>

                                      </div>

                                  </form>

                              </div>

                          </div>

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