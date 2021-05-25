<?php

    include ("../connection.php");

    $id = $_GET["id"];

        try {
            $stmt = $pdo->query("DELETE FROM user where id = ".$id);
        } catch (PDOException $ex) {
            var_dump($ex);
        }
?>
