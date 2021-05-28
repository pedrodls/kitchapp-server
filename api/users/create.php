<?php

include("../connection.php");

header("Content-type: application/json; charset=utf-8");
header('Access-Control-Allow-Origin: *');

$user = json_decode(trim(file_get_contents("php://input")), true);

$data = array();

$data = array(
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


try {

    $status = array("status"=>"200");

    $cmd = $pdo->prepare(

    "INSERT INTO USER ".
        "(name, description, profission, email, country, telephone, img_url, username, ".
        "password, sex, category_profile_id, type_acess_id) ". 
        "values ". 
        "(:name, :desc, :prof, :mail, :country, :tel, :img, :uname, :pass, :sx, :cat, :role)"
    );

    #region //validando os campos
    $cmd->bindValue(":name", filter_var($data["name"]), PDO::PARAM_STR);

    $cmd->bindValue(":desc", filter_var($data["description"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":prof", filter_var($data["profission"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":mail", filter_var($data["email"], FILTER_VALIDATE_EMAIL), PDO::PARAM_STR);
    
    $cmd->bindValue(":country", filter_var($data["country"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":tel", filter_var($data["telephone"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":img", filter_var($data["img_url"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":uname", filter_var($data["username"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":pass", filter_var($data["password"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":sx", filter_var($data["sex"]), PDO::PARAM_STR);
    
    $cmd->bindValue(":cat", filter_var($data["category_profile_id"]));
    
    $cmd->bindValue(":role", filter_var($data["type_acess_id"]));
    #endregion

    $res = $cmd->execute();

    if($res)
        echo json_encode($data, JSON_PRETTY_PRINT);

} catch (PDOException $ex) {
    echo $ex->getMessage();
}
