<?php
    session_start();
    require_once "../variables/nav.php";
   
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";

    require_once "../classes/tutor.class.php";
    require_once "../classes/subject.class.php";



    $tutor = new Tutor();
    $subject = new Subject();

    $account = $tutor->show_with_id($_GET['tutor_id']);
    $subjects = $subject->show_with_id($_GET['tutor_id']);

    $checker = '';
    $experienceChecker = '';
    $educationChecker = '';
    $servicesChecker = '';
    $editSubmit = '';
    $addSubject = '';
    $deleteSubject = '';
    $selfview = '';

    if(isset($_SESSION['logged-in'])){
        if($_SESSION['logged-in']['id'] == $_GET['tutor_id']){
            $editSubmit = 'edit-submit-display';
            $addSubject = 'add-subject-display';
            $deleteSubject = 'delete-subject-display';
            $selfview = 'self-view';
        }
    }

    

    if(isset($_POST['edit-submit'])){
        $checker = 'checked';
        $validated = 'true';

        if($validated){
            require_once '../classes/tutor_profile.class.php';
            $tutorProfile = new Tutor_profile();

            //injections
            $tutorID = $_GET['tutor_id'];
            $firstname = $_POST['firstname'];
            $middlename = $_POST['middlename'];
            $lastname = $_POST['lastname'];
            $description = $_POST['profile-description'];

            // updating tutor profile
            $updatedTutorProfile = $tutorProfile->update_tutor_profile($tutorID, $firstname, $middlename, $lastname, $description);

            // check if it is updated
            if($updatedTutorProfile){
                $checker = '';
                unset($_POST['edit-submit']);
                $account = $tutor->show_with_id($_GET['tutor_id']);
                
            } 
        }
    }else if(isset($_POST['edit-experience-submit'])){
        $experienceChecker = 'checked';
        $validated = 'true';

        if($validated){
            require_once '../classes/tutor_profile.class.php';
            $tutorProfile = new Tutor_profile();

            //injections
            $tutorID = $_GET['tutor_id'];
            $experience = $_POST['experience'];

            // updating tutor experience
            $updatedTutorExperience = $tutorProfile->update_tutor_experience($tutorID,$experience);

            // check if it is updated
            if($updatedTutorExperience){
                $experienceChecker = '';
                unset($_POST['edit-experience-submit']);
                $account = $tutor->show_with_id($_GET['tutor_id']);
                
            } 
        }
    }else if(isset($_POST['edit-education-submit'])){
        $educationChecker = 'checked';
        $validated = 'true';

        if($validated){
            require_once '../classes/tutor_profile.class.php';
            $tutorProfile = new Tutor_profile();

            //injections
            $tutorID = $_GET['tutor_id'];
            $education = $_POST['education'];

            // updating tutor experience
            $updatedTutorEducation = $tutorProfile->update_tutor_education($tutorID,$education);

            // check if it is updated
            if($updatedTutorEducation){
                $educationChecker = '';
                unset($_POST['edit-education-submit']);
                $account = $tutor->show_with_id($_GET['tutor_id']);
            } 
        }
    }else if(isset($_POST['edit-services-submit'])){
        $servicesChecker = 'checked';
        $validated = 'true';

        if($validated){
            require_once '../classes/tutor_profile.class.php';
            $tutorProfile = new Tutor_profile();

            //injections
            $tutorID = $_GET['tutor_id'];
            $services = $_POST['services'];

            // updating tutor experience
            $updatedTutorServices = $tutorProfile->update_tutor_services($tutorID,$services);

            // check if it is updated
            if($updatedTutorServices){
                $servicesChecker = '';
                unset($_POST['edit-services-submit']);
                $account = $tutor->show_with_id($_GET['tutor_id']);
            } 
        }
    }else if(isset($_POST['subject-submit'])) {
        // Check if the form was submitted
        $subject_name = $_POST['subjectname']; // Retrieve the subject name from the form data
        
        // Now you can use $subject_name for further processing, such as adding it to the database
        $subject->add_subject($subject_name, $_GET['tutor_id']);
        $subjects = $subject->show_with_id($_GET['tutor_id']);
        

        unset($_POST['subject-submit']);
    }
    
    if(isset($_GET['subject_id'])){
        $subject_id = $_GET['subject_id'];
        $subject->update_subject_status($subject_id);
        $subjects = $subject->show_with_id($_GET['tutor_id']);
    }
    

