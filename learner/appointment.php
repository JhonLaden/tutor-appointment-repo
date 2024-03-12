<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>

 
    <main> 
        <div class="appointment-container container">
            <form class = "form-container" action="appointment.php" method = "POST">
                <div class="input-container">
                    <label for="dateInput">Date:</label>
                    <input type="date" id="dateInput" name="dateInput">
                </div>
                
                <div class="input-container">
                    <label for="timeInput">Time:</label>
                    <input type="time" id="timeInput" name="timeInput">
                </div>
                
                <button type = "submit" > Submit </button>
            </form>
        </div>
    </main>


<?php
    require_once "../includes/footer.php";

?>