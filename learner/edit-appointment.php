

    <?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";

    $current_page = 'appointment.php';
    // Ensure no output is sent before this point
    if(isset($_GET['schedule_id']) && isset($_POST['submit-sched'])){
        require_once '../classes/schedule.class.php';
        $scheduleID = $_GET['schedule_id'];
        $date = isset($_POST['dateInput']) ? $_POST['dateInput'] : '';
        $time = isset($_POST['timeInput']) ? $_POST['timeInput'] : '';

        $schedule = new Schedule();
        $schedule->update_schedule($scheduleID, $date, $time);
        
        header('location: learner-profile.php');
    }

    require_once "../includes/login.php";

?>

<main> 
    <div class="appointment-container container">
        <form class="form-container" action="edit-appointment.php?schedule_id=<?php echo $_GET['schedule_id'] ?>" method="POST">
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
