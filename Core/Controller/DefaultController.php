<?php
namespace Core\Controller;

class DefaultController {

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

    public function getAll(string $path, $array )
    {
        $model = $this->manager->getList();
        $this->render($path, [$array => $model]);
    }
}
