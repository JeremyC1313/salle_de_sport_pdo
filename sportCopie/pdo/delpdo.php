<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php 

$dbhost = "localhost";
$dbname = "user";
$dbnomUser = "root";
$dbpassword = "";

try {
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbnomUser,$dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
}
catch (PDOException $e) {
    die($e->getMessage());
}

$id = $_GET["id"]; 
$sql = "DELETE FROM pdo WHERE id= $id";

$prepare = $pdo->prepare($sql);
$execute= $prepare->execute();
var_dump($execute);

if (($execute)){ //mon execute me renvoi un bouléin 
    header("location: tableaupdo.php?del=1");
}
else{
    header("location: tableaupdo.php?del=0");
}
?>