<?php

namespace App\Manager;

use Vendor\Manager\Manager;

class UserManager extends Manager
{

    protected $db;
    protected $table = "user";

    public function create ($user)
    {
        $statement = "INSERT INTO user (username, password, admin)
                     VALUES(:username, :password, :admin)";

        $prepare = $this->db->prepare($statement);

        $prepare->bindValue(":username", $user->getUsername());
        $prepare->bindValue(":password", $user->getPassword());
        $prepare->bindValue(":admin", $user->getAdmin());

        $prepare->execute();
    }
    public function getOne()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
