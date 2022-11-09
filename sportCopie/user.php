<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TABLEAU D'UN UTILISATEUR</title>
</head>
<body>

<?php 
$link = mysqli_connect("localhost", "root", "", "user", 3306);
$id = $_GET["id"];
$requette = "SELECT * FROM user WHERE id =$id";
$resultats = mysqli_query($link, $requette);  
$row = mysqli_fetch_assoc($resultats);   
?>

<div class="container">
    <h1 class="text-center">Modification d'un utilisateur</h1>
    <form class="form_user mt-5 text-center" method="POST" action="update.php">
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
        <div class="form-group col-md-4 mx-auto">
            <label class="font-weight-bold" for="email">Email</label>
            <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div class="form-group col-md-4 mx-auto">
            <label class="font-weight-bold" for="password">Mot de passe</label>
            <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($row["password"], ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div class="form-group">
            <a href="while.php"><input type="button" value="Retour Liste" class="btn btn-primary font-weight-bold"></a>
            <input type="submit" name="modifier" value="Modifier" class="btn btn-success font-weight-bold">
        </div>
    </form>
</div>

</body>
</html>
