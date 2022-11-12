<?php 
$host = "localhost";
$user = "root";
$password = "12345678";
$db_name = "wordpress";

try {
   $connection = new PDO("mysql:host{$host}",$user,$password);
   $sql_use = "use {$db_name}";
   $query_use = $connection->prepare($sql_use);
   $query_use->execute();
   echo "<h1>database is connect</h1>";
}catch(PDOEception $e) {
   echo "<h1>connection to database is fild</h1>";
}



?>
