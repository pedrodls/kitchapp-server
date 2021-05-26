<?php
header("Content-type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');
    include ("../connection.php");

    $id = $_GET["id"];

        try {
            $stmt = $pdo->query("DELETE FROM user where id = ".$id);
        } catch (PDOException $ex) {
            var_dump($ex);
        }
