<?

namespace Template;

use Standard\PrettyPrints;
use Standard\GetUserInput;

class CoffeeWithHook extends CaffieneBeverageWithHook{

    use PrettyPrints, GetUserInput;

    public function brew(){
        $this->pp("Pouring Coffee through Filter");
    }

    public function addCondiments(){
        $this->pp("Add Sugar and Milk");
    }

    protected function customerWantsCondiments(){
        $answer = $this->getUserInput("Would You Like Sugar and milk:");

        if($answer === 'yes'){
            return true;
        }else{
            return false;
        }
    }


}
