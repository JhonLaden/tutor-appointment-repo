<?php
    session_start();
    require_once "../variables/nav.php";
    $home = "active";
    $title = 'TutourOnline | tutor sign up';
    require_once "../includes/header.php";
    require_once "../classes/learner.class.php";
    require_once "../tools/functions.php";
  
    
    require_once "../includes/login.php";
?>

    <main >
        <div class = "my-calendar container" id='calendar'>

        </div>
    </main>
    

<?php
    require_once "../includes/footer.php";
?>