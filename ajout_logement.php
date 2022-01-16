<?php
//code php
require_once("init.php");

$erreur = "";

if ($_POST) {

    if (empty($_POST["titre"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Le titre est obligatoir!
      </div>";
    }

    if (empty($_POST["adresse"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        L'adresse est obligatoir!
      </div>";
    }

    if (empty($_POST["ville"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Le nom de la ville est obligatoir!
      </div>";
    }

    if (empty($_POST["cp"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Le code postale est obligatoir!
      </div>";
    }
    if (!is_numeric($_POST["cp"]) || strlen($_POST["cp"]) < 5) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Veuillez renseigner un code postal a 5 chiffres!
      </div>";
    }

    if (empty($_POST["surface"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        La surface est obligatoir!
      </div>";
    }
    if (!ctype_digit($_POST["surface"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Veuillez-renseigner un chiffre entier pour la surface!
      </div>";
    }

    if (empty($_POST["prix"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        le prix du logement est obligatoir!
      </div>";
    }
    if (!ctype_digit($_POST["prix"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Veuillez-renseigner un chiffre entier pour le prix!
      </div>";
    }

    if (empty($_POST["description"])) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        La description est obligatoir!
      </div>";
    }

    // echo "<pre>";
    // var_dump($_POST);
    // echo "</pre>";

    // photo
    // echo '<pre>';
    // var_dump($_FILES);
    // echo '<pre>';
    // extension
    $extensions = [".png", ".jpg", ".jpeg"];
    $extension = strrchr($_FILES["photo"]["name"], ".");

    if (!in_array($extension, $extensions)) {
        $erreur .= "<div class='alert alert-warning' role='alert'>
        Veuillez uploader un fichier au bon format (png, jpg, jpeg)!
      </div>";
    }

    $maxSize = 1000000;
    if ($_FILES["photo"]["size"] > $maxSize) {
        $erreur .= "<div class='alert alert-danger' role='alert'>
        Veuillez uploader une image moins lourde (1Mo max)
      </div>";
    }

    if (empty($erreur)) {

        if (isset($_FILES) && !empty($_FILES["photo"]["name"])) {

            // nom de la photo
            $pictureName = $_FILES["photo"]["name"];
            // copier le chemin vers le serveur en BDD
            $pathPhotoDB = URL . "images/" . $pictureName;
            // echo $pathPhotoDB . "<br";
            // copier sur le serveur
            $pathFolder = RACINE_SITE . "images/" . $pictureName;
            // echo $pathFolder;
            copy($_FILES["photo"]["tmp_name"], $pathFolder);
        }


        $count = $pdo->exec("INSERT INTO logement(titre, photo, chambre, salon, toilette, cuisine, jardin, garage, adresse, ville, cp, surface, prix, type, description) 
    VALUES(
        '$_POST[titre]',
        '$pathPhotoDB',
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

        if ($count > 0) {
            $countent = "<div class='alert alert-danger' role='alert'>
          Votre Logement a bien été inséré!
        </div>";
        }
    }
}

$titre = (!empty($_POST["titre"]) ? $_POST["titre"] : "");
$adresse = (!empty($_POST["adresse"]) ? $_POST["adresse"] : "");
$ville = (!empty($_POST["ville"]) ? $_POST["ville"] : "");
$cp = (!empty($_POST["cp"]) ? $_POST["cp"] : "");
$surface = (!empty($_POST["surface"]) ? $_POST["surface"] : "");
$prix = (!empty($_POST["prix"]) ? $_POST["prix"] : "");
$description = (!empty($_POST["description"]) ? $_POST["description"] : "");
$chambre = (!empty($_POST["chambre"]) ? $_POST["chambre"] : "");
$salon = (!empty($_POST["salon"]) ? $_POST["salon"] : "");
$toilette = (!empty($_POST["toilette"]) ? $_POST["toilette"] : "");
$cuisine = (!empty($_POST["cuisine"]) ? $_POST["cuisine"] : "");
$jardin = (!empty($_POST["jardin"]) ? $_POST["jardin"] : "");
$garage = (!empty($_POST["garage"]) ? $_POST["garage"] : "");


require_once("haut_de_page.php");

?>

<?php echo $erreur ?>


<form method="POST" enctype="multipart/form-data">
    <h2 class="col">Ajouter un Logement</h2>
    <div class="form row">
        <div class="form-group col-md-8">
            <label for="titre">Titre</label>
            <input type="text" class="form-control" name="titre" id="titre" required="required" placeholder="veuillez mettre le Titre" value="<?php echo $titre ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="photo">Photo</label>
            <div class="w-100"></div>
            <input type="file" name="photo">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="chambre">Chambre</label>
            <input type="text" class="form-control" name="chambre" id="chambre" value="<?php echo $chambre ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="salon">Salon</label>
            <input type="text" class="form-control" name="salon" id="salon" value="<?php echo $salon ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="toilette">Toilette</label>
            <input type="text" class="form-control" name="toilette" id="toilette" value="<?php echo $toilette ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-4">
            <label for="cuisine">Cuisine</label>
            <input type="text" class="form-control" name="cuisine" id="cuisine" value="<?php echo $cuisine ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="jardin">Jardin</label>
            <input type="text" class="form-control" name="jardin" id="jardin" value="<?php echo $jardin ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="garage">Garage</label>
            <input type="text" class="form-control" name="garage" id="garage" value="<?php echo $garage ?>">
        </div>
    </div>
    <div class="forme row">
        <div class="form-group col-md-4">
            <label for="adresse">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" required="required" placeholder="veuillez mettre votre adresse" value="<?php echo $adresse ?>">
        </div>
        <div class="form-groupe col-md-4">
            <label for="ville">Ville</label>
            <input class="form-control" name="ville" id="ville" required="required" placeholder="veuillez choisir une ville" value="<?php echo $ville ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="cp">Code Postal</label>
            <input type="tel" class="form-control" name="cp" id="cp" required="required" placeholder="veuillez mettre votre code postal" value="<?php echo $cp ?>">
        </div>
    </div>
    <div class="form row">
        <div class="form-group col-md-4">
            <label for="surface">Surface</label>
            <input type="tel" class="form-control" name="surface" id="surface" required="required" placeholder="veuillez mettre la surface" value="<?php echo $surface ?>">
        </div>
        <div class="form-group col-md-4">
            <label for="prix">Prix</label>
            <input type="tel" class="form-control" name="prix" id="prix" required="required" placeholder="veuillez mettre le prix" value="<?php echo $prix ?>">
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
            <textarea class="form-control" name="description" id="description" rows="3"><?php echo $description ?></textarea>
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