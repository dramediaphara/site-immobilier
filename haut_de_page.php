<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>

</head>

<body>
    <!----------------------------------------------le debut du header----------------------------------------------------->
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">Accueil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="formulaire_inscription.php">Inscription</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="connexion.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="blog.php">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">A Propos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <nav class="navbar navbar-expand-lg ">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <a class="navbar-brand" href="#">Menu</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Offre
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" name="location saisonnier" id="location saisonnier">Location Saisonnier</a>
                        <a class="dropdown-item" href="#" name="location vente" id="location vente">Location Vente</a>
                        <a class="dropdown-item" href="#" name="location" id="location">Location</a>
                        <a class="dropdown-item" href="#" name="vente" id="vente">Vente</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Type de Logement
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" name="maison" id="maison">Maison</a>
                        <a class="dropdown-item" href="#" name="maison meublee" id="maison meublee">Maison Meublee</a>
                        <a class="dropdown-item" href="#" name="villa" id="villa">Villa</a>
                        <a class="dropdown-item" href="#" name="villa avec piscine" id="villa avec piscine">Villa Avec Piscine</a>
                        <a class="dropdown-item" href="#" name="appartement" id="appartement">Appartemant</a>
                        <a class="dropdown-item" href="#" name="appartement meuble" id="appartement meuble">Appartemant Meuble</a>
                        <a class="dropdown-item" href="#" name="studio" id="studio">Studios</a>
                        <a class="dropdown-item" href="#" name="studio meuble" id="studio meuble">Studios Meuble</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Ville
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" name="dakar" id="dakar">Dakar</a>
                        <a class="dropdown-item" href="#" name="thiaroy" id="thiaroy">Thiaroy</a>
                        <a class="dropdown-item" href="#" name="keur massar" id="keur massar">Keur Massar</a>
                        <a class="dropdown-item" href="#" name="thies" id="thies">Thies</a>
                        <a class="dropdown-item" href="#" name="mbour" id="mbour">Mbour</a>
                        <a class="dropdown-item" href="#" name="saly" id="saly">Saly</a>
                        <a class="dropdown-item" href="#" name="sedhiou" id="sedhiou">Sedhiou</a>
                        <a class="dropdown-item" href="#" name="ziguinchor" id="ziguinchor">Ziguinchor</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbardropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        Nos Agences
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" name="saly almady" id="saly almady">Saly Almady</a>
                        <a class="dropdown-item" href="#" name="keur issa" id="keur issa">Keur Issa</a>
                        <a class="dropdown-item" href="#" name="marsassoum" id="marsassoum">Marsassoum</a>
                    </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="recherche" placeholder="Recherche" aria-label="recherche">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Recherche</button>
            </form>
        </div>
    </nav>

    <!----------------------------------la fin du header------------------------------------------------>
    <div class="container mt-5">