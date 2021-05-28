<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {

    unset($_SESSION['login']);
    unset($_SESSION['password']);
    header('location:../login.template/login.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>