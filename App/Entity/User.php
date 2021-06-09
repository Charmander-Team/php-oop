<?php

namespace App\Entity;

class User {

    // The whole team does not have php at least 7.4
    private /*int*/ $id;
    private /*string*/ $username;
    private /*string*/ $password;
    private /*int*/ $admin;

/*    public function __construct()
    {
        $this->upperTitle = strtoupper($this->getName());
    }*/

    /**
     * @param array $users
     */
    public function hydrate (array $users)
    {
        foreach ($users as $key => $user) {
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($user);
            }
        }
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * @param mixed $admin
     */
    public function setAdmin($admin): void
    {
        $this->admin = $admin;
    }

}
