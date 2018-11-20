<?php 

    // Die Config erlauben
    define('__CONFIG__', true);
    // Die Config laden
    require_once "inc/config.php"; ?>

    <?php
    // Einfügen des Headers
    $pagetitle = "Wilkommen"; // Hier den Seitentitel angeben
    require_once "inc/header.php";
    ?>
  <body>
  <?php
  //Einfügen der Navigation
  require_once "inc/navbar.php";
  ?>
  <div class="container">
  <div class="row">
    <div class="col-sm">
      
    </div>
    <div class="col-sm">
    Willkommen
    <p>
        <a href="login.php">Anmelden</a>
        <a href="register.php">Registrieren</a>
    </p>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
  
    <?php require_once "inc/footer.php"; ?>
  </body>
</html>