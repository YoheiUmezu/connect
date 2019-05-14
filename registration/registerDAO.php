<?php
require_once 'connect.php';

class UserAccessObject extends portfollio {
    public function addUser($name, $nation, $gender, $age, $stay, $email, $password, $description){
        $sql = "INSERT INTO user (user_name, user_nation, user_gender, user_age, user_stay, user_email, user_password, user_description)
                VALUES ('$name', '$nation', '$gender', '$age', '$stay', '$email', '$password', '$description')";
               
               $result = $this->conn->query($sql) or die("Connection error: " . $this->conn->error);//直前の情報を取ってきてる
               $id = mysqli_insert_id($this->conn);
               return $id;
     }

    public function addImg($name, $nation, $gender, $age, $stay, $email, $password, $description, $imagepath, $directory, $tmp){
        $extension = pathinfo($imagepath, PATHINFO_EXTENSION);
        $array_extensions = array('png', 'jpg', 'jpeg', 'gif');
        if(in_array($extension, $array_extensions) || $extension == null){
            if($imagepath == null){
                $img = $directory."grey.jpeg";
            }else{
                $img = $directory.$imagepath;
            }
            if(file_exists($img) && $img != $directory."grey.jpg" ){
                header('Location: error.php');
            }else{
                $sql = "INSERT INTO user (user_name, user_nation, user_gender, user_age, user_stay, user_email, user_password,user_img, user_description)
                VALUES ('$name', '$nation', '$gender', '$age', '$stay', '$email', '$password', '$img', '$description')";
               
               $result = $this->conn->query($sql) or die("Connection error: " . $this->conn->error);//直前の情報を取ってきてる
                if($result){
                    move_uploaded_file($tmp, $img);
                    $id = mysqli_insert_id($this->conn);
                    header("Location: registerconfirmation.php?id=$id");
                }  
            }
        }else{
            
            header('Location: error.php');
        }
         
    }
    
    public function retrieveUser(){
        $sql = "SELECT * FROM user";
        $result=$this->conn->query($sql);
        $rows=array();
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function retrieveoneUser($id){
        $sql = "SELECT * from user where `user_id` = '$id'";
        $result=$this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function generatePassword(){
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 16; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
    
}

 ?>