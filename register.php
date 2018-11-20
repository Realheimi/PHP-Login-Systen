<?php 

    // Die Config erlauben
    define('__CONFIG__', true);
    // Die Config laden
    require_once "inc/config.php"; ?>

  <?php
  // Einfügen des Headers
  $pagetitle = "Registrieren"; // Hier den Seitentitel angeben
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
    <h1> Regestrieren </h1>
    <form class="js-register">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required="required" placeholder="email@email.com">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" required="required" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-danger">Registrieren</button>
    </form>
    </div>
    <div class="col-sm">
      
    </div>
  </div>
</div>
  
    <?php require_once "inc/footer.php"; ?>
  </body>
</html>