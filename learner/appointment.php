<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>

    <?php
        session_start();
        if(isset($_POST['submit-sched'])){
            require_once '../database/tutor.class.php';
            require_once '../database/schedule.class.php';

            $tutor = new Tutor();
            $schedule = new Schedule();
            

        }
    ?>

    <main> 
        <div class="appointment-container container">
            <form class = "form-container" action="appointment.php" method = "POST">
                <div class="input-container">
                    <label for="dateInput">Date:</label>
                    <input type="date" id="dateInput" name="dateInput" required>
                </div>
                
                <div class="input-container">
                    <label for="timeInput">Time:</label>
                    <input type="time" id="timeInput" name="timeInput" required>
                </div>
                
                <button type = "submit" name = "submit-sched"> Submit </button>
            </form>
        </div>
    </main>


<?php
    require_once "../includes/footer.php";

?>