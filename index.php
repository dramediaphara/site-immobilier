<?php
//code php
require_once("init.php");
require_once("haut_de_page.php");

?>
        <form>
            <h2 class="col">Ajouter un Logement</h2>
            <div class="form-group col">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre" id="titre" required="required" placeholder="veuillez mettre le tritre">
            </div>
            <div class="form-group col">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" name="adresse" id="adresse" required="required" placeholder="veuillez mettre votre adresse">
            </div>
            <div class="form-groupe col">
                <label for="ville">Ville</label>
                <select class="form-control" name="ville" id="ville" required="required" placeholder="veuillez choisir une ville">
                    <option>Dakar</option>
                    <option>Thiaroy</option>
                    <option>Keur Massar</option>
                    <option>Thies</option>
                    <option>Mbour</option>
                    <option>saly</option>
                    <option>Sedhiou</option>
                    <option>Ziguinchor</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="cp">Code Postal</label>
                <input type="tel" class="form-control" name="cp" id="cp" required="required" placeholder="veuillez mettre votre code postal">
            </div>
            <div class="form-group col">
                <label for="surface">Surface</label>
                <input type="tel" class="form-control" name="surface" id="surface" required="required" placeholder="veuillez mettre la surface">
            </div>
            <div class="form-group col">
                <label for="prix">Prix</label>
                <input type="tel" class="form-control" name="prix" id="prix" required="required" placeholder="veuillez mettre le prix">
            </div>
            <div class="form-group col">
                <label for="photo">Photo</label>
                <input type="text" class="form-control" name="photo" id="photo" placeholder="photo">
            </div>
            <div class="form-group col">
                <label for="type">Type</label>
                <select class="form-control" name="type" id="type" required="required" placehoder="veuillez choisir le type de logement">
                    <option>Maison</option>
                    <option>Maison Meublee</option>
                    <option>Villa</option>
                    <option>Villa Avec Piscine</option>
                    <option>Appartement</option>
                    <option>Appartemant Meuble</option>
                    <option>Studio</option>
                    <option>Studio Meuble</option>
                </select>
            </div>
            <div class="form-group col">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
            </FIeldset>
        </form>
    <?php
    // code php
    require_once("bas_de_page.php")
    ?>
  