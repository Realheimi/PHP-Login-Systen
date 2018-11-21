<?php

    // Wenn keine Konstante __CONFIG__ definiert ist, wird die Config nicht geladen
    if (!defined('__CONFIG__')) {
        Exit('Non Config Available');
    }

    //erlaubte inc Dateien
    define('HEADERALLOWED', true);
    define('FOOTERALLOWED', true);
    define('NAVBARALLOWED', true);


    // Hier Startet die Config

    // die DB Klasse laden
    include_once "classes/DB.php";

    $con = DB::getConnection();

?>
