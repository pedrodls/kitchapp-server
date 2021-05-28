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

            <div class="row" style="padding: 50px;">
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top thumbnail" src="../assets/images/login.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Esta API que está a ser criada e
                                lançada em uma aplicação dentro em breve,<br>
                                em fase de testes de CRUD, foi feita com o Rest client POSTMAN <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="../assets/images/login2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                Neste momento está disponível a API mas apenas relaccionado a Users <br>
                                que poderá ser acessado caso o pasta do projeto esteja no local certo,
                                e a base de dados nos conformes!
                                É uma aplicação web de pricnípio, que tem como objectivo,
                                Encontrar receitas de pratos, sumos, cock-tails, cofeitaria e não só,
                                mas também dará a possibilidade de avaliação de perfil, encomendar, etc..!
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top img-responsive" src="../assets/images/login3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text">
                                E agora? A aplicação está em construção, <br> e dentro em breve será lançada!
                            </p>
                        </div>
                    </div>
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