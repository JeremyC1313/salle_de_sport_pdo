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
    
$id = $_POST["id"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];

$sql = "UPDATE pdo SET nom = '$nom', prenom = '$prenom' WHERE id = $id";
$result = $pdo->prepare($sql);
$execute = $result->execute();

if($execute){
    header("location: tableaupdo.php?up=1");
    echo "la modification a été effectué";
}
else{
    header("location: tableaupdo.php?up=0");
    echo "echec de la modification";
}
?>