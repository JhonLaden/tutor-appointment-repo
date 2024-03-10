<?php

require_once 'database.php';

class Tutor_profile{
    public $id;

    public $username;
    public $password;

    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

   

    function add_tutor_profile($id_fk){
        $sql = "INSERT INTO `tutor_profile` (`id_fk`, `subjects`, `experience`, `education`, `services`, `location`, `base`, `fee`, `rating`) VALUES (:id_fk, '', '', '', '', '', '', '', '')";
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id_fk', $id_fk);
        
        if($query->execute()){
            return true;
        } else {
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM tutor_profile ; ";
        $query =  $this->db->connect()->prepare($sql);
        
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }
    
}

?>