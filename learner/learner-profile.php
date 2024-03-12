<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>

 


    <main> 
    
        <div class="record-container container">
        <table>
    <thead>
        <tr>
            <th>Tutor</th>
            <th>Date</th>
            <th>Time</th>
            <th>Fee</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
    <?php

    require_once '../classes/schedule.class.php';
    $schedule = new Schedule();

    $accounts = $schedule->show();

    
     foreach ($accounts as $keys => $value) {
    ?>
        <tr>
            <td><?php echo $value['tutor_firstname']?></td> <!-- Placeholder for Tutor -->
            <td><?php echo $value['date']?></td> <!-- Placeholder for Date -->
            <td><?php echo $value['time']?></td></td> <!-- Placeholder for Time -->
            <td><?php echo $value['fee']?></td></td> <!-- Placeholder for Fee -->
            <td><?php echo $value['status']?></td></td> <!-- Placeholder for Status -->
        </tr>

    <?php
     }
     ?>
    </tbody>
</table>
        </div>
    </main>


<?php
    require_once "../includes/footer.php";

?>