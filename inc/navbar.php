<?php

    // Wenn keine Konstante definiert ist, wird die Datei nicht geladen
    if (!defined('NAVBARALLOWED')) {
        Exit('Non Config Available');
    }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">PHP Login</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="login.php">Anmelden</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Registrieren</a>
      </li>
    </ul>
  </div>
</nav>