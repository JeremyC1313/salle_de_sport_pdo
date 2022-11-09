<?php

$dbhost = "localhost";
$dbname = "user";
$dbnomUser = "root";
$dbpassword = "";

try {
        $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbnomUser,$dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"connexion en cours";
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 

    }
    catch (PDOException $e) {
        die($e->getMessage());
        echo"connexcion echoué";
    }
    
$sql = 'SELECT * FROM pdo';
$prepare = $pdo->prepare($sql);
$prepare->execute();
$rows = $prepare->fetchAll();

foreach ($rows as $row) {
?>
<?php
   var_dump($row);
}
?>