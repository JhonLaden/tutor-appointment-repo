<div class="form-login">
    <div class="login-main container">
        <div class="login-main-preview">
            <div class="login-header">
                <div class="welcome-header">Welcome to Tutour</div>
                <p class="small-text">Login in to get started!</p>
            </div>
            <form action="" class="login-form">
                <label for="username" >Username</label>
                <input type="text" name="username" id = "username" placeholder = "Enter your username">
                <label for="password" >Password</label>
                <input type="password" name="password" id = "password" placeholder = "Enter your password">
            </form>

            <p class="forgot-password">Forgot Password?</p>

            <button class="login-submit">LOGIN</button>

            <div class="lines">
                <div class="line"></div>
                <p class="or">or</p>
                <div class="line"></div>
            </div>

            <p class="no-account">You don`t have an account? Sign Up as Tutor or Learner </p>

            <button class="create-account">Create Account</button>
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
                        <label class = "tutor-label type-label"for="tutor">Tutor</label>
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
            <button class="prev-btn">Back</button>
            <button class="next-btn" disabled>Next</button>
        </div>
    </div>

    <form class = "tutor-form container" action="#">
        <div class="tutor-header">
            <img src="../images/other/tutor.png" alt="">
            <h4 class="tutor-title">Sign up as tutor</h4>
        </div>
        <div class="tutor-form-preview">
            <div class="tutor-account">
                <label for="tutor-email" >Email</label>
                <input type="email" name="tutor-email" id = "tutor-email" placeholder = "Enter your email">
                <label for="tutor-username" >Username</label>
                <input type="email" name="tutor-username" id = "tutor-username" placeholder = "Enter your username">
                <label for="tutor-password" >Password</label>
                <input type="password" name="tutor-password" id = "tutor-password" placeholder = "Enter your password">
                <label for="tutor-confirm-password" >Confirm Password</label>
                <input type="email" name="tutor-confirm-password" id = "tutor-confirm-password" placeholder = "Enter your password">
            </div>
        </div>
    </form>
    <div class="img"></div>
</div>