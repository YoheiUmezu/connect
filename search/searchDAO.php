<?php
require_once 'connect.php';
//https://www.flatflag.nir87.com/select-932
class UserAccessObject extends portfollio {
    public function searchcompany($name, $pre, $city, $street, $occu, $year, $time, $sal, $atm, $comp, $review){
        $sql = "INSERT INTO company (company_name, company_pre, company_city, company_street, company_occu, company_year, company_time, company_sal, company_atm, company_comp, company_review)
                VALUES ('$name', '$pre', '$city', '$street', '$occu', '$year', '$time', '$sal', '$atm', '$comp', '$review')";
                
            $result = $this->conn->query($sql) or die("Connection error: " . $this->conn->error);//直前の情報を取ってきてる
            $id = mysqli_insert_id($this->conn);
            return $id;
     }
        
    
    public function retrieveSearch(){
        $sql = "SELECT * FROM company";
        $result=$this->conn->query($sql);
        $rows=array();
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }
    
    public function retrieveoneSearch($id){
        $sql = "SELECT * from company where `company_id` = '$id'";
        $result=$this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function retrieveSearchByName($name){
        $sql = "SELECT * FROM company WHERE company_name = '$name'";
        $result = $this->conn->query($sql);
        $row = $result->fetch_assoc();
        return $row;
    }

    public function searchReview($keyword){
        $sql = "SELECT * FROM company WHERE company_name = '$keyword' OR company_pre = '$keyword'
        OR company_city = '$keyword' OR company_occu = '$keyword'";
        $result = $this->conn->query($sql);
        // $row = $result->fetch_assoc();
        // return $row;
        $rows=array();
        while($row = $result -> fetch_assoc()){
            $rows[] = $row;
        }
        return $rows;
    }

}




 ?>