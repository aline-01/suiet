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
    public function upload_image($img) {
        if ($img["error"] == 0) {
            $splited_name = explode(".",$img["name"]);
            if (count($splited_name) > 2) {
                return "unValid";      
            }else {
                if ($splited_name[1] == "jpg" || $splited_name[1] == "jpeg" || $splited_name[1] == "png") {
                    //upload image on file
                    $path = "/home/alien-01/Desktop/wordpress/wp-content/themes/suiet v2/suiet v2/images/adver-img/".$img["name"];
                    $uploaded = move_uploaded_file($img["tmp_name"],$path);
                    if ($uploaded) {
                        return $path;
                    }else {
                        return "unValid";
                    }
                }else {
                    return "unValid";
                }
            }
        }else {
            return false;
        }
    }
    public function make_random_number($in,$to,$count) {
        $result_array = "";
        for ($i = 0;$i<$count;$i+=1) {
            $rand_int = rand($in,$to);
            $result_array = $result_array . $rand_int;
        }
        return $result_array;
    }

    public function get_all_advertising() {
        global $connection;
        $sql = "select * from advertising";
        $query = $connection->prepare($sql);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }
    public function get_advertising_by_id($id) {
        global $connection;
        $sql = "select * from advertising where id = ?";
        $query = $connection->prepare($sql);
        $safe_id = $this->safe_input($id);
        $query->bindValue(1,$safe_id);
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }  


}

$functions = new functions();


?>
