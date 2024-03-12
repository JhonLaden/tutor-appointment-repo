<?php

require_once 'database.php';

class Schedule{
    public $id;

    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

    function add_schedule($tutorID, $learnerID, $date, $time, $fee, $status){
        try {
            $sql = "INSERT INTO schedule (tutor_id, learner_id, date, time, fee, status) VALUES (:tutor_id, :learner_id, :date, :time, :fee, :status)";
        
            $query = $this->db->connect()->prepare($sql);
            
            // Bind parameters
            $query->bindParam(':tutor_id', $tutorID);
            $query->bindParam(':learner_id', $learnerID);
            $query->bindParam(':date', $date);
            $query->bindParam(':time', $time);
            $query->bindParam(':fee', $fee);
            $query->bindParam(':status', $status);
    
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

    function getLastInsertedscheduleId() {
        $sql = "SELECT id FROM schedule ORDER BY id DESC LIMIT 1";
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

    function show(){
        $sql = "SELECT schedule.*, tutor.firstname AS tutor_firstname, learner.firstname AS learner_firstname
                FROM schedule 
                INNER JOIN tutor ON schedule.tutor_id = tutor.id
                INNER JOIN learner ON schedule.learner_id = learner.id;";
        $query = $this->db->connect()->prepare($sql);
        $data = array(); // Initialize an array to store the fetched data
        if($query->execute()){
            $data = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return $data;
    }


    
}

?>