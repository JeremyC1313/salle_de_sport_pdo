<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<?php 
    $link = mysqli_connect("localhost", "root", "", "user", 3306);
    $requette = "SELECT * FROM user";
    $resultats = mysqli_query($link, $requette);
?>
        
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Email</th>
            <th scope="col">Message</th>
            <th scope="col">Numero</th>
            <th scope="col">Sujet</th>
            <th scope="col">Supprimer Utilisateur</th>
        </tr>
    </thead> 
    <?php foreach($resultats as $row) : ?>
        <tbody>
            <tr>
                <th scope="row"><?php echo $row ["id"]?></th>
                <th scope="row"><a href="updatepdo.php?id=<?php echo $row["id"]?>"><?php echo $row ["nom"]?></a></th>
                <th scope="row"><?php echo $row ["prenom"]?></th>
                <th scope="row"><?php echo $row ["email"]?></th>
                <th scope="row"><?php echo $row ["message"]?></th>
                <th scope="row"><?php echo $row ["numero"]?></th>
                <th scope="row"><?php echo $row ["sujet"]?></th>
                <td scope="col">
                    <button class="btn btn-danger">
                        <a href="delpdo.php?id=<?php echo $row["id"]?>" class="supprimer text-white">Supprimer</a>
                    </button>
                </td>
            </tr>
        </tbody>
    <?php endforeach ; ?>
</table>