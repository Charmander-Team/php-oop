<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div style="min-height: 40vh;" class="d-flex justify-content-center align-items-center">
    <h1>Bienvenu dans la boutique !</h1>
</div>

<div class="d-flex justify-content-center flex-wrap">
    <?php foreach ($produitManager->getProduits() as $value) { ?>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" style="width: 256px;" src="<?php echo $value->getImage() ?>" alt="produit">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value->getName() ?></h5>
                <p class="card-text"><?php echo $value->getDescription() ?></p>
                <h5 class="card-title"><?php echo $value->getPrix() ?> <img style="width: 30px;" src="https://static.miraheze.org/pokeclickerwiki/8/89/PokeCoin.png" alt="pokedollars"> </h5>
                <a href="#" class="btn btn-primary">Ajouter au panier</a>
            </div>
    </div>
    <?php } ?>
</div>
    
</body>
</html>