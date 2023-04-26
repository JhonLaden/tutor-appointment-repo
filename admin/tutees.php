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
    $tutees = "active";
    $applicants = "";
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
            <i class='bx bxs-graduation' ></i>
            <h3>Tutees</h3>
        </div>


        <?php
            require_once "sortingcontainer.php";
        ?>

        <table>
        <thead>
            <tr>
            <th>ID #</th>
            <th>Name</th>
            <th>Total Tutees</th>
            <th>Date Created</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <td>1</td>
            <td>John Smith</td>
            <td>10</td>
            <td>2022-01-01</td>
            <td>Active</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>2</td>
            <td>Jane Doe</td>
            <td>5</td>
            <td>2022-02-15</td>
            <td>Inactive</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>3</td>
            <td>Mike Johnson</td>
            <td>8</td>
            <td>2022-03-10</td>
            <td>Active</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>4</td>
            <td>Sara Lee</td>
            <td>2</td>
            <td>2022-04-22</td>
            <td>Inactive</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
            <td>5</td>
            <td>Tom Wilson</td>
            <td>12</td>
            <td>2022-05-05</td>
            <td>Active</td>
            <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
            <tr>
                <td>6</td>
                <td>Alice Johnson</td>
                <td>6</td>
                <td>2022-07-01</td>
                <td>Actixve</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
            </tr>
                <tr>
                <td>7</td>
                <td>Mark Davis</td>
                <td>9</td>
                <td>2022-08-01</td>
                <td>Active</td>
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