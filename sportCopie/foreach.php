<?php 
    $link = mysqli_connect("localhost", "root", "", "user", 3306);
    $requette = "SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user` WHERE nom LIKE '%t' ";  
    $resultats = mysqli_query($link, $requette);             
?>
        
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">coordonnée : </th>
        </tr>
    </thead> 
    <?php foreach($resultats as $resultat) : ?>
        <?php var_dump($resultat)?>;
        <tbody>
            <tr>
                <th scope="row"><?php echo $resultat ["nom_modifier"]?></th>
            </tr>
        </tbody>
    <?php endforeach ; ?>
</table>  
<!-- LIKE '%t'= qui se termine par t                                         $requette = "SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user` WHERE nom LIKE '%t' "; -->
<!-- LIMIT 10 = récupérer seulement les 10 premiers résultats d’une table    $requette = "SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user` LIMIT 10"; -->
<!-- BETWEEN = affiche les élément compris entre 2 et 4                      $requette = "SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user` WHERE id BETWEEN 2 AND 4"; -->
<!-- $requette = "SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user` WHERE prenom IN ( 'jeremy', 'thomas', 'leonie' )";  IN  -->  
<!-- $requette = "SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user` WHERE nom = 'camuzet' OR prenom = 'jeremy'";  OR -->
<!-- $requette ="SELECT CONCAT(nom, ' ' ,prenom, ' ' ,email, ' ' ,message) AS nom_modifier FROM `user`" CONCAT -->
<!-- $requette = "SELECT nom AS nom_modifier, prenom AS prenom_modifier FROM `user`"; <-- AS POUR REMPLACER UN MOT PAR UN AUTRE (EXEMPLE NOM SERA REMPLACER PAR NOM_MODIFER) AS  -->






<!-- on veut faire afficher les 3 derniers utilisateurs donc on veut afficher le nom , date d'inscription et le prenom

    $link = mysqli_connect("localhost", "root", "", "user", 3306);
    $requette = "SELECT * FROM `blog` ORDER BY date DESC LIMIT 3";
    $resultats = mysqli_query($link, $requette);        
-->