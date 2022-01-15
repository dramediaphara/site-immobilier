<?php
// code php
require_once('init.php');

if ($_POST) {
    $count = $pdo->exec("INSERT INTO inscription (nom, prenom, email, mdp, adresse, ca, cp, telephone, civilite)
        VALUES(
            '$_POST[nom]',
            '$_POST[prenom]',
            '$_POST[email]',
            '$_POST[mdp]',
            '$_POST[adresse]',
            '$_POST[ca]',
            '$_POST[cp]',
            '$_POST[telephone]',
            '$_POST[civilite]'
        )");

    if ($count > 0) {
        $countent = "<div class='alert alert-success' role='alert'>
              Votre Logement a bien été inséré!
            </div>";
    }
}

require_once('haut_de_page.php');

?>

<?php echo $countent ?>

<form method="POST" enctype="multipart/form-data">
    <legend>Formulaire d'inscription</legend>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required="required" placeholder="Veuillez mettre votre nom">
        </div>
        <div class="form-group col-md-6">
            <label for="prenom">Prenom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" required="required" placeholder="Veuillez mettre votre prenom">
        </div>
        <div class="form-group col-md-6">
            <label for="Email">Email</label>
            <input type="email" class="form-control" name="email" id="email" required="required" placehoder="Veuillez mettre votre email">
        </div>
        <div class="form-group col-md-6">
            <label for="mdp">Mot de Passe</label>
            <input type="mp" class="form-control" name="mdp" id="mdp" required="required" placeholder="Veuillez mettre votre mot de passe">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" required="required" placeholder="Veuillez mettre votre adresse">
        </div>
        <div class="form-group col-md-6">
            <label for="ca">Complement Adresse</label>
            <input type="text" class="form-control" name="ca" id="ca" placeholder="Apartment, studio, maison">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="cp">Code Postal</label>
            <input type="tel" class="form-control" name="cp" id="cp" required="required" placeholder="Veuillez mettre votre code postal">
        </div>
        <div class="form-group col-md-6">
            <label for="ville">Ville</label>
            <input type="text" class="form-control" name="ville" id="ville" required="required" placeholder="Veuillez mettre la ville">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="telephone">Telephone</label>
            <input type="text" class="form-control" name="telephone" id="telephone" required="required" placeholder="Veuillez mettre votre numero de telephone">
        </div>
        <div class="form-group col-md-6">
            <label for="civilite">Sexe</label>
            <select class="form-control" name="civilite" id="civilite" required="required" placeholder="Sexe">
                <option>Homme</option>
                <option>Femme</option>
            </select>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>

</form>





<?php
// code php
require_once("bas_de_page.php");

?>