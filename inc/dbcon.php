<?php

    // Wenn keine Konstante __CONFIG__ definiert ist, wird die Datei nicht geladen
    if (!defined('__CONFIG__')) {
        Exit('Non Config Available');
    }

    // Hier die Zugangsdaten zur Datenbank getrennt, damit sie nicht auf GitHub landen.

    $config['sql_hostname'] = 'localhost'; // MySQL-Server 
    $config['sql_username'] = 'dbuser';             // Benutzername 
    $config['sql_password'] = 'password';       // Kennwort 
    $config['sql_database'] = 'dndslh';            // Datenbank 
    $config['sql_statement'] = 'mysql:charset=utf8mb4;host=localhost;port=3306;dbname=dndslh';

?>