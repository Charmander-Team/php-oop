<?php
namespace Core\Controller;

use App\Model\PokemonModel;

class DefaultController {
    public function __construct()
    {
        $this->manager = new PokemonModel;
    }

    public function render(string $path, array $param = [])
    {
        ob_start();
        extract($param);
        require ROOT."/Templates/$path.php";
        $content = ob_get_clean();
        require ROOT."/Templates/default.php";
    }

    public function redirectToRoute(string $path)
    {
        header("Location:index.php?page=$path");
    }

    public function home()
    {
        $this->render("home");
    }

    public function getAll(string $path, $arrayEntity )
    {
        $model = $this->manager->getList();
        $this->render($path, [$arrayEntity => $model]);
    }

    public function getEntityById(string $path, $id, $entity){
        $model = $this->manager->getOne($id);
        $this->render($path, [$entity => $model]);
    }
}