?>

 
    <main> 
        <div class="profiling container">
            <div class="profile-main">
                <div class="profile-main-head">
                    <img src="../images/tutor-profile.png" alt="profile" class="profile-img">
                    <div class="profile-name-description">
                        <div class="profile-name">
                            <h2><?php echo $account[0]['firstname'] . ' ' . $account[0]['middlename'] . ' ' . $account[0]['lastname']; ?></h2>
                            <div class="circle"></div>
                            <p>available</p>
                        </div>
                        <div class="profile-description">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $account[0]['description'];?></p>
                        </div>

                        <input type="checkbox" name = "input-checkbox" class = "input-checkbox" id = "open-edit-profile" value = "open-checkbox" <?php echo $checker ?>>
                        <label class = "edit-label <?php echo $editSubmit?>" for="open-edit-profile">Edit Profile</label>

                        <div class="modal edit-profile-modal">
                            <form class="modal-content edit-profile" action = "tutor-profile.php?tutor_id=<?php echo $_GET['tutor_id']?>" method = "post" >
                                <div class="header-profile">
                                    <h2>Edit Profile</h2>
                                </div>
                                <div class="input-container">
                                    <div class="input-container-item">
                                        <label for="firstname">First Name: </label>
                                        <input type="text" name = "firstname" id = "firstname" required value = "<?php echo $account[0]['firstname']?>">
                                    </div>
                                    <div class="input-container-item">
                                        <label for="middlename">middle Name: </label>
                                        <input type="text" name = "middlename" id = "middlename"  value = "<?php echo $account[0]['middlename']?>">
                                    </div>
                                    <div class="input-container-item">
                                        <label for="lastname">last Name: </label>
                                        <input type="text" name = "lastname" id = "lastname" required  value = "<?php echo $account[0]['lastname']?>">
                                    </div>
                                    <div class="input-container-item">
                                        <label for="profile-description">Description: </label>
                                        <textarea  name = "profile-description" id = "profile-description" required> <?php echo $account[0]['description']?></textarea>
                                    </div>

                                </div>
                            

                                <label for="open-edit-profile">Cancel</label> <input type="submit" value ="Save" name = "edit-submit">
                            </form>
                        </div>
                    </div>
                    

                </div>
                

                <div class="profile-subjects-skills properties">
                    <img class = "header-img" src="../images/grid/profile/graduation-hat.png" alt="hat">
                    <div class="subjects subjects-skills-details">
                        <h3 class="profile-subjects-skills-header">Subjects</h3>
                        <ul class = "profile-subjects-skills-list">

                            <?php 

                                foreach ($subjects as $keys => $value) {
                            ?>
                            
                                    <li class = "item"><?php echo $value['subject_name']?> <a class = "delete-subject <?php echo $selfview ?>"href="tutor-profile.php?tutor_id=<?php echo $_GET['tutor_id']?>&subject_id=<?php echo $value['subject_id']?>">Delete</a></li>
                                <?php
                                    
                                }
                            ?>

                        </ul>
                        <form class = "add-subject <?php echo $addSubject?>" action="tutor-profile.php?tutor_id=<?php echo $_GET['tutor_id']?>" method = "post">
                            <input type="text" for = "subjectname" name = "subjectname" id = "subjectname" placeholder = "example: Math" required> <input type="submit" name = "subject-submit" value = "Add Subject">
                        </form>
                    </div>
                    <div class="skills subjects-skills-details">
                        <h3 class="profile-subjects-skills-header">Skills</h3>
                        <ul class = "profile-subjects-skills-list">
                            <li class = "item">Patience</li>
                            <li class = "item">Positive</li>
                            <li class = "item">Computer</li>
                            <li class = "item">Enthusiastic</li>
                            <li class = "item">Communication</li>
                        </ul>
                    </div>
                
                </div>
                <div class="profile-experience properties">
                    <div class="profile-properties-header">
                        <img class = "header-img" src="../images/grid/profile/brief-case.png" alt="brief case">
                        <h3 class="profile-experience-header">Experience</h3>
                    </div>
                    <div class="profile-experience-details details">
                        <p class="experience-info">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $account[0]['experience']?></p>
                        <!-- start edit experience -->
                        <input type="checkbox" name="input-checkbox" class="input-checkbox" id="open-edit-experience" value="open-checkbox" <?php echo $experienceChecker ?>>
                        <label class="edit-label <?php echo $editSubmit ?>" for="open-edit-experience">Edit Experience</label>

                        <div class="modal edit-experience-modal">
                            <form class="modal-content edit-experience" action="tutor-profile.php?tutor_id=<?php echo $_GET['tutor_id'] ?>" method="post">  
                                <div class="header-profile">
                                    <h2>Experience</h2>
                                </div>
                                <div class="input-container">
                                    <div class="input-container-item">
                                        <label for="experience">Experience: </label>
                                        <textarea name="experience" id="experience" required><?php echo $account[0]['experience'] ?></textarea>
                                    </div>
                                </div>
                                <label for="open-edit-experience">Cancel</label> <input type="submit" value="Save" name="edit-experience-submit">
                            </form>
                        </div>
                        <!-- end edit experience -->
                    </div>
                </div>
                <div class="profile-education properties">
                    <div class="profile-properties-header">
                        <img class = "header-img" src="../images/grid/profile/graduate.png" alt="brief case">
                        <h3 class="profile-education-header">Education</h3>
                    </div>
                    <div class="profile-education-details details">
                        <p><?php echo $account[0]['education']?></p>
                        <!-- start edit education -->
                        <input type="checkbox" name="input-checkbox" class="input-checkbox" id="open-edit-education" value="open-checkbox" <?php echo $educationChecker ?>>
                        <label class="edit-label <?php echo $editSubmit ?>" for="open-edit-education">Edit Education</label>

                        <div class="modal edit-education-modal">
                            <form class="modal-content edit-education" action="tutor-profile.php?tutor_id=<?php echo $_GET['tutor_id'] ?>" method="post">  
                                <div class="header-profile">
                                    <h2>Education</h2>
                                </div>
                                <div class="input-container">
                                    <div class="input-container-item">
                                        <label for="education">Education: </label>
                                        <textarea name="education" id="education" required><?php echo $account[0]['education'] ?></textarea>
                                    </div>
                                </div>
                                <label for="open-edit-education">Cancel</label> <input type="submit" value="Save" name="edit-education-submit">
                            </form>
                        </div>
                        <!-- end edit education -->

                    </div>
                </div>
                
            </div>
            <div class="profile-details">
                <div class="offered-services profile-details-container ">
                    <p class="profile-details-header">My tutorial services includes:</p>

                    <p class="services-optional"><?php echo $account[0]['services']?></p>

                    <!-- Start edit services -->
                    <input type="checkbox" name="input-checkbox" class="input-checkbox" id="open-edit-services" value="open-checkbox" <?php echo $servicesChecker ?>>
                    <label class="edit-label <?php echo $editSubmit ?>" for="open-edit-services">Edit Services</label>

                    <div class="modal edit-services-modal">
                        <form class="modal-content edit-services" action="tutor-profile.php?tutor_id=<?php echo $_GET['tutor_id'] ?>" method="post">  
                            <div class="header-profile">
                                <h2>Tutor Services</h2>
                            </div>
                            <div class="input-container">
                                <div class="input-container-item">
                                    <label for="services">Services: </label>
                                    <textarea name="services" id="services" required><?php echo $account[0]['services'] ?></textarea>
                                </div>
                            </div>
                            <label for="open-edit-services">Cancel</label> <input type="submit" value="Save" name="edit-services-submit">
                        </form>
                    </div>
                    <!-- End edit services -->
                </div>
                <div class="location profile-details-container">
                    <p class="location-p-container"><i class='bx bxs-map-pin'></i> Recodo, Zamboanga City</p>
                    <p class="location-p-container"><i class='bx bx-desktop' ></i> Online/Homebase</p>
                    <p class="location-p-container"><i class='bx bx-wallet'></i> ₱100 - ₱300/hr</p>
                    <?php
                        if(isset($_SESSION['logged-in']) && $_SESSION['logged-in']['type'] == 'learner'){
                            if(isset($_GET['tutor_id'])){?>
                                <button class="appointment-btn"><a href="../learner/appointment.php?tutor_id=<?php echo $_GET['tutor_id'] ?>">Make an appointment</a></button>
                            <?php   
                            }
                        }
                    ?>
                </div>
                <div class="ratings profile-details-container">
                    <p class="profile-details-header">Rating Breakdown</p>
                    <p class="reviews">(15) Reviews <i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i> 4.8</p>
                </div>
                <?php
                    if(isset($_SESSION['logged-in']['id']) == $_GET['tutor_id']){  ?> 
                        <div class="scheduling-container">
                            <a href="tutor-schedule.php?<?php $_SESSION['logged-in']['id']?>">visit schedule</a>
                        </div>
                <?php    }
                ?>
                
            </div>
        </div>
    </main>

<?php
    require_once "../includes/footer.php";

?>