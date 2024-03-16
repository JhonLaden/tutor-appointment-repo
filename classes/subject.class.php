<?php

require_once 'database.php';

class Subject{
    public $id;

    protected $db ;
    protected $status = 1;

    function __construct(){
        $this->db = new Database();
    }

    function add_subject($subject_name, $tutor_subject_id) {
        try {
            $sql = "INSERT INTO subject (subject_name, tutor_subject_id, status) VALUES (:subject_name, :tutor_id, :status)";
        
            $query = $this->db->connect()->prepare($sql);
        
            $query->bindParam(':subject_name', $subject_name);
            $query->bindParam(':tutor_id', $tutor_subject_id);
            $query->bindParam(':status', $this->status);

        
            if($query->execute()){
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            // Output any PDO exception errors for debugging
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function update_subject_status($subject_id) {
        try {
            $sql = "UPDATE subject SET status = 0 WHERE subject_id = :subject_id";
        
            $query = $this->db->connect()->prepare($sql);
        
            $query->bindParam(':subject_id', $subject_id);
        
            if($query->execute()){
                return true;
            } else {
                return false;
            }
        } catch(PDOException $e) {
            // Output any PDO exception errors for debugging
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    function getLastInsertedsubjectId() {
        $sql = "SELECT id FROM subject ORDER BY id DESC LIMIT 1";
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

    function add_subject_profile($id){
        $sql = "INSERT INTO subject_profile (id_fk)";

        $query = $this->db->connect()->prepare($sql);

        $query->bindParam(':id_fk', $id);

       
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM subject ; ";
        $query =  $this->db->connect()->prepare($sql);
        
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }

    function show_with_id($id){
        try {
            $sql = "SELECT subject.*, tutor_profile.* FROM subject 
                    INNER JOIN tutor_profile ON subject.tutor_subject_id = tutor_profile.id_fk 
                    WHERE subject.tutor_subject_id = :id AND subject.status = 1";
            
            $query = $this->db->connect()->prepare($sql);
            $query->bindParam(':id', $id, PDO::PARAM_INT);
            
            $data = array(); // Initialize an array to store the fetched data
            
            if($query->execute()){
                $data = $query->fetchAll(PDO::FETCH_ASSOC); // Fetch data as associative array
            }
            
            return $data;
        } catch(PDOException $e) {
            // Output any PDO exception errors for debugging
            echo "Error: " . $e->getMessage();
            return false;
        }
    }


    function show_subjects(){
        $sql = "SELECT subject.*, subject_wall.* 
                FROM subject 
                INNER JOIN subject_wall ON subject.id = subject_wall.subject_id";
        $query = $this->db->connect()->prepare($sql);
        
        $data = []; // Initialize an empty array to store the fetched data
        
        if($query->execute()){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data; // Return the combined data from both tables
    }

    function getsubjectRate($subject_id) {
        // Query to retrieve rate for the given subject ID
        $sql = "SELECT fee FROM subject_profile WHERE id_fk = :subject_id";
    
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':subject_id', $subject_id, PDO::PARAM_INT);
        
        if($query->execute()){
            $data = $query->fetch(PDO::FETCH_ASSOC);
            if ($data) {
                // Fetching data
                return $data['fee'];
            } else {
                return "subject not found or rate not available.";
            }
        } else {
            return "Query execution failed.";
        }
    }
    
}

?>