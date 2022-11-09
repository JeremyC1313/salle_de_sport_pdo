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
$dbhost = "localhost";
$dbname = "user";
$dbnomUser = "root";
$dbpassword = "";
$id = $_GET["id"];

try {
      $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;",$dbnomUser,$dbpassword);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); 
    }
    catch (PDOException $e) {
        die($e->getMessage());
    }

?>
<?php
$sql = "SELECT * FROM pdo WHERE id =$id";
$prepare = $pdo->prepare($sql);
$prepare->execute();
$row = $prepare->fetch();
?>

<div class="container">
    <h1 class="text-center">Modification d'un utilisateur</h1>
    <form class="form_user mt-5 text-center" method="POST" action="updatepdo.php">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div class="form-group col-md-4 mx-auto">
            <label class="font-weight-bold" for="nom">Nom</label>
            <input type="nom" name="nom"class="form-control" value="<?php echo htmlspecialchars($row['nom'], ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div class="form-group col-md-4 mx-auto">
            <label class="font-weight-bold" for="prenom">Prenom</label>
            <input type="prenom" name="prenom"class="form-control" value="<?php echo htmlspecialchars($row["prenom"], ENT_QUOTES, 'UTF-8') ?>">
        </div>
        <div class="form-group">
            <a href="tableaupdo.php"><input type="button" value="Retour Liste" class="btn btn-primary font-weight-bold"></a>
            <input type="submit" name="modifier" value="Modifier" class="btn btn-success font-weight-bold">
        </div>
    </form>
</div>

</body>
</html>