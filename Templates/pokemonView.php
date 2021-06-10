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

<div class="container align-items-center" style="width: 80wh; height: 80vh;">
    <div class="card mt-4" style="width: 50%;">
    <img class="card-img-top" src="<?= $img; ?>" width="300px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 2rem; font-weight: bold;">Id: <?= $id; ?>  |  <?= $name; ?></h5>
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item" style="font-size: 1.4rem;">From: <?= $location; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Type: <?= $type; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Hp: <?= $hp; ?></li>
        <li class="list-group-item" style="font-size: 1.4rem;">Has evolve: <?= $hasEvolveYn = $hasEvolve ? "Yes" :  "No"; ?></li>
    </ul>
    <div class="card-body">
        <a href="/php-oop/public/index.php/?page=allPokemons" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Back</a>
        <a href="" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Book</a>
    </div>
    </div>
</div>