<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";
    require_once "../classes/schedule.class.php";

    $schedule = new Schedule();

    if(isset($_GET['confirm_id'])){
        $scheduleID = $_GET['confirm_id'];
        var_dump($scheduleID);
    
        // Assuming $schedule is an instance of your class
        $schedule->update_status_to_confirm($scheduleID);
        
        // Clear the $_GET parameter after processing
        unset($_GET['confirm_id']);
    }else if(isset($_GET['cancelled_id'])){
        $scheduleID = $_GET['cancelled_id'];  

        $schedule->cancel_schedule($scheduleID);
    
        // Clear $_GET array
        $_GET = array();
    }
?>
    <main> 
    
        <div class="schedule-container container">
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

    $accounts = $schedule->show_with_tutor_id($_SESSION['logged-in']['id']);

    if(empty($accounts)){
        
    ?>
         <tr class = "empty-record">
            <td colspan="6" >RECORD IS EMPTY</td>
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

                <td <?php if ($value['status'] == 'Pending'): ?>
                    class="pending"
                <?php elseif ($value['status'] == 'Confirm'): ?>
                    class="confirm"
                <?php else: ?>
                    class="cancelled"
                <?php endif; ?>><?php echo $value['status']?></td> <!-- Placeholder for Status -->

                <td class="action">
                    <?php 
                        if($value['status'] == 'Pending'){
                    ?>
                            <a class = "confirm" href="tutor-schedule.php?confirm_id=<?php echo $value['schedule_id']?>">Confirm</a>
                            <a class = "cancel" href="tutor-schedule.php?cancelled_id=<?php echo $value['schedule_id']?>">Cancel</a>
                    <?php
                        }else{
                        ?>
                            <p>NONE</p>
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