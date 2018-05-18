<?

namespace StarBuzz;

class SteamedMilk extends Beverage{

    public $beverage;
    public function __construct(Beverage $beverage){
        $this->description = "Steamed Milk";
        $this->beverage = $beverage;
    }

    public function getDescription():string{
        return $this->beverage->getDescription() . "," . $this->description;
    }

    public function cost():float{
        return $this->beverage->cost() + .10;
    }
}
