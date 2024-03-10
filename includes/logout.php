<?php
    session_start();

    session_destroy();
    header('location: ../end-users/home.php');

?>