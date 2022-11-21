<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");



if (isset($_POST["login-admin"])) {
    $errors = array();
    
    $username = $_POST["username"];
    if (empty($username)) {
        array_push($errors,"نام کاربری را وارد کنید");
    }

    $password = $_POST["password"];
    if (empty($password)) {
        array_push($errors,"رمز عبور خود را وارد کنید");
    }

    if (empty($errors)) {
        $sql_select = "select * from admins where username = ? && password = ?";
        $query_select = $connection->prepare($sql);
        

    }

}
?>

<?php 
get_header();
// http://localhost:2211/?page_id=41
/**
 * template name: admin_login
 */
#hash algoritm for admin : sha256
#salt : 9#h!is



?>
<main style="margin-top: 230px">
 <div class="container my-5">
     <div class="row justify-content-center">
         <div class="col-12 col-lg-6">
             <div class="card border-0 login">
                 <div class="card-body px-5">
                     <img src="img/logo3.jpeg" class="img-fluid mx-auto d-block" alt="logo_suiet">
                      <small class="text-muted text-center d-block">ورود مدیران به سایت آگهی املاک سوئیت</small>
                      <form class="shadow-none mt-5 link-dl" action="http://localhost:2211/?page_id=41" method="POST">
                          <div class="input_group">
                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">نام کاربری</small>
                                  </div>
                                  <input class="form-control" name="username" style="font-size: 13px;box-shadow: none " type="text" placeholder="نام کاربری خود را وارد کنید.." >
                              </div>

                          </div>
                          <div class="input_group my-3">

                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور</small>
                                  </div>
                                  <input class="form-control" name="password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را  وارد کنید.." >

                              </div>
                          </div>
                          <?php if (isset($_POST["login-admin"]) && !empty($errors)) { ?>
                          <div class="errors" >
                            <ul class="navbar-nav text-center pr-0 navbar-top">
                                <?php foreach($errors as $err) { ?>
                                    <li class='nav-item mt-2 text-danger'><?php echo $err; ?></li>
                                <?php } ?>
                            </ul>
                          </div>
                          <?php } ?>


                          <button name="login-admin" class="btn btn-block mt-4 hvr-pulse-grow">ورودبه پنل مدیریت آگهی املاک سوئیت</button>
                          <div class="forget mt-3">
                              <div class="custom-control custom-checkbox ">
                                  <input type="checkbox" class="custom-control-input" id="customcheak5">
                                  <label class="custom-control-label " style="padding-right: 20px" for="customcheak5">
                                      <small name="remeber_me" class="text-muted font-sm " >مرابه خاطربسپار</small>
                                  </label>

                              </div>
                          </div>

                      </form>
                 </div>

             </div>

         </div>


     </div>

 </div>

</main>

<?php 

get_footer();
?>