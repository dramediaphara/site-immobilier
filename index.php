<?php
// code php
require_once("init.php");
require_once("haut_de_page.php");

?>

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselPiscine" data-slide-to="0" class="active"></li>
    <li data-target="#carouselPiscine2" data-slide-to="piscine2"></li>
    <li data-target="#carouselPiscine3" data-slide-to="piscine3"></li>
    <li data-target="#carouselTerasse" data-slide-to="terasse"></li>
    <li data-target="#carouselTerasse1" data-slide-to="terasse1"></li>
    <li data-target="#carouselTerasse2" data-slide-to="terasse2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/piscine.png" class="d-block w-100" alt="piscine">
      <div class="carousel-caption d-none d-md-block">
        <h5>Piscine</h5>
        <p>Une piscine privee avec de l'eau Turquoise.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/piscine2.png" class="d-block w-100" alt="piscine2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Piscine</h5>
        <p>Une piscine privee avec de l'eau Turquoise.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/piscine3.png" class="d-block w-100" alt="piscine3">
      <div class="carousel-caption d-none d-md-block">
        <h5>Piscine</h5>
        <p>Une piscine privee avec de l'eau Turquoise.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/terasse.png" class="d-block w-100" alt="terasse">
      <div class="carousel-caption d-none d-md-block">
        <h5>Terrasse</h5>
        <p>Une terrasse privee sans vis a vis avec une vue magnifique.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/terasse1.png" class="d-block w-100" alt="terasse1">
      <div class="carousel-caption d-none d-md-block">
        <h5>Terrasse</h5>
        <p>Une terrasse privee sans vis a vis avec une vue magnifique.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/terasse2.png" class="d-block w-100" alt="terasse2">
      <div class="carousel-caption d-none d-md-block">
        <h5>Terrasse</h5>
        <p>Une terrasse privee sans vis a vis avec une vue magnifique.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>

<div class="row row-cols-1 row-cols-md-4">
  <div class="col mb-4">
    <div class="card" style="width: 18rem;">
      <img src="images/entre1.png" class="card-img-top" alt="entre1">
      <div class="card-body">
        <h5 class="card-title">Entree</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card" style="width: 18rem;">
      <img src="images/façade1.png" class="card-img-top" alt="façade1">
      <div class="card-body">
        <h5 class="card-title">Facade</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>

  <div class="col mb-4">
    <div class="card" style="width: 18rem;">
      <img src="images/piscine1.png" class="card-img-top" alt="piscine1">
      <div class="card-body">
        <h5 class="card-title">Piscine</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
  <div class="col mb-4">
    <div class="card">
      <div class="card" style="width: 18rem;">
        <img src="images/saly1.png" class="card-img-top" alt="saly1">
        <div class="card-body">
          <h5 class="card-title">Chambre</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
    </div>
  </div>
</div>





<?php
// code php
require_once("bas_de_page.php")

?>