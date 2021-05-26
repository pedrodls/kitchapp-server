<?php

    header("Content-type: application/json; charset=utf-8");
    header('Access-Control-Allow-Origin: *');

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
                "name" => $user["name"],
                "description" => $user["description"],
                "profission" => $user["profission"],
                "email" => $user["email"],
                "country" => $user["country"],
                "telephone" => $user["telephone"],
                "img_url" => $user["img_url"],
                "username" => $user["username"],
                "password" => $user["password"],
                "sex" => $user["sex"],
                "category_profile_id" => $user["category_profile_id"],
                "type_acess_id" => $user["type_acess_id"]
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
                  "country" => $user["country"],
                  "telephone" => $user["telephone"],
              );

              array_push($data['data'], $datum);
        }
        
        echo json_encode($data, JSON_PRETTY_PRINT);

    } catch (PDOException $ex) {
        var_dump($ex);
    }
   }
   ?>
