<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");


?>
<?php
/**
 * template name: change_pass
 */

?>
<?php
 get_header();
 ?>
<main style="margin-top: 230px">
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card border-0 login">
                    <div class="card-body px-5">
                        <img src="img/155 - Copy (3).jpg" class="img-fluid mx-auto d-block" alt="logo_suiet">
                        <small class="text-muted text-center d-block">ورود به سایت آگهی املاک سوئیت</small>
                        <form class="shadow-none mt-5 link-dl" action="http://localhost:2211/?page_id=25" method="POST">
                            <br>
                          <div class="input_group">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <small class="text-muted">شماره موبایل</small>
                                  </div>
                                  <input value="<?php if (isset($_SESSION["user_login"])) { echo $_SESSION["user_login"][0]; } ?>" class="form-control" name="phone_number" style="font-size: 13px;box-shadow: none " type="text" placeholder="شماره موبایل خود را وارد کنید" >
                                </div>
                                
                          </div>
                          <div class="input_group my-3">

                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور</small>
                                  </div>
                                  <input value="<?php if (isset($_SESSION["user_login"])) { echo $_SESSION["user_login"][1]; } ?>" class="form-control" name="password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را وارد کنید.." >
                              </div>
                          </div>

                          <a href="#">رمز عبور خود را فراموش کرده اید؟!</a>
                          <?php if (isset($_POST["submit"]) && !empty($errors)) { ?>
                          <div class="errors" >
                              <ul class="navbar-nav text-center pr-0 navbar-top">
                                  <?php 
                                    foreach($errors as $err) {
                                       echo "<li class='nav-item mt-2 text-danger'>{$err}</li>";
                                    }
                                  ?>
                              </ul>
                          </div>
                          <?php } ?>
                          <button class="btn btn-block mt-4 hvr-pulse-grow" name="submit">ثبت نام در سایت املاک</button>
                          <div class="forget mt-3">
                              <div class="custom-control custom-checkbox ">
                                  <input name="remberme" type="checkbox" class="custom-control-input" id="customcheak5">
                                  <label class="custom-control-label " style="padding-right: 20px" for="customcheak5">
                                      <small class="text-muted font-sm " >مرابه خاطربسپار</small>
                                  </label>

                              </div>
                          </div>

                      </form>
                 </div>
                 <div class="card-footer d-flex justify-content-center align-items-center ">
                     <p class="font-md ">هنوز در سایت آگهی املاک سوئیت ثبت نام نکردی؟!</p>
                     <a href="http://localhost:2211/?page_id=6" class="text-success font-sm mb-4 mt-2 mr-2 align-middle"> ثبت نام در سایت آگهی املاک سوئیت</a>
                 </div>
             </div>

         </div>


     </div>

 </div>

</main>
<?php
get_footer();
?>