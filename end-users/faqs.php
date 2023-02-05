<?php
    require_once "../variables/nav.php";
    $faqs = "active";
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>

    <main>
    <br>
        <div class="container">
            
            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-1">
                <label for="collapsible-head-1">How can payments be made? Can I pay monthly? <i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Cost</h2>
                    <p>Some sites allow you to pay per session, while others may require a monthly subscription. You will need to check with the specific site or tutor you are interested in to see what their payment policy is.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-2">
                <label for="collapsible-head-2">How do you take payments? <i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Cost</h2>
                    <p>The most common method is through PayPal and Gcash. Other methods include credit/debit cards, bank transfer, and Western Union.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-3">
                <label for="collapsible-head-3">Is there a sibling discount available?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Cost</h2>
                    <p>Yes, we offer a sibling discount for online tutoring.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-4">
                <label for="collapsible-head-4">Do I need to pay deposit if I pay the annual fee in full?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Cost</h2>
                    <p>There is no need to pay a deposit if you pay the annual fee in full.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-5">
                <label for="collapsible-head-5">Do you offer online tutoring?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Tutoring</h2>
                    <p>Yes, we offer online tutoring.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-6">
                <label for="collapsible-head-6">Is our tutoring one-to-one or with a group?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Tutoring</h2>
                    <p>Our tutoring is one-to-one, so you will be working directly with a tutor who can help you with whatever you need.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-7">
                <label for="collapsible-head-7">What subjects do you offer tutoring in?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Tutoring</h2>
                    <p>We offer tutoring in a variety of subjects, including Math, Science, English, and History. However, we are always expanding our range of subjects, so be sure to check back often.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-8">
                <label for="collapsible-head-8">Are you flexible with tutoring days and times?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Tutoring</h2>
                    <p>Yes, we are flexible with tutoring days and times. We understand that our customers and learners have busy schedules, so we offer tutoring sessions that can fit into their schedules.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-9">
                <label for="collapsible-head-9">As a student, what can I expect from my tutoring sessions?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Tutoring</h2>
                    <p>You can expect to receive personalized attention and assistance with areas that you are struggling with. Your tutor will help you to learn the material more effectively and answer any questions that you may have.</p>
                </div>
            </div>

            <div class="collapsible">
                <input type = "checkbox" id = "collapsible-head-10">
                <label for="collapsible-head-10">How are sessions tailored to the needs of each student?<i class='bx bx-chevron-right icon'></i></label> 
                <div class="collapsible-text">
                    <h2>Tutoring</h2>
                    <p>Sessions are designed to be as helpful and tailored to each student as possible. Depending on what the student is struggling with, different techniques and approaches may be used in order to help them learn more effectively.</p>
                </div>
            </div>
        </div>
    </main>

<?php
    require_once "../includes/footer.php";
?>