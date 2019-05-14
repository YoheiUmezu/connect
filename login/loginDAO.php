<?php
require_once 'connect.php';

class UserAccessObject extends portfollio {
    public function loginUser($email, $password){
        $sql = "SELECT * FROM user WHERE `user_email` = '$email' AND `user_password` = '$password' and `user_status` = 'A'";
        $result = $this->conn->query($sql) or die("Connection error: " . $this->conn->error);
        $row = $result->fetch_assoc();
        return $row;
    }
    
}
    
?>

        