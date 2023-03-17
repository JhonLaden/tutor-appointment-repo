<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
</head>
<body>
    hello world
</body>
</html> -->

<?php
    session_start();
    if(isset($_SESSION['logged-in'])){
        header('location: end-users/home.php');
    }else{
        header('location: end-users/home.php');
    }
?>