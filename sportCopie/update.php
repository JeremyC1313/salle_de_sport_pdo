<?php 
var_dump($_POST);
$id = $_POST["id"];
$nom = $_POST["nom"];
$prenom = $_POST["prenom"];
$email = $_POST["email"];
$password = $_POST["password"];

$link = mysqli_connect("localhost", "root", "", "user", 3306);
$requette = "UPDATE user SET email = '$email', password = '$password' WHERE id = $id";

if(mysqli_query($link , $requette)){
    header("location: while.php?up=1");
    echo "la modification a été effectué";
}
else{
    header("location: while.php?up=0");
    echo "echec de la modification";
}
?>