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
    
    <div class="row pt-5">
      <div class="col-8">
      <div class="container align-items-center text-center" style="width: 80wh; height: 80vh;">
    <div class="card mt-4" style="width: 30%;">
    <img class="card-img-top" src="<?= $img; ?>" width="230px" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title" style="font-size: 2rem; font-weight: bold;"><?= $name; ?></h5>
    </div>

    </div>
    </div>
      </div>
      <div class="col-3">
      <form class="container text-center form" style="color:white" method="POST">
        <div class="row mb-4">
          <div class="col">
          <input type="hidden" value="<?= $id ?>" name="id">
            <div class="form-outline">
            <label for="name" class="form-label">Name:</label>
                  <input type="text" class="form-control" name="name" id="name" value="<?= $name ?>">
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
            <label for="location" class="form-label">Location:</label>
                  <input type="text" class="form-control" name="location" id="location" value="<?= $location ?>">
            </div>
          </div>
        </div>
        <div class="form-outline mb-4">
        <label for="hp" class="form-label">HP:</label>
                  <input type="number" class="form-control" name="hp" id="hp" min="0" value="<?= $hp ?>" step="10">
        </div>

        <div class="form-group">
                  <label for="type" class="form-label">Type:</label>
                  <select name="type" id="type">
                      <option value="" disabled>--Select type--</option>
                      <option value="fire">Fire</option>
                      <option value="water">Water</option>
                      <option value="lightning">Lightning</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="hasEvolve" class="form-label">HasEvolve:</label>
                  <input type="checkbox" class="form-control" name="hasEvolve" id="hasEvolve">
              </div>
              <div class="form-group">
                  <label for="image" class="form-label">Image URL (.png):</label>
                  <input type="url" class="form-control" name="image" id="image" pattern="https://.*.png" value="<?= $img ?>">
              </div>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Modifier</button>
</form>
      </div>
    </div>

