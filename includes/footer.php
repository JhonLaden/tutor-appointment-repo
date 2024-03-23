<footer class = "footer-bg" id = "about">
        <div class="info container">
            <div class="logo-company">
                <h1 class="footer-logo">LOGO</h1>
                <p>Locusta Inc.</p>
            </div>

            <div class="about-contact">
                <div class="about">
                    <h2 class = "footer-title">About Us</h2>
                    <p>
                        Sample goal of our Website to our customer
                    </p>
                </div>
               
                <div class="contact">
                    <h2 class = "footer-title">Contact us</h2>
                    <ul>
                        <li>09352006776</li>
                        <li>jhonladen667@yahoo.com</li>
                    </ul>
                </div>
            </div>
           
            <div class="information">
                <h2 class = "footer-title">Information</h2>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">More Search</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Events</a></li>
                </ul>
            </div>

            <div class="helpful-links">
                <h2 class="footer-title">Helpful Links</h2>
                <ul>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Supports</a></li>
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
           
        </div>

        <div class="platforms">
            <div class="platforms-logo">
                <ul>
                    <li><a href="#"><i class='bx bxl-facebook-square footer-icon'></i></a></li>
                    <li><a href="#"><i class='bx bxl-instagram-alt footer-icon' ></i></a></li>
                    <li><a href="#"><i class='bx bxl-twitter footer-icon' ></i></a></li>
                </ul>
            </div>
            <div class="copyright">
                <p>2018 <i class='bx bx-copyright' ></i> company.Ltd. All Right reserved </p>
            </div>
        </div>
    </footer>

    <script src = "../js/home.js"> </script>
    <script src = "../js/buttonScroll.js"> </script>
    <script src = "../js/radio.js"> </script>
    <script src = "../js/tutor-btns.js"> </script>
    <script src = "../js/old-learner-btns.js"></script>
    <script src = "../js/guardian-btns.js"></script>
    <!-- TESTING MODAL -->
    <script src = "../js/modals.js"></script>

    <!-- for calendar library -->
    
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.global.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.global.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/6.1.11/index.js'></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
        initialView: 'dayGridMonth',
        // Callback function called when the calendar is fully rendered
        datesRender: function(info) {
            // Get all the day cells representing Sundays
            var sundayCells = document.querySelectorAll('.fc-day-sun');

            // Iterate through each Sunday cell
            sundayCells.forEach(function(sundayCell) {
                // Change the background color to red for Sundays
                sundayCell.style.backgroundColor = 'red';
            });
        }
        });

        calendar.render();
    });
    </script>
</body>
</html>