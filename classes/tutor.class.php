<?php

require_once 'database.php';

class Tutor{
    public $id;

    public $username;
    public $password;

    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

    function add_tutor($username, $password, $firstname, $middlename, $lastname, $phone, $address, $age){
        $sql = "INSERT INTO tutor (username, password, firstname, middlename, lastname, phone, address, age )VALUES (:username, :password, :firstname, :middlename, :lastname, :phone, :address, :age)";

        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':username', $username);
        $query->bindParam(':password', $password);
        $query->bindParam(':firstname', $firstname);
        $query->bindParam(':middlename', $middlename);
        $query->bindParam(':lastname', $lastname);
        $query->bindParam(':phone', $phone);
        $query->bindParam(':address', $address);
        $query->bindParam(':age', $age);

       
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM tutor ; ";
        $query =  $this->db->connect()->prepare($sql);
        
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }
    
}

?>