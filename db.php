<?php

// Identifiants de connection à votre BDD
define('DSN', 'mysql:host=localhost;dbname=092020_dojocrudphp');
define('USER', 'yavuz');
define('PASS', 'yavuz');

// Initialisation de la connection
$pdo = new PDO(DSN,USER,PASS);