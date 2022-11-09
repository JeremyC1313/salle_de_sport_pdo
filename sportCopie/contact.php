<?php $title = "Page Contact" ; ?>
<?php require_once "header.php" ; ?>

    <section class="container">
        <div class="row">
            <div class="col-4 coordonnee">
                <h3 class="text-center mt-5 mb-0">NOS COORDONNÉES</h3>
                <hr style="border-bottom: 3px solid #daa520; border-radius: 3px" class="m-3"/>
                <ul class="list-unstyled ml-5">
                    <li class="font-weight-bold">Studio sport & coaching</li>
                    <li>01 Allée Marie Polizer</li>
                    <li class="pb-5">64200 Biarrytz</li>
                    <li class="font-weight-bold">Téléphone</li>
                    <li class="pb-5">
                        <a href="tel:+49.157.0156">05 59 47 84 18</a>
                    </li>
                    <li class="font-weight-bold">Horaires</li>
                    <li>Du Lundi au Vendredi</li>
                    <li>De 8h à 14h, de 16h à 21h</li>
                    <li>Le Samedi</li>
                    <li class="pb-5">de 10h à 13h</li>
                    <li class="font-weight-bold">Email</li>
                    <li>Contact (at)
                        <a href="mailto:nowhere@mozilla.org">studiobiarrytz.com</a>
                    </li>
                    <li>Ou via ce formulaire</li>
                </ul>
          </div>
            <div class="col-8 coordonnee">
                <h3 class="title-trainning mt-5 mb-3">FORMULAIRE DE CONTACT</h3>
            
            
                <?php if (isset($_GET["add"]) && $_GET["add"] == 1) : ?>
                    <div class="alert alert-success">Formulaire envoyé avec success.</div>
                    <?php elseif (isset($_GET["add"]) &&  $_GET["add"] == 0) :  ?>
                    <div class="alert alert-danger">Formulaire non envoyé.</div>
                <?php endif ; ?> 

                <hr style="border-bottom: 3px solid #daa520; border-radius: 3px" class="m-0 mb-5"/>
                <form method="POST" action="verif_contact.php" id="myForm">
                    <div class="row mb-4">
                        <div class="col-md-5">
                            <div class="form-outline">
                                <input type="text" name="nom" id="nom" class="form-control bg-light" placeholder="VOTRE NOM"/>
                                <span id="errorName"></span>
                                <label class="form-label" for="nom"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" name="prenom" id="prenom" class="form-control bg-light" placeholder="VOTRE PRENOM"/>
                                <span id="errorFirstName"></span>
                                <label class="form-label" for="prenom"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-outline mb-4">
                                <input type="email" name="email" id="email" class="form-control bg-light" placeholder="VOTRE EMAIL"/>
                                <span id="errorEmail"></span>
                                <label class="form-label" for="email"></label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline mb-4">
                                <input type="number" name="number" id="number" class="form-control bg-light" placeholder="VOTRE TELEPHONE"/>
                                <span id="errorTel"></span>
                                <label class="form-label" for="number"></label>
                            </div>
                        </div>
                    </div>
                    <div class="form-outline mb-4">
                        <input type="text" name="sujet" id="sujet" class="form-control bg-light" placeholder="SUJET"/>
                        <label class="form-label" for="sujet"></label>
                    </div>
                    <div class="form-outline mb-4">
                        <textarea class="form-control bg-light" name="message" id="form6Example7" rows="4" placeholder="MESSAGE"></textarea>
                        <label class="form-label" for="form6Example7"></label>
                    </div>
                    <input type="submit" value=" Envoyer" class="btn text-white btn-block mb-4 btn-1"/>
                </form>
            </div>
        </div>
    </section>
<?php require_once "footer.php" ; ?>
