<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../css/sidebar.css">
    <link rel = "stylesheet" href = "../css/reusable.css">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>

<?php
    $dashboard = "";
    $tutors = "";
    $tutees = "";
    $applicants = "active";
    $pages = "";
    $help = "";

?>

    <?php
        require_once "sidebar.php";
    ?>

    <div class="mainbar">
        <?php
            require_once "topbar.php";
        ?>
       
        <div class="navbar-title">
            <i class='bx bx-user-plus' ></i>
            <h3>Applicants</h3>
        </div>


        <?php
            require_once "sortingcontainer.php";
        ?>

        <table>
        <thead>
            <tr>
            <th>Name</th>
            <th>Contact Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Pay Rate</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>John Doe</td>
            <td>09123456789</td>
            <td>123 Main St.</td>
            <td>johndoe@example.com</td>
            <td>&#8369;500</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>Jane Smith</td>
            <td>09123456788</td>
            <td>456 Oak Ave.</td>
            <td>janesmith@example.com</td>
            <td>&#8369;600</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>Bob Johnson</td>
            <td>09123456787</td>
            <td>789 Pine Rd.</td>
            <td>bjohnson@example.com</td>
            <td>&#8369;700</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>Mary Davis</td>
            <td>09123456786</td>
            <td>234 Elm St.</td>
            <td>marydavis@example.com</td>
            <td>&#8369;800</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>Tom Wilson</td>
            <td>09123456785</td>
            <td>567 Maple Dr.</td>
            <td>tomwilson@example.com</td>
            <td>&#8369;900</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>Emma Lee</td>
            <td>09123456784</td>
            <td>890 Birch Blvd.</td>
            <td>emmalee@example.com</td>
            <td>&#8369;1000</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>David Brown</td>
            <td>09123456783</td>
            <td>1234 Cedar Ln.</td>
            <td>davidbrown@example.com</td>
            <td>&#8369;1100</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
        </tbody>
        </table>


        <?php require_once 'pagination.php'; ?>
        
    </div>
</body>
</html>