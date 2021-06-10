<table border="1">

    <td><strong>ID</strong></td>
    <td><strong>Name</strong></td>
    <td><strong>Location</strong></td>
    <td><strong>Type</strong></td>
    <td><strong>HP</strong></td>
    <td><strong>Evolution</strong></td>
    <td><strong>Image</strong></td>
    <td><strong>Action</strong></td>

        <?php foreach ($pokemons as $pokemon): ?>

            <tr>
                <td><?php echo $pokemon->getId(); ?></td>
                <td><a href="/php-oop/public/index.php/?action=voir&id=<?php echo $pokemon->getId(); ?>"><?php echo $pokemon->getName(); ?></a></td>
                <td><?php echo $pokemon->getLocation(); ?></td>
                <td><?php echo $pokemon->getType(); ?></td>
                <td><?php echo $pokemon->getHp(); ?></td>
                <td><?php echo $pokemon->getHasEvolve(); ?></td>
                <td><img src="<?php echo $pokemon->getImage(); ?>" width="100" alt=""></td>
                <td><a href="/php-oop/public/index.php/?page=allPokemons/?action=delete&id=<?php echo $pokemon->getId(); ?>">Delete</a></td>
            </tr>

        <?php endforeach; ?>

</table>

<!--<table border="1">
    <?php
/**
 * A METTRE EN PLACE VENDREDI MATIN
 */
/*    if(!empty($_GET) && $_GET["action"]==="voir"){
        foreach ($pokemonModel->getOne($_GET["id"]) as $value){ */?>
            <tr>
                <td><?php /*echo $value->getId(); */?></td>
                <td><a href="index.php?id=<?php /*echo $value->getId(); */?>"><?php /*echo $value->getName(); */?></a></td>
                <td><?php /*echo $value->getLocation(); */?></td>
                <td><?php /*echo $value->getType(); */?></td>
                <td><?php /*echo $value->getHp(); */?></td>
                <td><?php /*echo $value->getHasEvolve(); */?></td>
                <td><?php /*echo $value->getImage(); */?></td>
            </tr>
        <?php /*}
    }*/?>
</table>
?>-->
<br><br><br>
<?php
include('filterPokemonByType.php')
?>

<?php if (!empty($_POST)) { ?>
    <div><?php echo strtoupper($_POST['type']) ?></div>

    <?php var_dump($pokemons = $this->manager->getListByType($_POST['type']));
}
?>

<!--<a href="http://localhost/projets/php-oop/public/index.php/?page=addPokemon">Ajouter un Pokemon</a>
<a href="http://localhost/projets/php-oop/public/index.php/?page=blog">Blog</a>
<a href="http://localhost/projets/php-oop/public/index.php/?page=products">Produits</a>-->

