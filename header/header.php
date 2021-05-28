<div class="wrapper">
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(78, 78, 65); ">
    <form action="../home/home.php">
      <button class="btn navbar-brand" href="#" style="margin-left: 5%; font-size: 45px;">kitchApp<i class="fas fa-utensils"></i>
        </button>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="margin: 2%;">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav" style="margin-right: 25%;">
      <ul class="navbar-nav ">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:white">

            <img src=<?php
                      echo '"../assets/users/' . $_SESSION['img_url'] . '"';
                      ?> class="img thumbnail" width="50" height="50" alt="Avatar" style="border-radius: 50%;">
            <?php
            echo $_SESSION['name'];
            ?>

          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <form action="../home/profile.php">
              <button class="dropdown-item" href="#">Profile</button>
            </form>
            <div class="dropdown-divider"></div>
            <form action="../login.template/logout.php">
              <button class="btn dropdown-item" href="#" type="submit">
                Log out
              </button>
            </form>
          </div>

        </li>
        <li class="nav-item">

        </li>
      </ul>
    </div>
  </nav>
</div>