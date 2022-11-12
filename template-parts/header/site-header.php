<?php 

global $connection;
if (isset($_COOKIE["user_access"])) {
    $user_id = $_COOKIE["user_access"];
    $sql_login_user = "select * from users where id = {$user_id}";
    $query_login_user = $connection->prepare($sql_login_user);
    $query_login_user->execute();
    $result = $query_login_user->fetchAll(PDO::FETCH_ASSOC);
    // var_dump($result);
}


?>
<header>
    <div class="header-top bg_nav iransans ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12 col-lg-3 text-center text-lg-right">
                    <a href="#">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/logo3.jpeg" class="img-fluid">
                    </a>
                </div>
                <div class="col-12 col-lg-9 justify-content-lg-end d-flex register text-center "  >
                <?php if (!isset($_COOKIE["user_access"])) { ?>
                    <a href="http://localhost:2211/?page_id=6" class="ml-5" >
                        <i class="fa fa-user align-middle" aria-hidden="true"></i>
                        ورود/ثبت نام کاربران
                    </a>
                <?php }else { 
                ?>
                    <a href="http://localhost:2211/?page_id=30" class="ml-5" >
                        <i class="fa fa-user align-middle" aria-hidden="true"></i>
                        <?php echo $result[0]["fname_lname"]; ?>
                    </a>
                <?php } ?>
                    <a href="#"  class="ml-5">
                        <i class="fas fa-sign-in-alt align-middle" aria-hidden="true"></i>
                        ورود/ثبت نام مشاوران املاک
                    </a>
                    <a class=" px-3 text-white " href="#" >
                        <i class="fa fa-plus align-middle" aria-hidden="true"></i>
                        ثبت آگهی رایگان

                    </a>

                </div>
            </div>

        </div>

    </div>
    <?php get_template_part('template-parts/header/top-navigsion') ?>
</header>
