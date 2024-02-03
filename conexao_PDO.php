<?php

//Credenciais de acesso ao BD
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'exemplo');

$conn = new PDO('mysql:host=' . HOST . ';dbname=' . DBNAME . ';', USER, PASS);

