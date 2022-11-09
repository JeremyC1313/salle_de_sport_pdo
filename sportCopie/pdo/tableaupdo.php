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
    
$sql = 'SELECT * FROM pdo';
$prepare = $pdo->prepare($sql);
$prepare->execute();
$rows = $prepare->fetchAll();
?>
        
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenom</th>
            <th scope="col">Message</th>
            <th scope="col">Supprimer utilisateur</th>
        </tr>
    </thead>  
    <tbody>
        <?php foreach($rows as $row) : ?>
            <tr>
                <th scope="row"><?php echo $row ['id']?> </th>
                <th scope="row"><a href="modifpdo.php?id=<?php echo $row['id']?>"><?php echo $row ['nom']?></a> </th>
                <th scope="row"><?php echo $row ['prenom']?> </th>
                <th scope="row"><?php echo $row ['message']?> </th>
                <td scope="col">
                    <button class="btn btn-danger">
                        <a href="delpdo.php?id=<?php echo $row['id']?>" class="supprimer text-white">Supprimer</a>
                    </button>
                </td>
            </tr>
        <?php endforeach ; ?> 
    </tbody> 
</table>