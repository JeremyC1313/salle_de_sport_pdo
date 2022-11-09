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

$sql = ("INSERT INTO pdo(nom, prenom, message) VALUES ('camuzet', 'jeremy', 'un message ou il ne faut pas repondre')");
$result = $pdo->prepare($sql);
$execute = $result->execute();

if($execute){
    echo "reussi";
}
else{
    echo "non reussi";
}
var_dump($pdo);

?>
<!-- <?php
date_default_timezone_set("Europe/Paris");
echo " / Maintenant Nous sommes le " . date("d/m/Y h:i");
?>  -->