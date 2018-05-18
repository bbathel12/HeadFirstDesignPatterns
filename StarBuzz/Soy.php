<?

namespace StarBuzz;

class Soy extends Beverage{

    public $beverage;
    public function __construct(Beverage $beverage){
        $this->description = "Soy ";
        $this->beverage = $beverage;
    }

    public function getDescription():string{
        return $this->beverage->getDescription() . "," . $this->description;
    }

    public function cost():float{
        $cost = $this->beverage->cost();
        switch($this->beverage->getSize()){
        case static::TALL:
            $cost += .10;
            break;
        case static::GRANDE:
            $cost += .15;
            break;
        case static::VENTI:
            $cost += .20;
            break;
        default:
        }
        return $cost;
    }
}
