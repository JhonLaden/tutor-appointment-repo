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
        $sql = "INSERT INTO tutor (username, password, firstname, middlename, lastname, phone, address, age) VALUES (:username, :password, :firstname, :middlename, :lastname, :phone, :address, :age)";
    
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
        } else {
            return false;
        }


    }

    function getLastInsertedTutorId() {
        $sql = "SELECT id FROM tutor ORDER BY id DESC LIMIT 1";
        $query = $this->db->connect()->prepare($sql);
        $query->execute();
    
        // Fetch the result as an associative array
        $result = $query->fetch(PDO::FETCH_ASSOC);
    
        // Check if a row was returned
        if ($result) {
            // Retrieve the value of the 'id' column and return it
            return $result['id'];
        } else {
            // If no rows found, return null or false, depending on your preference
            return null;
        }
    }

    function add_tutor_profile($id){
        $sql = "INSERT INTO tutor_profile (id_fk)";

        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':id_fk', $id);

       
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


    function show_tutors(){
        $sql = "SELECT tutor.*, tutor_wall.* 
                FROM tutor 
                INNER JOIN tutor_wall ON tutor.id = tutor_wall.tutor_id";
        $query = $this->db->connect()->prepare($sql);
        
        $data = []; // Initialize an empty array to store the fetched data
        
        if($query->execute()){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data; // Return the combined data from both tables
    }
    
}

?>