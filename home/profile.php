<?php
include("../home/validate.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
    <header>
        <?php
        include("../header/header.php");
        ?>
    </header>
    <section>
        <div class="container">
            <div class="row" style="text-align: center; padding: 20px;">
                <div class="col-md-12">
                    <img src=<?php echo '"../assets/users/' . $_SESSION['img_url'] . '"';
                                ?> class="img thumbnail" width="150" height="150" alt="Avatar" style="border-radius: 50%;">
                </div>
            </div>
            <div class="row" style="text-align: center; padding: 20px;">
                <div class="col-md-12">
                    <a href="#" class=<?php

                                        if ($_SESSION["acess"] == 2)
                                            echo "'btn btn-danger'";
                                        else
                                            echo "'btn btn-primary'";
                                        ?> style="color:white">
                        <?php
                        if ($_SESSION["acess"] == 2)
                            echo "Admin Acess";
                        else
                            echo "Client Acess";
                        ?>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="text-align: right;">
                    <span class="title h3">Username</span>
                </div>
                <div class="col-md-6" style="text-align: left;">
                    <span class="title display-4"><?php echo $_SESSION["name"] ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4" style="text-align: right;">
                    <span class="title h3">Email</span>
                </div>
                <div class="col-md-6" style="text-align: left;">
                    <span class="title display-4"><?php echo $_SESSION["email"] ?></span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center; padding: 20px;">
                    <span class="title display-3">Biografy</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12" style="text-align: center; padding: 20px;">
                    <span class="title h3"><?php echo $_SESSION["desc"] ?></span>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
        include("../footer/footer.php");
        ?>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b12fc99d36.js" crossorigin="anonymous"></script>
</body>

</html>