<?php 
include("includes/db_config/db_connection.php");
include("includes/functions.php");

$this_user = $functions->get_user_by_id($_COOKIE["user_access"]);

if (isset($_POST["submit"])) {
    $errors = array();

    $current_password = $_POST["current_password"];
    if (empty($current_password)) {
        array_push($errors,"رمز عبور فعلی را وارد کنید");
    }else {
        $hashed_password = $functions->hash_password($current_password);
        $sql_true_user = "select * from users where phone_number = ? && password = ?";
        $query_true_user = $connection->prepare($sql_true_user);
        $query_true_user->bindValue(1,$this_user[0]["phone_number"]);
        $query_true_user->bindValue(2,$hashed_password);
        $query_true_user->execute();
        if ($query_true_user->rowCount() > 0) {
            //do nothing
        }else {
            array_push($errors,"رمز عبور فعلی نادرست است");
        }
    }

    $new_password = $_POST["new_password"];
    if (empty($new_password)) {
        array_push($errors,"رمز عبور جدید را وارد کنید");
    }else if (strlen($new_password) < 8) {
        array_push($errors,"رمز عبور خیلی طولانی است");
    }else {
        $hashed2_password = $functions->hash_password($new_password);
    }

    if (empty($errors)) {
        $sql_update = "update users set password = ? where id = ?";
        $query_update = $connection->prepare($sql_update);
        $query_update->bindValue(1,$hashed2_password);
        $query_update->bindValue(2,$this_user[0]["id"]);
        $query_update->execute();
        if ($query_update->rowCount() > 0) {
            $functions->header_to("http://localhost:2211/?page_id=30");
        }else {
            array_push($errors,"مشکلی وجود دارد، دوباره امتحان کنید");
        }
    }

}

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
                        <form class="shadow-none mt-5 link-dl" action="http://localhost:2211/?page_id=34" method="POST">
                            <br>
                          <div class="input_group my-3">

                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور فعلی</small>
                                  </div>
                                  <input class="form-control" name="current_password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را وارد کنید.." >
                              </div><br> 
                              <div class="input-group-prepend">
                                  <div class="input-group-text ">
                                      <small class="text-muted">رمز عبور جدید</small>
                                  </div>
                                  <input class="form-control" name="new_password" style="font-size: 13px;box-shadow: none " type="password" placeholder="رمز عبور خود را وارد کنید.." >
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
                          <button class="btn btn-block mt-4 hvr-pulse-grow" name="submit">تغییر رمز عبور </button>
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