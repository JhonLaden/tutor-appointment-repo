<?php
    require_once "../variables/nav.php";
    $tutors = "active";
    require_once "../includes/header.php";
?>
<main>
    <div class="wall wall-bg-home">
        <div class="container container-wall fluid-height">
            <div class="wall-body container-wall">
                    <div class="wall-title">Tutor appointment</div>
                    <h1 class="wall-sub-title">Empowering students to learn</h1>
            </div>
       
        </div>
    </div>

    <div class="card-container container">
        <button id = "smooth-btn" class = "prev-btn disabled-btn" ><i class='bx bx-chevron-left'></i></button>

        <ul class="list-container" id = "scrollable-element">
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/english.png" alt="english">
                    <div class="card-title">English</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/art.png" alt="art">
                    <div class="card-title">Art</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/math.png" alt="math">
                    <div class="card-title">Math</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/history.png" alt="history">
                    <div class="card-title">History</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/philosophy.png" alt="philosophy">
                    <div class="card-title">Philosophy</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/technology.png" alt="technology">
                    <div class="card-title">Technology</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/science.png" alt="science">
                    <div class="card-title">Science</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/literature.png" alt="literature">
                    <div class="card-title">Literature</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/geometry.png" alt="geometry">
                    <div class="card-title">Geometry</div>
                </a>
            </li>
            <li class="card">
                <a href="#">
                    <img class = "card-img" src="../images/icons/geography.png" alt="geography">
                    <div class="card-title">Geography</div>
                </a>
            </li>
            

            
        </ul>
        <button id = "#smooth-btn" class = "next-btn" ><i class='bx bx-chevron-right' ></i></button>


    </div>
    
    <script src = "../js/tutors.js" > </script>
    
</main>
<?php
    require_once "../includes/footer.php";
?>