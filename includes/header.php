<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "icon" href="../images/grid/profile/logo-orig.png" type = "image/x-icon">
    <link rel = "stylesheet" href = "../css/reusable.css">
    <link rel = "stylesheet" href = "../css/style.css">
    <link rel = "stylesheet" href = "../css/login-form.css">
    <link rel = "stylesheet" href = "../css/collapse.css">
    <link rel = "stylesheet" href = "../css/tutor-sign-up.css">
    <link rel = "stylesheet" href = "../css/learner-profile.css">
    <link rel = "stylesheet" href = "../css/appointment.css">
    <link rel = "stylesheet" href = "../css/tutor-schedule.css">



    <!-- TESTING MODAL -->
    <link rel = "stylesheet" href = "../css/modal.css">

    
    <title><?php echo $title; ?></title>
    
</head>
<body>
    <header id = "head" class = "bg-blue">
        <div class="container container-header">
            <div class="nav-sign">
                <input type="checkbox" id = "check" >
                <label for = "check" class = "icon icon-button" >
                    <i class='bx bx-menu'></i>
                </label>
                <ul class = "navbar h-text navbar-collapse" >
                    <li class = "nav-item"><a class = "nav-link <?php echo $home; ?>" href="../end-users/home.php">HOME</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $tutors; ?>" href="../end-users/tutors.php">TUTORS</a></li>
                    <li  id = "about-link" class = "nav-item" ><a  class = "nav-link" href="#about">ABOUT US</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $faqs; ?>" href="../end-users/faqs.php">FAQs</a></li>

                    <?php 
                        if(isset($_SESSION['logged-in'])){
                            if($_SESSION['logged-in']['type'] == 'learner'){
                            ?>
                            <button class= " "><a href="../learner/learner-profile.php?learner_id=<?php echo $_SESSION['logged-in']['id']?>"><?php echo $_SESSION['logged-in']['username'];?></a></button>
                            <button class= ""> <a href="../includes/logout.php">Logout</a></button>
                        <?php
                            }else{?>
                                <button class= ""><a href="../tutor/tutor-profile.php?tutor_id=<?php echo $_SESSION['logged-in']['id']?>"><?php echo $_SESSION['logged-in']['username'];?></a></button>
                                <button class= ""> <a href="../includes/logout.php">Logout</a></button>
                            <?php
                            }
                        }else{
                    ?>
                        <button class= "log-in join">Login</button>
                        
                    <?php
                    }
                    ?>
                </ul>
                

            </div>

            <div class="logo-quote container-flex">
                <img class = "logo" src="../images/grid/profile/logo-orig.png" alt="">
                <div class="quote h-text">Best tutor in town</div>
            </div>

            <div class="join-btn">
                <a href = "../includes/testing.php" class = "join" >Join</a>
            </div>

            

        </div>
        
    </header>