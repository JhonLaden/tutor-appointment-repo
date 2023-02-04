<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href = "../css/reusable.css">
    <link rel = "stylesheet" href = "../css/style.css">
    <link rel = "stylesheet" href = "../css/login-form.css">


    
    <title>Home</title>
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
                    <li class = "nav-item"><a class = "nav-link <?php echo $features; ?>" href="#">FEATURES</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $tutors; ?>" href="../end-users/tutors.php">TUTORS</a></li>
                    <li  id = "about-link" class = "nav-item" ><a  class = "nav-link <?php echo $about; ?>" href="#">ABOUT US</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $faqs; ?>" href="#">FAQs</a></li>

                    <button class= "log-in">Login</button>
                    <button class= "sign-up">Sign up</button>
                </ul>
                

            </div>

            <div class="logo-quote container-flex">
                <img class = "logo" src="../images/logo.png" alt="">
                <div class="quote h-text">Best tutor in town</div>
            </div>

            <div class="join">
                <a href = "#" class = "join-button" >Join</a>
            </div>

            

        </div>
        
    </header>