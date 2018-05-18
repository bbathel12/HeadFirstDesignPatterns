<?

namespace StarBuzz;

abstract class Beverage{

    public const TALL = 1;
    public const GRANDE = 2;
    public const VENTI = 3;

    protected $size;

    public $description = "UnKnown Beverage";

    public function getDescription() : String{
        return $this->description;
    }

    public function getSize(){
        return $this->size;
    }
    
    public function setSize($size){
        $this->size = $size;
    }

    abstract public function cost():float;

}
