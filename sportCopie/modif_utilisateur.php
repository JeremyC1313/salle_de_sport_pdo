<?php 
$id = $_GET["id"];
$requette = "SELECT * FROM `admin` WHERE `id` =$id";
$link = mysqli_connect("localhost", "root", "", "user", 3306);
$resultats = mysqli_query($link, $requette);    
$row = mysqli_fetch_assoc($resultats);   
?>

<h1 class="text-center">Modifier utilisateur</h1>
        <form class="form_user mt-5" method="POST" action="update.php">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" value="<?php echo htmlspecialchars($row["email"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" class="form-control" value="<?php echo htmlspecialchars($row["password"], ENT_QUOTES, 'UTF-8') ?>">
            </div>
            <div class="form-group">
                <a href="index.php"><input type="button" value="Retour Liste" class="btn btn-primary"></a>
                <input type="submit" name="modifier" value="Modifier" class="btn btn-success">
            </div>
            
        </form>