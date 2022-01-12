<?php
//code php
require_once("init.php");

          if($_POST) {
             // echo "<pre>";
            // var_dump($_POST);
            // echo "</pre>";

            // photo
           // echo '<pre>';
           // var_dump($_FILES);
           // echo '<pre>';

            if(isset($_FILES) && !empty($_FILES["photo"]["name"])) {

                // nom de la photo
                $pictureName = $_FILES["photo"]["name"];
                // copier le chemin vers le serveur en BDD
                $pathPhotoDB = URL . "images/" . $pictureName;
                // echo $pathPhotoDB . "<br";
                // copier sur le serveur
                $pathFolder = RACINE_SITE . "images" . $pictureName;
                // echo $pathFolder;
                copy($_FILES["photo"]["tmp_name"], $pathFolder);
            }

           $count = $pdo->exec("INSERT INTO logement(titre,photo,chambre,salon,toilette,cuisine,jardin,garage,adresse,ville,cp,surface,prix,type,description) 
            VALUES(
                '$_POST[titre]',
                'photo',
                '$_POST[chambre]',
                '$_POST[salon]',
                '$_POST[toilette]',
                '$_POST[cuisine]',
                '$_POST[jardin]',
                '$_POST[garage]',
                '$_POST[adresse]',
                '$_POST[ville]',
                '$_POST[cp]',
                '$_POST[surface]',
                '$_POST[prix]',
                '$_POST[type]',
                '$_POST[description]'
            )");

            if($count > 0) {
                $countent = "<div class='alert alert-success' role='alert'>
                  Votre Logement a bien été inséré!
                </div>";
            }
          }
   

require_once("haut_de_page.php");

?>


<?php echo $countent ?>

<form method="POST" enctype="multipart/form-data">
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
            <div class="w-100"></div>
            <input type="file" name="photo">
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
    <div>
    <div class="form-group col-md-12">
        <label for="description">Description</label>
        <textarea class="form-control" name="description" id="description" rows="3"></textarea>
    </div>
    <div class="form-group col-md-2 ">
    <button type="submit" class="btn btn-primary">Envoyer</button>
    </div>
    </div>
</form>
<?php
// code php
require_once("bas_de_page.php")
?>