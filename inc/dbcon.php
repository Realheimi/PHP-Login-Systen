<?php

    // Wenn keine Konstante __CONFIG__ definiert ist, wird die Datei nicht geladen
    if (!defined('__CONFIG__')) {
        Exit('Non Config Available');
    }

    // Hier die Zugangsdaten zur Datenbank getrennt, damit sie nicht auf GitHub landen.

    $config['sql_hostname'] = 'mysql04.manitu.net'; // MySQL-Server 
    $config['sql_username'] = 'u23897';             // Benutzername 
    $config['sql_password'] = '2AG9bF1xFNjb';       // Kennwort 
    $config['sql_database'] = 'db23897';            // Datenbank 


?>