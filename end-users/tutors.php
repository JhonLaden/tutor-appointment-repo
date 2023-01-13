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

    <form action="../tutors/search-query=?" class = "container search-sort">
        <div class="search">
            <label for="search" class = "search-label">Search</label>
            <input type="text" name = "search" id = "search">
        </div>
        <div class="sort">
            <label for="sort">Sorty by</label>
                <select name="sort" id="cars">
                    <option value="name">Name</option>
                    <option value="stars">Stars</option>
                    <option value="pay">Payment</option>
                    <option value="audi">Audi</option>
                </select>
        </div>
    </form>

    <div class="card-container container">

    
        <button id = "smooth-btn" class = "prev-btn disabled-btn" ><i class='bx bx-chevron-left'></i></button>

        <ul class="list-container" id = "scrollable-element">
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/english.png" alt="english">
                    <div class="card-title">English</div>
                </a>
            </li>
            <li class="card">
                <a href="#" class = "card-link">
                    <img class = "card-img" src="../images/icons/art.png" alt="art">
                    <div class="card-title">Art</div>
                </a>
            </li>
            <li class="card">
                <a href="#" class = "card-link">
                    <img class = "card-img" src="../images/icons/math.png" alt="math">
                    <div class="card-title">Math</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/history.png" alt="history">
                    <div class="card-title">History</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/philosophy.png" alt="philosophy">
                    <div class="card-title">Philosophy</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/technology.png" alt="technology">
                    <div class="card-title">Technology</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/science.png" alt="science">
                    <div class="card-title">Science</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/literature.png" alt="literature">
                    <div class="card-title">Literature</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/geometry.png" alt="geometry">
                    <div class="card-title">Geometry</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/geography.png" alt="geography">
                    <div class="card-title">Geography</div>
                </a>
            </li>
            

            
        </ul>
        <button id = "#smooth-btn" class = "next-btn" ><i class='bx bx-chevron-right' ></i></button>
    </div>

    <div class="container total-services">
        <p class=" t-color">63,449 services available</p>
    </div>
    
    <div class="container grid-container">
        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall-1.png" alt="wall1">

            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>
       
        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/icons/science.png" alt="wall1">

            </div>

            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>

        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall-1.png" alt="wall1">

            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall-1.png" alt="wall1">

            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall-1.png" alt="wall1">

            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall-1.png" alt="wall1">

            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>
        <div class="grid-item">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall-1.png" alt="wall1">

            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile-1.jpeg" alt="profile1" class="profile-img">
                    <div class="profile-name-type">
                        <div class="profile-name">Julia Barbero</div>
                        <div class="profile-type">Tutor</div>
                    </div>
                </div>
                <p class="details">
                    I have been teaching students for more than 2 years and to teach unfortunate children voluntarily
                    and teaching online would be my source of income for this year.

                </p>
                <div class="rating">
                    <i class='bx bxs-star'></i>
                    <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                </div>
                <p class="pay-rate">Payrate at <h2>₱ <span class = "pay-rate-value">200.00</span></h2></p>
            </div>
        </div>
        
        
    </div>

    
    <script src = "../js/tutors.js" > </script>
    
</main>
<?php
    require_once "../includes/footer.php";
?>