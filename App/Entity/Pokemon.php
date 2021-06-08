<?php

namespace App\Entity;

class Pokemon {
    
    private $name;
    private $location;
    private $type;
    private $pv;
    private $hasEvolve;

    /**
     * Pokemon constructor.
     * @param string $name
     * @param string $location
     * @param string $type
     * @param int $pv
     * @param bool $hasEvolve
     */
    public function __construct() {

    }

    public function hydrate(array $pokemon){
        foreach($pokemon as $key => $value){
            $method = "set". ucfirst($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name)
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
    public function setType(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getPv(): int
    {
        return $this->pv;
    }

    /**
     * @param int $pv
     */
    public function setPv(int $pv): void
    {
        $this->pv = $pv;
    }

    /**
     * @return bool
     */
    public function isHasEvolve(): bool
    {
        return $this->hasEvolve;
    }

    /**
     * @param bool $hasEvolve
     */
    public function setHasEvolve(bool $hasEvolve): void
    {
        $this->hasEvolve = $hasEvolve;
    }

}
