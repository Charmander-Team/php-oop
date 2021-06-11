<?php

namespace App\Model;

use Core\Model\Model;

class UserModel extends Model
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

    public function checkUser($username,$password)
    {
        $statement = "SELECT * FROM user WHERE username=:username AND password=:password";
        $prepare = $this->db->prepare($statement);
        $prepare->bindValue(":username", $username);
        $prepare->bindValue(":password", $password);
        $prepare->execute();
        $result= $prepare->fetchAll(\PDO::FETCH_CLASS, "App\Entity\\".ucfirst($this->table));

        //$user = new User;
        foreach($result as $value){
            return 
             !is_null($value->getId()) 
            && 
            $value->getAdmin()
            === "1" ? true : false;
        }
        //return $result->getId() > 0 && $result->getAdmin()=== 1 ? true : false; 
        //return $result; 
    }

    public function update()
    {

    }


}
