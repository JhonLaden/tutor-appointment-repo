<?php

require_once 'database.php';

class Schedule{
    public $id;

    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

    function add_schedule($tutorID, $learnerID, $date, $time, $fee, $status){
        $sql = "INSERT INTO schedule (tutor_id, learner_id, date, time, fee, status) VALUES (:tutor_id, :learner_id, :date, :time, :fee, :status, :address, :age)";
    
        $query = $this->db->connect()->prepare($sql);
    
        $query->bindParam(':tutor_id', $tutor_id);
        $query->bindParam(':learner_id', $learner_id);
        $query->bindParam(':date', $date);
        $query->bindParam(':time', $time);
        $query->bindParam(':fee', $fee);
        $query->bindParam(':status', $status);

    
        if($query->execute()){
            return true;
        } else {
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
        $sql = "SELECT * FROM schedule ; ";
        $query =  $this->db->connect()->prepare($sql);
        
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
        
    }
    
}

?>