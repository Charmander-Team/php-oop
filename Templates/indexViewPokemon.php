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
                <td><a href="/?action=voir&id=<?php echo $pokemon->getId(); ?>"><?php echo $pokemon->getName(); ?></a></td>
                <td><?php echo $pokemon->getLocation(); ?></td>
                <td><?php echo $pokemon->getType(); ?></td>
                <td><?php echo $pokemon->getHp(); ?></td>
                <td><?php echo $pokemon->getHasEvolve(); ?></td>
                <td><img src="<?php echo $pokemon->getImage(); ?>" width="100" alt=""></td>
                <!--<td><a href="/?page=allPokemons/?action=update&id=<?php /*echo $pokemon->getId(); */?>">Update</a></td>-->
                <td><a href="/?page=allPokemons/?action=delete&id=<?php echo $pokemon->getId(); ?>">Delete</a></td>
            </tr>

        <?php endforeach; ?>

</table>

<form class="form" method="POST">

    <div class="form-group">
        <label for="type" class="form-label">Type:</label>
        <select name="type" id="type">
            <option value="" disabled>--Select type--</option>
            <option value="fire">Fire</option>
            <option value="water">Water</option>
            <option value="lightning">Lightning</option>
        </select>
    </div>

    <button class="btn btn-primary">Submit</button>

    <br>
    <?php if (!empty($_POST)) { ?>
        <div><?php echo strtoupper($_POST['type']) ?></div>

    <?php var_dump($pokemons = $this->manager->getListByType($_POST['type']));
    }
    ?>
</form>

<!--<a href="http://localhost/projets/php-oop/public/index.php/?page=addPokemon">Ajouter un Pokemon</a>
<a href="http://localhost/projets/php-oop/public/index.php/?page=blog">Blog</a>
<a href="http://localhost/projets/php-oop/public/index.php/?page=products">Produits</a>-->

