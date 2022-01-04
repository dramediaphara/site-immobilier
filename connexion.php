
<?php
    // code php
    require_once("init.php");
    require_once("haut_de_page.php")
?>

<form>
    <legend>Formulaire de Connexion</legend>
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
  <button type="submit" class="btn btn-primary">Envoyer</button>
</form>




<?php
  // code php
  require_once("bas_de_page.php")
?>