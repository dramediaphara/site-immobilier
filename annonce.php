<?php
//code php
require_once("init.php");
require_once("haut_de_page.php");

?>
<form>
    <h2 class="col">Ajouter un Logement</h2>
    <div class="form row">
        <div class="form-group col-md-6">
            <label for="titre">Titre</label>
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
        <div class="form-group col-md-6">
            <label for="photo">Photo</label>
            <input type="text" class="form-control" name="photo" id="photo" placeholder="photo">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="chambre">Chambre</label>
            <select type="text" class="form-control" name="chambre" id="chambre">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="salon">Salon</label>
            <select type="text" class="form-control" name="salon" id="salon">
                <option></option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="toilette">Toilette</label>
            <select type="text" class="form-control" name="toilette" id="toilette">
                <option></option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
            </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="cuisine">Cuisine</label>
            <select type="text" class="form-control" name="cuisine" id="cuisine">
                <option></option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="jardin">Jardin</label>
            <select type="text" class="form-control" name="jardin" id="jardin">
                <option></option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
        <div class="form-group col-md-4">
            <label for="garage">Garage</label>
            <select type="text" class="form-control" name="garage" id="garage">
                <option></option>
                <option>1</option>
                <option>2</option>
            </select>
        </div>
    </div>
    <div class="forme row">
        <div class="form-group col-md-4">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" required="required" placeholder="veuillez mettre votre adresse">
        </div>
        <div class="form-groupe col-md-4">
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
        <div class="form-group col-md-4">
            <label for="cp">Code Postal</label>
            <input type="tel" class="form-control" name="cp" id="cp" required="required" placeholder="veuillez mettre votre code postal">
        </div>
    </div>
    <div class="form row">
        <div class="form-group col-md-4">
            <label for="surface">Surface</label>
            <input type="tel" class="form-control" name="surface" id="surface" required="required" placeholder="veuillez mettre la surface">
        </div>
        <div class="form-group col-md-4">
            <label for="prix">Prix</label>
            <input type="tel" class="form-control" name="prix" id="prix" required="required" placeholder="veuillez mettre le prix">
        </div>
        <div class="form-group col-md-4">
            <label for="type">Type</label>
            <select class="form-control" name="type" id="type" required="required" placehoder="veuillez choisir le type de logement">
                <option>Vente</option>
                <option>Location Saisonnier</option>
                <option>Location Annuelle</option>
                <option>Location Pour Mariage</option>
                <option>Location Pour Fetes</option>
                <option>Location Temporaire</option>
            </select>
        </div>
    </div>
    <div class="form-group col">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
</form>
<?php
// code php
require_once("bas_de_page.php")
?>