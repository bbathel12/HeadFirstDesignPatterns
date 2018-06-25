<?

namespace Template;

use Standard\PrettyPrints;

class Coffee extends CaffieneBeverage{

    use PrettyPrints;

    public function brew(){
        $this->pp("Pouring Coffee through Filter");
    }

    public function addCondiments(){
        $this->pp("Add Sugar and Milk");
    }


}
