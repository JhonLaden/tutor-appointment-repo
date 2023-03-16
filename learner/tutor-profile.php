<?php
    require_once "../variables/nav.php";
    $home = "active";
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>


    <main> 
        <div class="profile container">
            <div class="profile-main">
                <div class="profile-main-head">
                    <img src="../images/grid/profile/mine.jpg" alt="profile" class="profile-img">
                    <div class="profile-name-description">
                        <div class="profile-name">
                            <h2>Jhon Laden</h2>
                            <div class="circle"></div>
                            <p>available</p>
                        </div>
                        <div class="profile-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam vero eveniet repellat beatae cum aut perferendis. Vel magni suscipit aperiam?</p>
                        </div>
                    </div>
                </div>

                <div class="profile-subjects-skills">
                    <div class="subjects subjects-skills-details">
                        <img src="../images/grid/profile/graduation-hat.jpg" alt="hat">
                        <h3 class="profile-subjects-skills-header">Subjects</h3>
                        <ul class = "profile-subjects-skills-list">
                            <li class = "subject-item">Mathematics</li>
                            <li class = "subject-item">English</li>
                            <li class = "subject-item">Computer</li>
                            <li class = "subject-item">Science</li>
                            <li class = "subject-item">Social Studies</li>
                            <li class = "subject-item">Home Economics</li>
                        </ul>
                    </div>
                    <div class="skills subjects-skills-details">
                        <h3 class="profile-subjects-skills-header">Skills</h3>
                        <ul class = "profile-subjects-skills-list">
                            <li class = "subject-item">Mathematics</li>
                            <li class = "subject-item">English</li>
                            <li class = "subject-item">Computer</li>
                            <li class = "subject-item">Science</li>
                            <li class = "subject-item">Social Studies</li>
                            <li class = "subject-item">Home Economics</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="profile-details"></div>
        </div>
    </main>

<?php
    require_once "../includes/footer.php";

?>