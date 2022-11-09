<?php 
    $link = mysqli_connect("localhost", "root", "", "user", 3306);
    $id = $_GET["id"]; 
    $requette = "DELETE FROM user WHERE id= $id";
    if (mysqli_query($link, $requette)){
        header("location: while.php?del=1");
    }
    else{
        header("location: while.php?del=0");
    }
?>