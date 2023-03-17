<?php

require_once 'database.php';

class Learner{
    public $id;
    public $email;
    public $username;
    public $password;
    public $firstname;
    public $middlename;
    public $lastname;
    public $birthdate;
    public $contactnumber;
    public $address;
    public $guardianFirstname;
    public $guardianMiddlename;
    public $guardianLastname;
    public $guardianBirthdate;
    public $guardianContactnumber;
    public $guardianSex;
    public $guardianAddress;


    protected $db ;

    function __construct(){
        $this->db = new Database();
    }

    function add_learner(){
        $sql = "INSERT INTO learner (email, username, password, firstname,  middlename, lastname,
        birthdate, contactnumber,address,guardian_firstname,guardian_middlename,guardian_lastname, guardian_birthdate, guardian_contactnumber, guardian_sex, guardian_address) VALUE 
        (:email, :username, :password, :firstname, :middlename, :lastname,
        :birthdate, :contactnumber, :address, :guardian_firstname, :guardian_middlename, :guardian_lastname, :guardian_birthdate, :guardian_contactnumber, :guardian_sex, :guardian_address);";

        $query = $this->db->connect()->prepare($sql);
        $query->bindParam(':email', $this->email);
        $query->bindParam(':username', $this->username);
        $query->bindParam(':password', $this->password);
        $query->bindParam(':firstname', $this->firstname);
        $query->bindParam(':middlename', $this->middlename);
        $query->bindParam(':lastname', $this->lastname);
        $query->bindParam(':birthdate', $this->birthdate);
        $query->bindParam(':contactnumber', $this->contactnumber);
        $query->bindParam(':address', $this->address);
        $query->bindParam(':guardian_firstname', $this->guardianFirstname);
        $query->bindParam(':guardian_middlename', $this->guardianMiddlename);
        $query->bindParam(':guardian_lastname', $this->guardianLastname);
        $query->bindParam(':guardian_birthdate', $this->guardianBirthdate);
        $query->bindParam(':guardian_contactnumber', $this->guardianContactnumber);
        $query->bindParam(':guardian_sex', $this->guardianSex);
        $query->bindParam(':guardian_address', $this->guardianAddress);

        if($query->execute()){
            return true;
        }else{
            false;
        }
    }

}

?>