<?php
$link = mysqli_connect("localhost", "root", "", "user", 3306);
$email = $_POST["email"];
$password = ["password"];
var_dump($password);
$password_hash = password_hash('$password' , PASSWORD_DEFAULT);
var_dump($password_hash);
$requette = "INSERT INTO user (nom, prenom, email, message, numero, sujet,  password) VALUES ('', '', '$email', '', '', '', '$password_hash')";

if (!empty($email) && !empty($password)) {
    if (mysqli_query($link, $requette)) {
        echo"c'est un test positif";
        header("location: ajout_utilisateur.php?add=1");
    }
}
else {
    echo"c'est un test negatif";
    header("location: ajout_utilisateur.php?add=0");
}
mysqli_close($link);
?>