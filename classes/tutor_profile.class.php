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

    function update_tutor_profile($tutorID, $firstname, $middlename, $lastname, $description) {
    try {
        // Update 'tutor_profile' table with description
        $sql_profile = "UPDATE tutor_profile 
                        SET description = :description 
                        WHERE id_fk = :tutor_id";
        
        $query_profile = $this->db->connect()->prepare($sql_profile);
        
        // Bind parameters for tutor_profile table
        $query_profile->bindParam(':tutor_id', $tutorID);
        $query_profile->bindParam(':description', $description);

        // Execute query for tutor_profile table
        $query_profile->execute();

        // Update 'tutor' table with firstname, middlename, and lastname
        $sql_tutor = "UPDATE tutor 
                      SET firstname = :firstname, 
                          middlename = :middlename, 
                          lastname = :lastname
                      WHERE id = :tutor_id";
        
        $query_tutor = $this->db->connect()->prepare($sql_tutor);
        
        // Bind parameters for tutor table
        $query_tutor->bindParam(':tutor_id', $tutorID);
        $query_tutor->bindParam(':firstname', $firstname);
        $query_tutor->bindParam(':middlename', $middlename);
        $query_tutor->bindParam(':lastname', $lastname);

        // Execute query for tutor table
        $query_tutor->execute();

        return true; // Both updates successful
    } catch(PDOException $e) {
        // Output any PDO exception errors for debugging
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function update_tutor_experience($tutorID, $experience) {
    try {
        // Update 'tutor_profile' table with description
        $sql_profile = "UPDATE tutor_profile 
                        SET experience = :experience 
                        WHERE id_fk = :tutor_id";
        
        $query_profile = $this->db->connect()->prepare($sql_profile);
        
        // Bind parameters for tutor_profile table
        $query_profile->bindParam(':tutor_id', $tutorID);
        $query_profile->bindParam(':experience', $experience);

        // Execute query for tutor_profile table
        $query_profile->execute();


        return true; // Both updates successful
    } catch(PDOException $e) {
        // Output any PDO exception errors for debugging
        echo "Error: " . $e->getMessage();
        return false;
    }
}

function update_tutor_education($tutorID, $education) {
    try {
        // Update 'tutor_profile' table with description
        $sql_profile = "UPDATE tutor_profile 
                        SET education = :education 
                        WHERE id_fk = :tutor_id";
        
        $query_profile = $this->db->connect()->prepare($sql_profile);
        
        // Bind parameters for tutor_profile table
        $query_profile->bindParam(':tutor_id', $tutorID);
        $query_profile->bindParam(':education', $education);

        // Execute query for tutor_profile table
        $query_profile->execute();


        return true; // Both updates successful
    } catch(PDOException $e) {
        // Output any PDO exception errors for debugging
        echo "Error: " . $e->getMessage();
        return false;
    }
}
    
    
    
}

?>