<?php

namespace App\Model;

use Core\Model\Model;

class BlogModel extends Model
{
    protected $db;
    protected $table = "blog";

    public function create ($blog)
    {
        $statement = "INSERT INTO blog (title, text)
                     VALUES(:title, :text)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":title", $blog->getTitle());
        $prepare->bindValue(":text", $blog->getText());

        $prepare->execute();
    }

    public function update()
    {

    }
}
