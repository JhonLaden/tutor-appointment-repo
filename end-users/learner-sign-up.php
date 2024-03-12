<?php
    session_start();
    require_once "../variables/nav.php";
    $home = "active";
    $title = 'TutourOnline | Home';
    require_once "../includes/header.php";
    require_once "../classes/learner.class.php";
    require_once "../tools/functions.php";
  
    if(isset($_POST["submit"])){
        require_once "../classes/learner.class.php";
        $learner = new Learner();
    
        // Add learner and get the ID of the inserted learner
        $islearnerAdded = $learner->add_learner($_POST['username'], $_POST['password'], $_POST['firstname'], $_POST['middlename'], $_POST['lastname'], $_POST['phone'], $_POST['address'], $_POST['age']);

        // go to learner profile after sign up

        $accounts = $learner->show();
        foreach($accounts as $keys => $value){
                
            if($learner->getLastInsertedlearnerId() == $value['id'] ){
                //if match then save username, fullname and type as session to be reused somewhere else
                $_SESSION['logged-in'] = $value;
            }
        }
        header('location: ../learner/learner-profile.php');
    
        // if($islearnerAdded) {
        //     // Insert learner profile with learner ID as foreign key
        //     require_once "../classes/learner_profile.class.php";
        //     $learnerProfile = new learner_profile();
    
        //     // Insert learner profile with learner ID as foreign key
        //     $islearnerProfileAdded = $learnerProfile->add_learner_profile($learner->getLastInsertedlearnerId());

        //     $accounts = $learner->show();

            // foreach($accounts as $keys => $value){
                
            //     if($learner->getLastInsertedlearnerId() == $value['id'] ){
            //         //if match then save username, fullname and type as session to be reused somewhere else
            //         $_SESSION['logged-in'] = $value;
            //     }
            // }
    
        //     if($islearnerProfileAdded) {
        //         header('location: ../learner/learner-profile.php');
        //     }
        // }
    }
    require_once "../includes/login.php";
?>

    <main class = "sign-up-container">
        <div class="sign-up-header">
            <div class =  "img-container"><img src = "../images/other/learner.png" alt="pic">
            <p><strong>Sign up as learner</strong></p>
            </div>
            <p class="description">
            Ignite students' academic success by joining our dynamic learnering team, offering flexible schedules, competitive compensation, and the opportunity to make a positive impact on learners worldwide.
            </p>
        </div>

        <form action="learner-sign-up.php" method = "post" class="form-container">
            <div class="account-details-container">
                <h2 class="account-details-header">Accout Details</h2>
                <input type="text" id = "username" name = "username" placeholder = "username" required>
                <input type="password" id = "password" name = "password" placeholder = "password" required>
                
            </div>
            <div class="personal-information-container">
                <h2 class="personal-information-header">Personal Information</h2>
                <input type="text" id = "firstname" name = "firstname" placeholder = "firstname" required>
                <input type="text" id = "middlename" name = "middlename" placeholder = "middlename">
                <input type="text" id = "lastname" name = "lastname" placeholder = "lastname" required>
                <input type="tel" id = "phone" name = "phone" placeholder = "phone" required>
                <input type="text" id = "address" name = "address" placeholder = "address" required>
                <input type="number" id = "age" name = "age" placeholder = "age" required>
            </div>
            <input type="submit" name = "submit">

        </form>


    </main>
    

<?php
    require_once "../includes/footer.php";
?>