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
        $lv2 = addslashes($lv1);
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
    public function check_user_accept($user_id) {
        global $connection;
        $sql = "select * from users where id = ? && accept = 1";
        $query = $connection->prepare($sql);
        $query->bindValue(1,$user_id);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        }else {
            return false;
        }
    }
    public function hash_admin_password($password) {
        $salt = "9#h!is";
        $s_password = $password . $salt;
        $hash_password = hash("sha256",$s_password);
        return $hash_password;
    }
    public function get_admin_by_id($id) {
        global $connection;
        $sql = "select * from admins where id = ?";
        $query = $connection->prepare($sql);
        $query->bindValue(1,$id);
        $query->execute();
        if ($query->rowCount() > 0) {
            $result = $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }else {
            return false;
        }
    }
    public function check_admin_permision() {
        if (!isset($_COOKIE["admin_access"])) {
            $this->header_to("http://localhost:2211/?page_id=41");
        }
        $this_user = $this->get_admin_by_id($_COOKIE["admin_access"]);
        if (empty($this_user)) {
            $this->header_to("http://localhost:2211/?page_id=41");
        }
    }

}

$functions = new functions();


?>
