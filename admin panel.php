<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");
$functions->check_admin_permision();

$id = $_COOKIE["admin_access"];
$this_admin = $functions->get_admin_by_id($id);

?>
<?php 

get_header();
// http://localhost:2211/?page_id=43
/**
 * template name: admin_panel
 */

?>
<main style="margin-top: 230px">
    <div class="container my-3">
        <div class="row">
            <div class="col-12 col-lg-3 iransans">
                <div class="card border-0 mb-4 profile-admin">
                    <div class="card-body text-center ">
                        <img src="img/logo3.jpeg" class="img-fluid mx-auto " >
                        <small class="d-block mt-3">
                            پنل مدیریت سایت:
                            <?php echo $this_admin[0]["username"]; ?>
                        </small>
                    </div>
                    <div class="card-footer bg-white  text-center   align-items-center border-0  " style="margin-right: 24px">
                        <a href="http://localhost:2211/?page_id=51" class="font-sm text-danger  "  style="margin-left: 30px  " > خروج از حساب</a>
                    </div>
                </div>
                <div class="card border-0 profile-side">
                    <div class="card-header bg-transparent  pt-0">
                        <p class="mb-0 px-2 py-1 font-sm">
                            دسترسی های مدیر
                        </p>

                    </div>
                    <div class="card-body px-8">
                        <ul class="nav flex-column pr-0">

                            <li class="nav-item mb-2">
                                <a href="#agahikarbaran " class="nav-link  font-sm active " data-toggle="tab">
                                    <i class="fa fa-eye font-md align-middle" aria-hidden="true"></i>

                                آگهی های کاربران

                                </a>
                            </li>

                            <li class="nav-item mb-2">
                                <a href="#agahiamlak " class="nav-link  font-sm  " data-toggle="tab">
                                    <i class="fa fa-eye font-md align-middle" aria-hidden="true"></i>

                                    آگهی های مشاوران املاک

                                </a>
                            </li>
                        </ul>

                    </div>

                </div>

            </div>
            <div class="col-12 col-lg-9 py-4">
                <div class="tab-content">

                    <div class="tab-pane show fade active " id="agahikarbaran">
                        <div class="card border-0 agahiman">
                            <div class="card-header bg-transparent pt-0  ">
                                <p class="mb-0 px-2 py-1 font-md">آگهی های کاربران</p>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-striped text-center table-responsive-md">
                                    <thead>
                                    <tr class="font-md">
                                        <th> ردیف:</th>
                                        <th> شماره آگهی:</th>
                                        <th> نام و نام خانوادگی:</th>
                                        <th> تلفن همراه:</th>

                                        <th> مبلغ کل :</th>
                                        <th> عملیات پرداخت:</th>
                                        <th> وضعیت آگهی:</th>
                                        <th> مشاهده آگهی:</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                <?php 
                                    $user_advertising = $functions->get_all_advertising();
                                    $coulm_number = 1;
                                    foreach($user_advertising as $advr) {
                                        $this_user = $functions->get_user_by_id($advr["user_sender"]);
                                ?>
                                    <tr class="" style="font-size: 12px">
                                        <td><?php echo $coulm_number; ?></td>
                                        <td><?php echo $advr["rand_number"]; ?></td>
                                        <td><?php echo $this_user[0]["fname_lname"]; ?></td>
                                        <td ><?php echo $this_user[0]["phone_number"]; ?></td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <?php if ($advr["accepted"] == "accept") { ?>
                                            <td class="text-success">تایید</td>
                                        <?php }else if ($advr["accepted"] == "wating") { ?>
                                            <td class="text-warning">درحال بررسی</td>
                                        <?php }else { ?>
                                            <td class="text-danger">تایید نشد</td>
                                        <?php } ?>
                                        <td><a href="http://localhost:2211/?page_id=45&id=<?php echo $advr["id"]; ?>">نمایش</a></td>
                                    </tr>
                                <?php 
                                        $coulm_number+=1;
                                    }
                                    
                                ?>
                                    <!-- <tr class="" style="font-size: 12px">
                                        <td>2</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="#">نمایش</a></td>
                                    </tr>
                                    <tr class="" style="font-size: 12px">
                                        <td>3</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="#">نمایش</a></td>
                                    </tr>
                                    <tr class="" style="font-size: 12px">
                                        <td>4</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="#">نمایش</a></td>
                                    </tr> -->
                                    </tbody>

                                </table>


                            </div>
                        </div>

                    </div>

                    <div class="tab-pane fade  " id="agahiamlak">
                        <div class="card border-0 agahiman">
                            <div class="card-header bg-transparent pt-0  ">
                                <p class="mb-0 px-2 py-1 font-md">آگهی های ملاک</p>
                            </div>
                            <div class="card-body">
                                <table class="table table-borderless table-striped text-center table-responsive-md">
                                    <thead>
                                    <tr class="font-md">
                                        <th> ردیف:</th>
                                        <th> شماره آگهی:</th>
                                        <th> نام و نام خانوادگی:</th>
                                        <th> نام مشاوراملاک:</th>
                                        <th> تلفن همراه:</th>

                                        <th> مبلغ کل :</th>
                                        <th> عملیات پرداخت:</th>
                                        <th> وضعیت آگهی:</th>
                                        <th> مشاهده آگهی:</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="" style="font-size: 12px">
                                        <td>1</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td>املاک فربد</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="receive.html">نمایش</a></td>
                                    </tr>
                                    <tr class="" style="font-size: 12px">
                                        <td>2</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td>املاک فربد</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="#">نمایش</a></td>
                                    </tr>
                                    <tr class="" style="font-size: 12px">
                                        <td>3</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td>املاک فربد</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="#">نمایش</a></td>
                                    </tr>
                                    <tr class="" style="font-size: 12px">
                                        <td>4</td>
                                        <td>su-235489534</td>
                                        <td>امین پوربابایی</td>
                                        <td>املاک فربد</td>
                                        <td >09131234567</td>

                                        <td>20هزارتومان</td>
                                        <td class="text-success">پرداخت شده</td>
                                        <td class="text-success">تایید</td>
                                        <td><a href="receive.html">نمایش</a></td>
                                    </tr>
                                    </tbody>

                                </table>


                            </div>
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