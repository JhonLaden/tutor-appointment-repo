<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        require_once "../classes/tutor.class.php";
        require_once "../classes/learner.class.php";

        //Sanitizing the inputs of the users. Mandatory to prevent injections!
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        
        $tutor = new Tutor();
        $learner = new Learner();

        $accounts = $tutor->show();
        foreach($accounts as $keys => $value){
            //check if the username and password match in the array
            if($username == $value['username'] && $password == $value['password']){
                //if match then save username, fullname and type as session to be reused somewhere else
                $_SESSION['logged-in'] = $value;

                header('location: ../tutor/tutor-profile.php');

              
            }
        }

        $accounts = $learner->show();

        foreach($accounts as $keys => $value){
            //check if the username and password match in the array
            if($username == $value['username'] && $password == $value['password']){
                //if match then save username, fullname and type as session to be reused somewhere else
                $_SESSION['logged-in'] = $value;
                
                header('location: ../end-users/tutors.php');
                
            }
        }
        //set the error message if account is invalid
        $error = 'Invalid username/password. Try again.';
    }
?>
<div class="disabled-bg" ></div>
<div class="form-login">
    <i class='bx bx-x form-login-x-btn'></i>
    <div class="login-main container">
        <div class="login-main-preview">
            <div class="login-header">
                <div class="welcome-header">Welcome to Tutour</div>
                <p class="small-text">Login in to get started!</p>
            </div>

            <!-- login form -->
            <!-- action="../end-users/home.php" -->
            <form name="login-form" class="login-form" action = '<?php $current_page?>' method = "POST">
            
                <label for="username" >Username</label>
                <input type="text" name="username" id = "username" placeholder = "Enter your username" required>
                <label for="password" >Password</label>
                <input type="password" name="password" id = "password" placeholder = "Enter your password" required>
                    
                <!-- test submit button  -->
                <!-- DELETE THIS IF NOT WORKING!!! -->
                <input type="submit" name = "login-submit" class = "login-submit" value = "LOGIN" >

                
            </form>

            <p class="forgot-password">Forgot Password?</p>

            <!-- <button type = "submit" class="login-submit">LOGIN</button> -->

            <div class="lines">
                <div class="line"></div>
                <p class="or">or</p>
                <div class="line"></div>
            </div>

            <p class="no-account">You don`t have an account? Sign Up as Tutor or Learner </p>

            <button type = "button" class="create-account">Create Account</button>
        </div>
        
    </div>
    <div class="sign-in container">
        <div class="sign-in-preview">
            <div class="sign-in-header">
                <h4 class="type-header">You want to become a tutor or learner?</h4>
                <p class="p-choose">Please  choose if you want to a tutor, learner or guardian</p>
            </div>

            <div class="form-type-radio">
                    <div class="radio-container">
                        <img src="../images/other/tutor.png" alt="">
                        <input class = "tutor-radio type-radio" type="radio" id="tutor" name="type" value="tutor">
                        <a href = "../end-users/tutor-sign-up.php" >Tutor</a>
                    </div>

                    <div class="radio-container">
                        <img src="../images/other/learner.png" alt="">
                        <input class = "learner-radio type-radio" type="radio" id="learner" name="type" value="learner">
                        <label class = "learner-label type-label" for="learner">Learner</label>
                    </div>  

                    <div class="radio-container">
                        <img src="../images/other/guardian.png" alt="">
                        <input class = "guardian-radio type-radio" type="radio" id="guardian" name="type" value="guardian">
                        <label class = "guardian-label type-label" for="guardian">Guardian</label>
                    </div>  
                </div>
        </div>
        <div class="sign-in-btns">
            <button type = "button" class="prev-btn">Back</button>
            <button type = "button" class="next-btn" disabled>Next</button>
        </div>
    </div>

    <form class = "tutor-form container" action="../end-users/home.php" method = "POST">
        <div class="tutor-header">
            <img src="../images/other/tutor.png" alt="">
            <h4 class="tutor-title">Sign up as tutor</h4>
        </div>
        <div class="tutor-form-preview">
            <div class="tutor-account">
                <h4 class = "tutor-form-preview-header">Account</h4>
                <label for="tutor-email" >Email</label>
                <input type="email" name="tutor-email" id = "tutor-email" placeholder = "Enter your email">
                <label for="tutor-username" >Username</label>
                <input type="email" name="tutor-username" id = "tutor-username" placeholder = "Enter your username">
                <label for="tutor-password" >Password</label>
                <input type="password" name="tutor-password" id = "tutor-password" placeholder = "Enter your password">
                <label for="tutor-confirm-password" >Confirm Password</label>
                <input type="password" name="tutor-confirm-password" id = "tutor-confirm-password" placeholder = "Enter your password">
            </div>
            <div class="tutor-personal-information">
                <h4 class = "tutor-form-preview-header">Personal Information</h4>
                <label for="tutor-fn" >First name</label>
                <input type="text" name="tutor-fn" id = "tutor-fn" placeholder = "Enter your first name">
                <label for="tutor-mn" >Middle name (optional)</label>
                <input type="text" name="tutor-mn" id = "tutor-mn" placeholder = "Enter your middle name">
                <label for="tutor-ln" >Last name</label>
                <input type="text" name="tutor-ln" id = "tutor-ln" placeholder = "Enter your last name">
                <label for="tutor-bd" >Birth date</label>
                <input type="date" name="tutor-bd" id = "tutor-bd">
                <label for="tutor-contact-number" >Contact number</label>
                <input type="number" name="tutor-contact-number" id = "tutor-contact-number" placeholder = "Enter your contact number">
                <label for="tutor-address" >Address</label>
                <input type="text" name="tutor-address" id = "tutor-address" placeholder = "Enter your address">
                <label for="tutor-subject" >Subject</label>
                <input type="text" name="tutor-subject" id = "tutor-subject" placeholder = "subject">
                <label for="tutor-age-range" >Prefered age range</label>
                <input type="text" name="tutor-age-range" id = "tutor-age-range" placeholder = "Enter your prefered age range">
            </div>
        </div>
        <div class="tutor-btns">
            <button type = "button" class="prev-btn">Back</button>
            <button type = "button" class="next-btn">Next</button>
            <button type = "submit" class="submit-btn">Submit</button>
        </div>
    </form> 

    <form class = "learner-form container" action="../end-users/home.php" method = "POST">
        <div class="learner-header">
            <img src="../images/other/learner.png" alt="">
            <h4 class="learner-title">Sign up as learner</h4>
        </div>
        <div class="learner-form-preview">
            <div class="learner-account">
                <h4 class = "learner-form-preview-header">Account</h4>
                <label for="learner-email" >Email</label>
                <input type="email" name="learner-email" id = "learner-email" placeholder = "Enter your email">
                <label for="learner-username" >Username</label>
                <input type="email" name="learner-username" id = "learner-username" placeholder = "Enter your username">
                <label for="learner-password" >Password</label>
                <input type="password" name="learner-password" id = "learner-password" placeholder = "Enter your password">
                <label for="learner-confirm-password" >Confirm Password</label>
                <input type="password" name="learner-confirm-password" id = "learner-confirm-password" placeholder = "Enter your password">
            </div>
            <div class="learner-personal-information">
                <h4 class = "learner-form-preview-header">Personal Information</h4>
                <label for="learner-fn" >First name</label>
                <input type="text" name="learner-fn" id = "learner-fn" placeholder = "Enter your first name">
                <label for="learner-mn" >Middle name (optional)</label>
                <input type="text" name="learner-mn" id = "learner-mn" placeholder = "Enter your middle name">
                <label for="learner-ln" >Last name</label>
                <input type="text" name="learner-ln" id = "learner-ln" placeholder = "Enter your last name">
                <label for="learner-bd" >Birth date</label>
                <input type="date" name="learner-bd" id = "learner-bd">
                <label for="learner-contact-number" >Contact number</label>
                <input type="number" name="learner-contact-number" id = "learner-contact-number" placeholder = "Enter your contact number">
                <label for="learner-address" >Address</label>
                <input type="text" name="learner-address" id = "learner-address" placeholder = "Enter your address">
            </div>
            <div class="learner-guardian">
                <h4 class = "learner-guardian-header">Guardian(optional)</h4>
                <label for="learner-guardian-fn" >First name</label>
                <input type="text" name="learner-guardian-fn" id = "learner-guardian-fn" placeholder = "Enter your first name">
                <label for="learner-guardian-mn" >Middle name (optional)</label>
                <input type="text" name="learner-guardian-mn" id = "learner-guardian-mn" placeholder = "Enter your middle name">
                <label for="learner-guardian-ln" >Last name</label>
                <input type="text" name="learner-guardian-ln" id = "learner-guardian-ln" placeholder = "Enter your last name">
                <label for="learner-guardian-bd" >Birth date</label>
                <input type="date" name="learner-guardian-bd" id = "learner-guardian-bd">
                <label for="learner-guardian-contact-number" >Contact number</label>
                <input type="number" name="learner-guardian-contact-number" id = "learner-guardian-contact-number" placeholder = "Enter your contact number">
                <label for="learner-guardian-sex">Sex</label>
                <select name="learner-guardian-sex" id="sex">
                    <option value="None">None</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="learner-guardian-address" >Address</label>
                <input type="text" name="learner-guardian-address" id = "learner-guardian-address" placeholder = "Enter your address">
            </div>
        </div>
        <div class="learner-btns">
            <button type = "button" class="prev-btn">Back</button>
            <button type = "button" class="next-btn">Next</button>
            <input type = "submit" class="submit-btn" name = "submit-learner" id = "submit-learner" value = "submit">
        </div>
    </form> 

    <form class = "guardian-form container" action="../end-users/test.php" method = "POST">
        <div class="guardian-header">
            <img src="../images/other/guardian.png" alt="">
            <h4 class="guardian-title">Sign up as Guardian</h4>
        </div>
        <div class="guardian-form-preview">
            <div class="guardian-account">
                <h4 class = "guardian-form-preview-header">Account</h4>
                <label for="guardian-email" >Email</label>
                <input type="email" name="guardian-email" id = "guardian-email" placeholder = "Enter your email">
                <label for="guardian-username" >Username</label>
                <input type="email" name="guardian-username" id = "guardian-username" placeholder = "Enter your username">
                <label for="guardian-password" >Password</label>
                <input type="password" name="guardian-password" id = "guardian-password" placeholder = "Enter your password">
                <label for="guardian-confirm-password" >Confirm Password</label>
                <input type="password" name="guardian-confirm-password" id = "guardian-confirm-password" placeholder = "Enter your password">
            </div>
            <div class="guardian-personal-information">
                <h4 class = "guardian-form-preview-header">Personal Information</h4>
                <label for="guardian-fn" >First name</label>
                <input type="text" name="guardian-fn" id = "guardian-fn" placeholder = "Enter your first name">
                <label for="guardian-mn" >Middle name (optional)</label>
                <input type="text" name="guardian-mn" id = "guardian-mn" placeholder = "Enter your middle name">
                <label for="guardian-ln" >Last name</label>
                <input type="text" name="guardian-ln" id = "guardian-ln" placeholder = "Enter your last name">
                <label for="guardian-bd" >Birth date</label>
                <input type="date" name="guardian-bd" id = "guardian-bd">
                <label for="guardian-contact-number" >Contact number</label>
                <input type="number" name="guardian-contact-number" id = "guardian-contact-number" placeholder = "Enter your contact number">
                <label for="guardian-address" >Address</label>
                <input type="text" name="guardian-address" id = "guardian-address" placeholder = "Enter your address">
            </div>
        </div>
        <div class="guardian-btns">
            <button type = "button" class="prev-btn">Back</button>
            <button type = "button" class="next-btn">Next</button>
            <button type = "submit" class="submit-btn">Submit</button>
        </div>
    </form> 
      
    <div class="img"></div>
</div>