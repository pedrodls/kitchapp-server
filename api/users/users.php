<?php
    header("Content-Type: application/json");

    include ("../connection.php");

    try {

        $stmt = $pdo->query("SELECT * FROM user");
        $data = array();
        $i = 0;

        while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
              $data[$i]["id"] = $user["id"];
              $data[$i]["name"] = $user["name"];
              $data[$i]["description"] = $user["description"];
              $data[$i]["profission"] = $user["profission"];
              $data[$i]["email"] = $user["email"];
              $data[$i]["city"] = $user["city"];
              $data[$i]["country"] = $user["country"];
              $data[$i]["telephone"] = $user["telephone"];
              $data[$i]["code"] = $user["code"];
              $i++; 
        }

        echo json_encode($data, JSON_PRETTY_PRINT);

    } catch (PDOException $ex) {
        var_dump($ex);
    }
?>