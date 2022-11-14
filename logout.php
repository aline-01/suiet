<?php 
include("includes/functions.php");

$name = "user_access";
$value = $_COOKIE["user_access"];
$expire = time() - 2000;
setcookie($name,$value,$expire,"/");
$functions->header_to("/");


/**
 * template name:logout
 */
?>
