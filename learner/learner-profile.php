<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";

    if(isset($_GET['schedule_id'])){
        require_once '../classes/schedule.class.php';
    
        $scheduleID = $_GET['schedule_id'];
        $schedule = new Schedule();
    
        $schedule->cancel_schedule($scheduleID);
    
        // Clear $_GET array
        $_GET = array();
    }
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
            <th>Action</th>

        </tr>
    </thead>
    <tbody>
    <?php

    require_once '../classes/schedule.class.php';
    $schedule = new Schedule();

    $accounts = $schedule->show();

  

    if(empty($accounts)){
        
    ?>
         <tr class = "empty-record">
            <td colspan="5" >RECORD IS EMPTY</td>
        </tr>
    
    <?php
    }else{
        foreach ($accounts as $keys => $value) {
    ?>
            <tr>
                <td><?php echo $value['tutor_firstname']?></td> <!-- Placeholder for Tutor -->
                <td><?php echo $value['date']?></td> <!-- Placeholder for Date -->
                <td><?php echo $value['time']?></td></td> <!-- Placeholder for Time -->
                <td><?php echo $value['fee']?></td></td> <!-- Placeholder for Fee -->
                <td ><?php echo $value['status']?></td></td> <!-- Placeholder for Status -->
                <td class="action">
                    <?php 
                        if($value['status'] == 'Pending'){
                    ?>
                            <a href="appointment.php?tutor_id=<?php echo $value['tutor_id']?>">Edit</a>
                            <a href="learner-profile.php?schedule_id=<?php echo $value['schedule_id']?>">Cancel</a>
                    <?php
                        }
                    ?>
                </td>
            </tr>
    <?php
        }
    }
     ?>
    </tbody>
</table>
        </div>
    </main>


<?php
    require_once "../includes/footer.php";

?>