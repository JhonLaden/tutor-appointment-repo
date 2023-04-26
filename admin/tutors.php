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
    $tutors = "active";
    $tutees = "";
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
            <i class='bx bx-child' ></i> 
            <h3>Tutors</h3>
        </div>


        <?php
            require_once "sortingcontainer.php";
        ?>

        <table >
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
                <td>John Doe</td>
                <td>5</td>
                <td>2023-04-27</td>
                <td>Active</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
                </tr>
                <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>10</td>
                <td>2023-04-26</td>
                <td>Inactive</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
                </tr>
                <tr>
                <td>3</td>
                <td>Mark Johnson</td>
                <td>2</td>
                <td>2023-04-25</td>
                <td>Active</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
                </tr>
                <tr>
                <td>4</td>
                <td>Samantha Lee</td>
                <td>8</td>
                <td>2023-04-24</td>
                <td>Inactive</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
                </tr>
                <tr>
                <td>5</td>
                <td>Michael Smith</td>
                <td>4</td>
                <td>2023-04-23</td>
                <td>Active</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
                </tr>
                <tr>
                <td>6</td>
                <td>Emily Jones</td>
                <td>3</td>
                <td>2023-04-22</td>
                <td>Active</td>
                <td>
                <button>Edit</button>
                <button>Deactive</button>
            </td>
                </tr>
                <tr>
                <td>7</td>
                <td>Robert Davis</td>
                <td>6</td>
                <td>2023-04-21</td>
                <td>Inactive</td>
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