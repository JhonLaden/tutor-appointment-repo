<?php
    require_once "../variables/nav.php";
    $tutors = "active";
    $title = 'TutourOnline | Tutors';
    require_once "../includes/header.php";


?>

<main>
    <div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="login-main-preview">
        <!-- existing code for login form -->
        <div class="login-main-preview">
                <div class="login-header">
                    <div class="welcome-header">Welcome to Tutour</div>
                    <p class="small-text">Login in to get started!</p>
                </div>

                <!-- login form -->
                <!-- action="../end-users/home.php" -->
                <form name="login-form" onsubmit = "event.preventDefault()" class="login-form" method = "GET">
                    <?php
                        if (isset($_GET['login-submit'])){
                            echo $_GET['username'];
                            echo $_GET['password'];    
                        }
                    ?>
                    <label for="username" >Username</label>
                    <input type="text" name="username" id = "username" placeholder = "Enter your username">
                    <label for="password" >Password</label>
                    <input type="password" name="password" id = "password" placeholder = "Enter your password">

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
    </div>
    </div>

</main>

<?php
    require_once "../includes/footer.php";
?>

