<?php

require_once 'database.php';

class Tutor_Wall{
    public $id;

    protected $db ;
    protected $rating = 1;
    protected $description = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus suscipit delectus pariatur quod laudantium cum iure amet ab nam excepturi?';
    protected $rate = 0;


    function __construct(){
        $this->db = new Database();
    }

    function add_tutorWall($tutor_id){
        $sql = "INSERT INTO tutor_wall (tutor_id, rating, description, rate) VALUES (:tutor_id, :rating, :description, :rate)";
        
        $query = $this->db->connect()->prepare($sql);
    
        $query->bindParam(':tutor_id', $tutor_id);
        $query->bindParam(':rating', $this->rating);
        $query->bindParam(':description', $this->description);
        $query->bindParam(':rate', $this->rate);
    
        if($query->execute()){
            return true;
        } else {
            return false;
        }


    }

    function getLastInsertedtutorWallId() {
        $sql = "SELECT id FROM tutorWall ORDER BY id DESC LIMIT 1";
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

    function add_tutorWall_profile($id){
        $sql = "INSERT INTO tutorWall_profile (id_fk)";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':id_fk', $id);
        if($query->execute()){
            return true;
        }else{
            return false;
        }
    }

    function show(){
        $sql = "SELECT * FROM tutorWall ; ";
        $query =  $this->db->connect()->prepare($sql);
        
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }


    function show_tutorWalls(){
        $sql = "SELECT tutorWallWall.*, tutorWall_wall.* 
                FROM tutorWall 
                INNER JOIN tutorWall_wall ON tutorWall.id = tutorWall_wall.tutorWall_id";
        $query = $this->db->connect()->prepare($sql);
        
        $data = []; // Initialize an empty array to store the fetched data
        
        if($query->execute()){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data; // Return the combined data from both tables
    }

    function gettutorWallRate($tutorWall_id) {
        // Query to retrieve rate for the given tutorWall ID
        $sql = "SELECT fee FROM tutorWall_profile WHERE id_fk = :tutorWall_id";
    
        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':tutorWall_id', $tutorWall_id, PDO::PARAM_INT);
        
        if($query->execute()){
            $data = $query->fetch(PDO::FETCH_ASSOC);
            if ($data) {
                // Fetching data
                return $data['fee'];
            } else {
                return "tutorWall not found or rate not available.";
            }
        } else {
            return "Query execution failed.";
        }
    }
    
}

?>