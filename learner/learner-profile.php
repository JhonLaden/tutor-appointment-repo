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
        <tr>
            <td></td> <!-- Placeholder for Tutor -->
            <td></td> <!-- Placeholder for Date -->
            <td></td> <!-- Placeholder for Time -->
            <td></td> <!-- Placeholder for Fee -->
            <td></td> <!-- Placeholder for Status -->
        </tr>
    </tbody>
</table>
        </div>
    </main>


<?php
    require_once "../includes/footer.php";

?>