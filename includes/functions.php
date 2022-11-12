<?php 
require_once("db_config/db_connection.php");

class functions {
    public function say_hello($name) {
        echo "<h1>hello {$name}</h1>";
    }
    public function header_to($location) {
        header("Location:{$location}");
    }
    public function hash_password($password) {
        $salt = "9i2h541hs94";
        $password = $password . $salt;
        $hashed_password = hash("sha256",$password);
        return $hashed_password;
    }
    public function check_uniq_number($number) {
        global $connection;
        $sql = "select * from users where phone_number = ?";
        $query = $connection->prepare($sql);
        $query->bindValue(1,$number);
        $query->execute();
        if ($query->rowCount() > 0) {
            return false;
        }else {
            return true;
        }
    }
    public function get_last_row($table) {
        global $connection;
        $sql = "select * from {$table} order by id desc limit 1";
        $query = $connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    
    }
    public function safe_input($input) {
        $lv1 = htmlentities($input);
        $lv2 = addslashes($lv2);
        $lv3 = htmlspecialchars($lv2);
        return $lv3;
    }
    public function get_user_by_id($id) {
        global $connection;
        $sql = "select * from users where id = ?";
        $query = $connection->prepare($sql);
        $query->bindValue(1,$id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function get_date() {
        $formatter = new IntlDateFormatter(
            "fa_IR@calendar=persian",
            IntlDateFormatter::FULL,
            IntlDateFormatter::FULL,
            'Asia/Tehran',
            IntlDateFormatter::TRADITIONAL,
            "yyyy-MM-dd");
        $now = new DateTime();
        return $formatter->format($now);
    }
    public function update_lastLogin($date,$user_id) {
        global $connection;
        $sql = "update users set last_login = '{$date}' where id = {$user_id}";
        $query = $connection->prepare($sql);
        $query->execute();
    }

}

$functions = new functions();


?>
