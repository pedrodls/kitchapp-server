<?php

    include ("../connection.php");

    try {

        $stmt = $pdo->query("SELECT * FROM user");
        
        while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
              var_dump($user);
        }

    } catch (PDOException $ex) {
        var_dump($ex);
    }
?>