<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href= "fond.css"></link>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>TABLEAU D'UN UTILISATEUR</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">Ajout D'un Utilisateur</h1>
        <form class="form_user mt-5 text-center" method="POST" action="ajout_verif.php">
            <div class="form-group col-md-4 mx-auto">
                <label class="font-weight-bold" for="email">Email</label>
                <input type="email" name="email" placeholder="Email" class="form-control" value="">
            </div>
            <div class="form-group col-md-4 mx-auto">
                <label class="font-weight-bold" for="password">Mot de passe</label>
                <input type="password" name="password" placeholder="Password" class="form-control" value="">
            </div>
            <div class="form-group">
                <input type="submit" value="Envoyer" class="btn btn-success font-weight-bold">
            </div>
        </form>
    </div>
</body>
</html>