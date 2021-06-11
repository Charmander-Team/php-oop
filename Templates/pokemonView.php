<?php 
    // var_dump($pokemon);

    // Récupération des propriétés et stockage dans des variables
    $id = $pokemon[0]->getId();
    $name = $pokemon[0]->getName();
    $location = $pokemon[0]->getLocation();
    $type = $pokemon[0]->getType();
    $hp = $pokemon[0]->getHp();
    $hasEvolve = $pokemon[0]->getHasEvolve();
    $img =  $pokemon[0]->getImage();
    ?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Réservation</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Votre réservation a bien été prise en compte
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<div class="container align-items-center text-center" style="width: 80wh; height: 80vh;">
    <div class="card mt-4" style="width: 30%;">
    <img class="card-img-top" src="<?= $img; ?>" width="230px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 2rem; font-weight: bold;"><?= $name; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="font-size: 1.4rem;">From: <?= $location; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Type: <?= $type; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Hp: <?= $hp; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Has evolve: <?= $hasEvolveYn = $hasEvolve ? "Yes" :  "No"; ?></li>
    </ul>
    <div class="card-body">
        <a href="/php-oop/public/index.php/?page=allPokemons" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
        <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true" data-toggle="modal" data-target="#exampleModal">Book</a>
    </div>
    </div>
</div>