<?php
include("includes/functions.php");

$name = "admin_access";
$value = $_COOKIE["admin_access"];
$expire = time() - 2000;
setcookie($name,$value,$expire,"/");
$functions->header_to("http://localhost:2211/?page_id=43");

/**
 * template name: admin_logout
 */

?>