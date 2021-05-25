<?php

    header("Content-Type: application/json");

    if(isset($_GET["id"]))
        getOne($_GET["id"]);
    else
        getAll();

   function getAll(){

    include ("../connection.php");
    
    $data = array(
        "data" => array()
    );

    try {
        $stmt = $pdo->query("SELECT * FROM user");
       
        while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
              extract($user);

              $datum = array(
                  "id" => $user["id"],
                  "name" => $user["name"],
                  "description" => $user["description"],
                  "profission" => $user["profission"],
                  "email" => $user["email"],
                  "city" => $user["city"],
                  "country" => $user["country"],
                  "telephone" => $user["telephone"],
                  "code" => $user["postal_code"] 
              );

              array_push($data['data'], $datum);
        }
        
        echo json_encode($data, JSON_PRETTY_PRINT);

    } catch (PDOException $ex) {
        var_dump($ex);
    }
   }

   function getOne($id){

    include ("../connection.php");
    
    $data = array(
        "data" => array()
    );

    try {
        $stmt = $pdo->query("SELECT * FROM user where id = ".$id);
       
        while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
              extract($user);

              $datum = array(
                  "id" => $user["id"],
                  "name" => $user["name"],
                  "description" => $user["description"],
                  "profission" => $user["profission"],
                  "email" => $user["email"],
                  "city" => $user["city"],
                  "country" => $user["country"],
                  "telephone" => $user["telephone"],
                  "code" => $user["postal_code"] 
              );

              array_push($data['data'], $datum);
        }
        
        echo json_encode($data, JSON_PRETTY_PRINT);

    } catch (PDOException $ex) {
        var_dump($ex);
    }

   }
