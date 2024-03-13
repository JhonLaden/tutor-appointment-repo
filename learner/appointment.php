<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";

    $current_page = 'appointment.php';
    // Ensure no output is sent before this point
    if(isset($_POST['submit-sched'])){
        require_once '../classes/tutor.class.php';
        require_once '../classes/schedule.class.php';

        $tutor = new Tutor();
        $schedule = new Schedule();

        // Validate and sanitize input
        $date = isset($_POST['dateInput']) ? $_POST['dateInput'] : '';
        $time = isset($_POST['timeInput']) ? $_POST['timeInput'] : '';
        $tutorID = isset($_GET['tutor_id']) ? $_GET['tutor_id'] : '';

        // Check if tutor ID is provided
        if(empty($tutorID)) {
            echo "Tutor ID is missing.";
            exit; // Stop execution
        }

        // Get the rate for the tutor
        $tutorRate = $tutor->getTutorRate($tutorID);

        // Check if the rate is retrieved successfully
        if($tutorRate === false) {
            echo "Failed to retrieve tutor rate.";
            exit; // Stop execution
        }

        // Add schedule
        $isAppointed = $schedule->add_schedule($tutorID, $_SESSION['logged-in']['id'], $date, $time, $tutorRate, 'Pending');

        
    }
    if($isAppointed){
        header('Location: ./learner-profile.php'); // Redirect to learner profile
        exit; // Stop execution
    } 

    require_once "../includes/login.php";

?>

<main> 
    <div class="appointment-container container">
        <form class="form-container" action="appointment.php?tutor_id=<?php echo $_GET['tutor_id'] ?>" method="POST">
            <div class="input-container">
                <label for="dateInput">Date:</label>
                <input type="date" id="dateInput" name="dateInput" required>
            </div>
            
            <div class="input-container">
                <label for="timeInput">Time:</label>
                <input type="time" id="timeInput" name="timeInput" required>
            </div>
            
            <button type="submit" name="submit-sched">Submit</button>
        </form>
    </div>
</main>

<?php
    require_once "../includes/footer.php";
?>
