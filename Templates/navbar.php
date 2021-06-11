<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/index.php/?page=home">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Pokebola-pokeball-png-0.png" width="50px" alt="">
      </a>
    </li>
      <li class="nav-item">
          <a class="nav-link pt-4" href="/index.php/?page=allPokemons">
              List Pokemons
          </a>
      </li>
    <li class="nav-item">
      <a class="nav-link pt-4" href="/index.php?page=addPokemon">
          Add a Pokemon
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link pt-4" href="/index.php/?page=blog">
          Blog
      </a>
    </li>
    <?php if(!isset($_SESSION["connexion"])) { ?>
    <li class="nav-item">
      <a class="nav-link pt-4" href="/index.php/?page=connexion">
          Connexion
      </a>
    </li>
    <?php } else { ?>
      <li class="nav-item">
      <a class="nav-link pt-4" href="/index.php/?page=deconnexion">
          Deconnexion
      </a>
    </li>
    <?php } ?>
  </ul>
</nav>
