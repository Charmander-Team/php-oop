<?php 

class Test extends ConnexionBDD {
    public $personneId;

    public function Ajouter(){
		$bindage["personneId"]=$this->personneId;
		
		$req="INSERT INTO test (personneId) VALUES (:personneId)";
		$exec = $this->connexion->prepare($req);
		$exec->execute($bindage);
	}
}


class Pokemon extends ConnexionBDD {
    
    public $id;
    public $name;
    public $location;    
    public $type;    
    public $pv;
    public $hasEvolve;
    public $image;

    // public function __construct(string $name, string $location,string $type, int $pv, bool $hasEvolve){
    //     $this->name =$name;
    //     $this->location=$location;
    //     $this->type=$type;
    //     $this->pv=$pv;
    //     $this->hasEvolve=$hasEvolve;
    // }
    

    public function Ajouter(){

		$bindage["id"]=$this->id;
		$bindage["name"]=$this->name;
		$bindage["location"]=$this->location;
		$bindage["type"]=$this->type;
		$bindage["pv"]=$this->pv;
		$bindage["hasEvolve"]=$this->hasEvolve;
		$bindage["image"]=$this->image;
		
		$req="INSERT INTO pokemon (id,name,location,type, pv, hasEvolve,image) VALUES (:id,:name, :location, :type, :pv, :hasEvolve,:image)";
		$exec = $this->connexion->prepare($req);
		$exec->execute($bindage);
	}
    


     /**
     * Get the value of id
     */
    public function getId(): int 
    {
        return $this->id;
    }



    /**
     * Set the value of id
     *
     * @param  string $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * Get the value of name
     */
    public function getName(): string 
    {
        return $this->name;
    }



    /**
     * Set the value of name
     *
     * @param  string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    
    /**
     * Get the value of location
     */
    public function getLocation(): string
    {
        return $this->location;
    }



    /**
     * Set the value of location
     *
     * @param  string $location
     */
    public function setLocation(string $location): void
    {
        $this->location = $location;
    }
    
    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }



    /**
     * Set the value of type
     *
     * @param  string $type
     */
    public function setType(string $type): void
    {
        $this->location = $type;
    }
    
    /**
     * Get the value of pv
     */
    public function getPv(): string
    {
        return $this->pv;
    }



    /**
     * Set the value of pv
     *
     * @param  string $pv
     */
    public function setPv(string $pv): void
    {
        $this->location = $pv;
    }
    
    /**
     * Get the value of hasEvolve
     */
    public function getHasEvolve(): bool
    {
        return $this->hasEvolve;
    }



    /**
     * Set the value of hasEvolve
     *
     * @param  string $hasEvolve
     */
    public function setHasEvolve(bool $hasEvolve): void
    {
        $this->location = $hasEvolve;
    }

    /**
     * Get the value of image
     */
    public function getImage(): string 
    {
        return $this->image;
    }



    /**
     * Set the value of image
     *
     * @param  string $image
     */
    public function setImage(string $image): void
    {
        $this->name = $image;
    }

}