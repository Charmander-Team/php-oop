<?php
namespace App\Controller;

use App\Entity\Blog;
use App\Model\BlogModel;
use Core\Controller\DefaultController;

class ArticleController extends DefaultController{

    public function __construct()
    {
        $this->manager = new BlogModel;
    }

    public function addArticle(/* $data */)
    {
        if (!empty($_POST)) {
            $article = new Blog();
            $article->hydrate($_POST);
            $this->manager->create($article);
            $this->redirectToRoute("allArticles");
        }
        $this->render("addArticle");
    }

    public function getAllArticles ()
    {
        $blogModel = new BlogModel;
        $blogs = $blogModel->getList();

        $this->render("blogView", ["blogs" => $blogs]);
    }
}
