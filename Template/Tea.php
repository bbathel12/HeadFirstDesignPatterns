<?

namespace Template;

use Standard\PrettyPrints;

class Tea extends CaffieneBeverage{

    use PrettyPrints;


    public function brew(){
        $this->pp("Steeping The Tea");
    }

    public function addCondiments(){
        $this->pp("Add Lemon");
    }
}

