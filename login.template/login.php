<?php

include("../api/connection.php");

if ((isset($_SESSION['email']))) {

  unset($_SESSION['login']);
  unset($_SESSION['password']);

  header('location: ../home/home.php');
} else

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="login.css">
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <p class="text">
        kitChApp!
      </p>
    </div>
    <div class="container-fluid">
      <form class="form" action="login.php" method="POST">
        <div class="form-row">
          <div class="col mb-3">
            <i class="fas fa-user"></i>
            <strong style="font-size: 24px;">Login</strong>
          </div>
        </div>
        <div class="form-row">
          <div class="col mb-3">
            <label for="validationCustom01">Email</label>
            <input type="email" name="email" class="form-control" id="validationCustom01" required>
          </div>
          <div class="col mb-3">
            <label for="validationCustom02">Password</label>
            <input type="password" name="pwd" class="form-control" id="validationCustom02" required>
          </div>
        </div>
        <button class="btn btn-primary" type="submit" name="logar">Login</button>
        <a href=""></a>
      </form>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/b12fc99d36.js" crossorigin="anonymous"></script>
  <?php

  $entrou = false;

  if (isset($_POST["logar"])) {
    $email = filter_var(htmlspecialchars($_POST['email']), FILTER_SANITIZE_STRING);
    $senha = filter_var(htmlspecialchars($_POST['pwd']), FILTER_SANITIZE_STRING);

    try {

      $stmt = $pdo->prepare("SELECT * FROM user where email = :email and password =  :pass");
      $stmt->bindParam(":email", $email, PDO::PARAM_STR);
      $stmt->bindParam(":pass", $senha, PDO::PARAM_STR);

      $stmt->execute();

      $data = array();

      while ($user = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $datum = array(
          "id" => $user["id"],
          "name" => $user["name"],
          "email" => $user["email"],
          "password" => $user["password"],
          "url" => $user["img_url"],
          "desc" => $user["description"],
          "acess" => $user["type_acess_id"]

        );

        array_push($data, $datum);
      }
      if ($data[0]["email"] != "") {

        $id = $data[0]["id"];

        session_start();


        $_SESSION['id'] = $data[0]["id"];
        $_SESSION['email'] = $data[0]["email"];
        $_SESSION['name'] = $data[0]["name"];
        $_SESSION['img_url'] = $data[0]["url"];
        $_SESSION['acess'] = $data[0]["acess"];
        $_SESSION['password'] = $data[0]["password"];
        $_SESSION['desc'] = $data[0]["desc"];

        header("location: ../home/home.php?id=$id");

        $entrou = true;
      } else {

        $entrou = false;
      }
    } catch (PDOException $ex) {

      $message = $ex->getMessage();

      echo "<script type='text/javascript'>alert('$message');</script>";
    }
    if ($entrou == false) {

      unset($_SESSION['id']);
      unset($_SESSION['email']);
      unset($_SESSION['name']);
      unset($_SESSION['img_url']);

      header("location: login.php?erro=credencias invalidas");
    }
  }
  ?>


</body>

</html>