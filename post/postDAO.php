<?php
require_once 'connect.php';

class UserAccessObject extends portfollio {
    public function addCompany($name, $pre, $city, $street, $occu, $year, $time, $sal, $atm, $comp, $review, $company_id,$uid){
        $sql = "INSERT INTO company (company_name, company_pre, company_city, company_street, company_occu, company_year, company_time, company_sal, company_atm, company_comp, company_review)
                VALUES ('$name', '$pre', '$city', '$street', '$occu', '$year', '$time', '$sal', '$atm', '$comp', '$review')";
            $result = $this->conn->query($sql) or die("Connection error: " . $this->conn->error);//直前の情報を取ってきてる
            $company_id = mysqli_insert_id($this->conn);
            if($result){
                $sql2 = "INSERT INTO review (user_id, company_id, review)
                VALUES ('$uid','$company_id', '$review')";
                $result2 = $this->conn->query($sql2) or die("Connection error: " . $this->conn->error);
                $id = mysqli_insert_id($this->conn);
                return $id;} else {
                    echo "error";
                }
            }
    
    public function addPost($name, $type, $occu, $position, $skill, $id, $companyuser_id){
        $sql = "INSERT INTO companypost (companyuser_id, post_name, post_type, post_occu, post_position, post_skill)
                VALUES ('$id','$name', '$type', '$occu', '$position', '$skill');";
                
                $result = $this->conn->query($sql) or die("Connection error: " . $this->conn->error);//直前の情報を取ってきてる
                $companyuser_id = mysqli_insert_id($this->conn);
                if($result){
                    $sql2 = "INSERT INTO companypost (companyuser_id)
                VALUES ('$companyuser_id')";
                $result2 = $this->conn->query($sql2) or die("Connection error: " . $this->conn->error);
                $id = mysqli_insert_id($this->conn);
                return $id;} else {
                    echo "error";
                }
            }
        
    
    public function retrieveCompany(){
        $sql = "SELECT * FROM company";
        $result=$this->conn->query($sql);
        $rows=array();
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function retrieveoneCompany($id){
        $sql = "SELECT * from company where `company_id` = '$id'";
        $result=$this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }
    
}

 ?>
 

