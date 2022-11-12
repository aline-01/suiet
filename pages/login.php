<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");
//process the form 
//thoes are codied by arian

if (isset($_POST["submit"])) {
    $errors = array();
    
    $fl_name = $_POST["lf_name"];
    if (empty($fl_name)) {
        array_push($errors,"نام و نام خانوادگی خود را وارد کنید");
    }else if (strlen($fl_name) > 70) {
        array_push($errors,"نام و نام خانوادگی شما بسیار طولانی است");
    }else if (strlen($fl_name) < 4) {
        array_push($errors,"نام و نام خانوادگی شما کوتاه است نام بلندتر را وارد کنید");
    }

    $phone_number = $_POST["phone_number"];
    if (empty($phone_number)) {
        array_push($errors,"شماره تلفن خود را وارد کنید");
    }else if (strlen($phone_number) > 11) {
        array_push($errors,"شماره تلفن معتبر را وارد کنید");
    }
    
    $password = $_POST["password"];
    if (empty($password)) {
        array_push($errors,"رمز عبور را وارد کنید");
    }else if (strlen($password) < 8) {
        array_push($errors,"رمز عبور بسیار کوتاه است");
    }else {
        $hashed_password = $functions->hash_password($password);
    }

    $date_reg = date("20y/m/d");

    $last_login = date("20y/m/d");

    if (empty($errors)) {
        $sql_insert = "insert into users (fname_lname,phone_number,password,date_register,last_login)
                value(?,?,?,?,?)";
        $query_insert = $connection->prepare($sql_insert);
        $query_insert->bindValue(1,$fl_name);
        $query_insert->bindValue(2,$phone_number);
        $query_insert->bindValue(3,$hashed_password);
        $query_insert->bindValue(4,$date_reg);
        $query_insert->bindValue(5,$last_login);
        $query_insert->execute();
        if ($query_insert->rowCount() > 0) {
            $this_user = $functions->get_last_row("users");
            $name = "user_access";
            $value = $this_user[0]["id"];
            if (isset($_POST["remeber_me"])) {
                $expire = time() + (86400 * 14);
            }else {
                $expire = time() + 86400;
            }
            setcookie($name,$value,$expire,"/");            
            $functions->header_to("accept_account.php");
        } else {
            array_push($errors,"مشکلی پیش آمده دوباره امتحان کنید");
        }
        
    }

    
}

?>
<?php
/**
 * template name: sign_up
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
                      <form class="shadow-none mt-5 link-dl reg_form" action="http://localhost:2211/?page_id=6" method="POST">
                          <div class="input_group">
                            <div class="input-group-prepend">
                                <div class="input-group-text ">
                                    <small class="text-muted">نام و نام خانوادگی</small>
                                </div>
                                <input class="form-control lf_name" name="lf_name" style="font-size: 13px;box-shadow: none " type="text" placeholder="نام و نام خانوادگی خود را وارد کنید" >
                            </div>
                        </div>
                        <br>
                          <div class="input_group">
                              <div class="input-group-prepend">
                                  <div class="input-group-text">
                                      <small class="text-muted">شماره موبایل</small>
                                  </div>
                                  <input class="form-control phone_n" name="phone_number" style="font-size: 13px;box-shadow: none " type="text" placeholder="شماره موبایل خود را وارد کنید" >
                              </div>

                          </div>
                          <div class="input_group my-3">

                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور</small>
                                  </div>
                                  <input class="form-control password" name="password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را وارد کنید.." >

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
                          <button class="btn btn-block mt-4 hvr-pulse-grow submit_btn" name="submit">ثبت نام در سایت املاک</button>
                          <div class="forget mt-3">
                              <div class="custom-control custom-checkbox ">
                                  <input type="checkbox" name="remeber_me" class="custom-control-input" id="customcheak5">
                                  <label class="custom-control-label " style="padding-right: 20px" for="customcheak5">
                                      <small class="text-muted font-sm " >مرابه خاطربسپار</small>
                                  </label>

                              </div>
                          </div>

                      </form>
                 </div>
                 <div class="card-footer d-flex justify-content-center align-items-center ">
                     <p class="font-md "> در سایت آگهی املاک سوئیت ثبت نام کردی؟</p>
                     <a href="#" class="text-success font-sm mb-4 mt-2 mr-2 align-middle"> ورود در سایت آگهی املاک سوئیت</a>
                 </div>
             </div>

         </div>


     </div>

 </div>

</main>

<script>
// const FORM = document.querySelector(".reg_form");
// const FL_NAME = document.querySelector(".lf_name");
// const PHONE_NUMBER = document.querySelector(".phone_n");
// const PASSWORD = document.querySelector(".password");
// const SUBMIT = document.querySelector(".submit_btn");

// FL_NAME.addEventListener("keyup",(fl_name)=> {
//     if (FL_NAME.value.lenght < )
// },false)

// console.log(SUBMIT)
// SUBMIT.addEventListener("click",(form_submit)=> {
//     alert("hahashashas")
//     console.log(FL_NAME.value)
// },false)




</script>


<?php
get_footer();
?>
