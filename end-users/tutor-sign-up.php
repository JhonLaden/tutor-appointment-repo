<?php
    session_start();
    require_once "../variables/nav.php";
    $home = "active";
    $title = 'TutourOnline | tutor sign up';
    require_once "../includes/header.php";
    require_once "../classes/learner.class.php";
    require_once "../tools/functions.php";
  
    if(isset($_POST["submit"])){
        require_once "../classes/tutor.class.php";
        $tutor = new Tutor();
    
        // Add tutor and get the ID of the inserted tutor
        $isTutorAdded = $tutor->add_tutor($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['middlename'], $_POST['lastname'], $_POST['phone'], $_POST['address'], $_POST['age']);
    
    
        if($isTutorAdded) {
            // Insert tutor profile with tutor ID as foreign key
            require_once "../classes/tutor_profile.class.php";
            require_once "../classes/tutor_wall.class.php";

            $tutorProfile = new Tutor_profile();
            $tutorWall = new Tutor_Wall();
    
            // Insert tutor profile with tutor ID as foreign key
            $isTutorProfileAdded = $tutorProfile->add_tutor_profile($tutor->getLastInsertedTutorId());
            $isTutorWallAdded = $tutorWall->add_tutorWall($tutor->getLastInsertedTutorId());

            $accounts = $tutor->show();

            foreach($accounts as $keys => $value){

                if($tutor->getLastInsertedTutorId() == $value['id'] ){
                    //if match then save username, fullname and type as session to be reused somewhere else
                    $_SESSION['logged-in'] = $value;
                }
            }
    
            if($isTutorProfileAdded) {
                header('location: ../tutor/tutor-profile?tutor_id='.$_SESSION['logged-in']['id'].'.php');
            }
        }
    }
    require_once "../includes/login.php";
?>

    <main class = "sign-up-container">
        <div class="sign-up-header">
            <div class =  "img-container"><img src = "../images/other/tutor.png" alt="pic">
            <p><strong>Sign up as tutor</strong></p>
            </div>
            <p class="description">
            Ignite students' academic success by joining our dynamic tutoring team, offering flexible schedules, competitive compensation, and the opportunity to make a positive impact on learners worldwide.
            </p>
        </div>

        <form class = "form-container"action="tutor-sign-up.php" method = "post" class="form-container">
            <div class="account-details-container single-form">
                <h2 class="account-details-header">Accout Details</h2>
                <input type="text" id = "username" name = "username" placeholder = "Username" required>
                <input type="password" id = "password" name = "password" placeholder = "Password" required>
                
            </div>
            <div class="personal-information-container single-form">
                <h2 class="personal-information-header">Personal Information</h2>
                <input type="text" id = "firstname" name = "firstname" placeholder = "First Name" required>
                <input type="text" id = "middlename" name = "middlename" placeholder = "Middle Name">
                <input type="text" id = "lastname" name = "lastname" placeholder = "Last Name" required>
                <input type="number" id = "phone" name = "phone" placeholder = "Phone number" required>
                <input type="text" id = "address" name = "address" placeholder = "Address" required>
                <input type="number" id = "age" name = "age" placeholder = "Age" required>
            </div>
            <input class = "signup-btn" type="submit" name = "submit" value = "Sign up">
            <?php 

            ?>
        </form>


    </main>
    

<?php
    require_once "../includes/footer.php";
?>