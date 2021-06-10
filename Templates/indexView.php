    <ul>
        <?php foreach ($pokemons as $pokemon): ?>
        <li> <?= $pokemon->getName() ?></li>
        <?php endforeach; ?>
    </ul>
<a href="http://localhost/projets/php-oop/public/index.php/?page=addPokemon">Ajouter un Pokemon</a>
<a href="http://localhost/projets/php-oop/public/index.php/?page=blog">Blog</a>
<a href="http://localhost/projets/php-oop/public/index.php/?page=products">Produits</a>

