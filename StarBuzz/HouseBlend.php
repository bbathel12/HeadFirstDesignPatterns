<?

namespace StarBuzz;

class HouseBlend extends Beverage{

    public function __construct(){
        $this->description = "House Blend";
    }

    public function cost():float{
        return .89;
    }
}
