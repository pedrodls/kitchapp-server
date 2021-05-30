<?php
    define("DB_HOST", "localhost");
    define("DB_USER", "root");
    define("DB_NAME", "kitchapp_db");
    define("DB_PWD", "");
    define("SITE_URL", "http://localhost:3000/api/users/users.php");
    $options = [
        PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ];
?>