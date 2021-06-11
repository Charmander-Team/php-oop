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
                <td><a href="/php-oop/public/index.php/?page=pokemonView&id=<?php echo $pokemon->getId(); ?>"><?php echo $pokemon->getName(); ?></a></td>
                <td><?php echo $pokemon->getLocation(); ?></td>
                <td><?php echo $pokemon->getType(); ?></td>
                <td><?php echo $pokemon->getHp(); ?></td>
                <td><?php echo $pokemon->getHasEvolve(); ?></td>
                <td><img src="<?php echo $pokemon->getImage(); ?>" width="100" alt=""></td>
                <td><a href="/php-oop/public/index.php/?page=delete&id=<?php echo $pokemon->getId(); ?>">Delete</a></td>
            </tr>

        <?php endforeach; ?>

</table>

<br><br><br>

<?php
include('filterPokemonByType.php')
?>

<?php if (!empty($_POST)) { ?>
    <div><strong><?php echo strtoupper($_POST['type']) ?></strong></div>

    <?php $pokemons = $this->manager->getListByType($_POST['type']);?>

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
                <td><a href="/php-oop/public/index.php/?page=pokemonView&id=<?php echo $pokemon->getId(); ?>"><?php echo $pokemon->getName(); ?></a></td>
                <td><?php echo $pokemon->getLocation(); ?></td>
                <td><?php echo $pokemon->getType(); ?></td>
                <td><?php echo $pokemon->getHp(); ?></td>
                <td><?php echo $pokemon->getHasEvolve(); ?></td>
                <td><img src="<?php echo $pokemon->getImage(); ?>" width="100" alt=""></td>
                <td><a href="/php-oop/public/index.php/?page=delete&id=<?php echo $pokemon->getId(); ?>">Delete</a></td>
            </tr>

        <?php endforeach; ?>

    </table>

<?php } ?>

