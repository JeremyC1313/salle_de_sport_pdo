<?php require_once "fonction.php" ; ?>
    
    <?php if ($name_url[2] == "index.php") : ?>
    <section class="contenaire bg-dark mt-10">
        <div class="text-center mb-5 text-white">
            <h3>STUDIO SPORT & COACHING, NOS PARTENAIRES</h3>
            <hr style="border-bottom: 3px solid #DAA520; border-radius: 3px;"></hr>
        </div>
        <div class="text-center text-white">
            <p>En temps que membre du studio sport & coaching, vous bénéficierez dans ces établissement d'avantages exclusifs. Cliquez ici pour en savoir plus.</p>
        </div>
        <div class="text-center">
            <img src="./images/partenaires/mini.png" alt="logo partenaires">
            <img src="./images/partenaires/massage.png" alt="logo partenaires">
            <img src="./images/partenaires/tellechea.png" alt="logo partenaires">
            <img src="./images/partenaires/ocean.png" alt="logo partenaires">
            <img src="./images/partenaires/decathlon.png" alt="logo partenaires">
        </div>
        <?php endif ; ?>
        <?php if ($name_url[2] == "presentation.php") : ?>
        <div class="contenaire mt-10">
            <div class="text-center mb-5">
                <h3>LES ACTIVITES PROPOSEES AU STUDIO SPORT BIARRITZ</h3>
                <hr style="border-bottom: 3px solid #DAA520; border-radius: 3px;"></hr>
            </div>
        </div> 
        <?php endif ; ?>
        <?php if ($name_url[2] == "contact.php") : ?>
        <div class="container-fluid mt-5 p-0 google">
            <iframe class="map w-100" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11582.41246137468!2d-1.5406774!3d43.4688824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc114f378a7ebcc2!2sLe%20Studio!5e0!3m2!1sfr!2sfr!4v1658132842269!5m2!1sfr!2sfr" style="height: 500px;" allowfullscreen></iframe>
        </div>
        <?php endif ; ?>
    </section>

<?php 
    echo add_img("image-fluid", "./images/coach/coach_");
?>

<footer class="bg-dark text-center pt-10">
        <div class="container">
            <div class="row">
                <div class="col">
                    <ul class=" logo-footer text-white d-flex justify-content-start align-items-center">
                        <li class="list-unstyled d-flex align-items-center">
                            <img src="./images/logo_footer.png" alt="image de notre logo">
                            <h5 class="text-uppercase"> A PROPOS</h5>
                        </li>
                    </ul>
                    <ul class="list-unstyled mb-0 text-left">
                        <li class="text-white">2018 © Studio Sport Biarrytz</li>
                        <li class="text-white">Salle de sport, de fitness et de crossfit</li>
                        <li class="text-white">à Biarrytz Pays Basques.</li>
                        <li class="text-white">RCS : 000 000 000</li>
                        <li>
                            <a href="file:///C:/Users/utilisateur/Desktop/Maquette%20site%20sport/404.html" class="text-white">Mentions Légales</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h5 class="text-uppercase mb-0 text-white text-left">STUDIO SPORT CORPORATE</h5>
                    <ul class="list-unstyled text-left">
                        <?php echo add_item("", "nav-link", "404", "___Studio Center : créer votre studio") ; ?>
                        <?php echo add_item("", "nav-link", "404", "___Offres spéciales C.E.") ; ?>
                        <?php echo add_item("", "nav-link", "404", "___Devenir partenaire") ; ?>
                    </ul>
                </div>
                <div class="col">
                    <h5 class="text-uppercase text-white">FITNESS, CROSSFIT ET TRAINING AU PAYS BASQUE</h5>
                    <p class="text-white">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iste atque ea quis
                        molestias. Fugiat pariatur maxime quis culpa corporis vitae repudiandae aliquam
                        voluptatem veniam, est atque cumque eum delectus sint!
                    </p>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center bg-noir align-items-center text-white"><p>Un site crée par<br>
            <strong>L'AGENCE 364 COM'</strong></p>
            <img width="70" height="30" src="./images/364.png" alt="Logo footer">
        </div>
    </footer>
    <!--FIN DU FOOTER-->
    <script src="_old.js"></script>
</body>
</html>