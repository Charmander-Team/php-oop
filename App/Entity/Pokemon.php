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

    /**
     * @param array $pokemons
     */
    public function hydrate (array $pokemons)
    {
        foreach ($pokemons as $key => $pokemon) {
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($pokemon);
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
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType(string $type): void
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     */
    public function setHp(int $hp): void
    {
        $this->hp = $hp;
    }

    /**
     * @return int
     */
    public function getHasEvolve(): int
    {
        return $this->hasEvolve;
    }

    /**
     * @param int $hasEvolve
     */
    public function setHasEvolve(int $hasEvolve): void
    {
        $this->hasEvolve = $hasEvolve;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
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
