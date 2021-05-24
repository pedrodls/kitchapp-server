<?php
    include ("constants.php");

    $pdo = new PDO(
            "mysql:host=".DB_HOST."; dbname=".DB_NAME,
            DB_USER,
            DB_PWD,
            $options
    );

?>