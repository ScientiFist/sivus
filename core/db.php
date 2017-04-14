<?php

/* ON DECLARE LE SERV */
$hostname = 'mysql:dbname=service_44869;host=publicsql-1.pulseheberg.net';
$user = 'service_44869';
$password = '35ixE71zgP';


/* CREATION */
try {
    $dbh = new PDO($hostname, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
