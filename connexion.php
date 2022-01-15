<?php
// code php
require_once("init.php");

if ($_POST) {

  $erreur = "";

  if(empty($_POST["email"])) {
    $erreur .= "<div class='alert alert-danger' role='alert'>
    Le email est obligatoire!
  </div>";
  }

  if(empty($_POST["mdp"])) {
    $erreur .= "<div class='alert alert-danger' role='alert'>
    Le mot de passe  est obligatoire!
  </div>";
  }

  $content .= $erreur;

  if (empty($erreur)) {

    $count = $pdo->exec("INSERT INTO connexion (email, mdp)
          VALUES(
            '$_POST[email]',
            '$_POST[mdp]'
          )");
    if ($count > 0) {
      $countent = "<div class='alert alert-success' role='alert'>
                      Votre Logement a bien été inséré!
                    </div>";
    }
  }
}


require_once("haut_de_page.php");
?>
<?php echo $countent ?>
<?php echo $erreur ?>

<form method="POST" enctype="multipart/form-data">
  <legend>Formulaire de Connexion</legend>
  <!--<div class="form-row">-->
  <div class="form-group col-md-12">
    <label for="email">Email</label>
    <input type="tel" class="form-control" name="email" id="email" placeholder="Veuillez mettre votre adresse email">
  </div>
  <div class="form-group col-md-12">
    <label for="mdp">Mot de Passe</label>
    <input type="text" class="form-control" name="mdp" id="ville" placeholder="Veuillez mettre votre mot de passe">
  </div>
  <!-- </div>
    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" required="required" placeholder="Veuillez mettre votre adresse email">
    <small id="email" class="form-text text-muted">Nous ne partagerons jamais votre email avec quelqu'un d'autre</small>
  </div>
  <div class="form-group">
    <label for="mp">Mot de Passe</label>
    <input type="mp" class="form-control" name="mp" id="mp" required="required" placeholder="Veuillez mettre votre mot de passe">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Enregistrer</label>
  </div>
-->
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>




<?php
// code php
require_once("bas_de_page.php")
?>