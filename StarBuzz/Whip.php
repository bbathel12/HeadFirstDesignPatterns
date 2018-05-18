<?

namespace StarBuzz;

class Whip extends Beverage{

    public $beverage;
    public function __construct(Beverage $beverage){
        $this->beverage = $beverage;
        $this->description = "Whip";
    }

    public function getDescription():string{
        return $this->beverage->getDescription() . "," . $this->description;
    }

    public function cost():float{
        return $this->beverage->cost() + .10;
    }
}
