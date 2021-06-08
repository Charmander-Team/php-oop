<?php

namespace App\Entity;

class Pokemon {

    private $id;
    private $name;
    private $location;
    private $type;
    private $hp;
    private $hasEvolve;
    private $image;

    public function __construct()
    {
        $this->upperTitle = strtoupper($this->getName());
    }

    public function hydrate (array $pokemon)
    {
        foreach ($pokemon as $key => $value) {
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location): void
    {
        $this->location = $location;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * @param mixed $pv
     */
    public function setHp($hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return mixed
     */
    public function getHasEvolve()
    {
        return $this->hasEvolve;
    }

    /**
     * @param mixed $hasEvolve
     */
    public function setHasEvolve($hasEvolve): void
    {
        $this->hasEvolve = $hasEvolve;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getUpperTitle(): string
    {
        return $this->upperTitle;
    }

    /**
     * @param string $upperTitle
     */
    public function setUpperTitle(string $upperTitle): void
    {
        $this->upperTitle = $upperTitle;
    }


}
