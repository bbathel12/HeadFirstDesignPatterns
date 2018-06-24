<?

namespace Template;

use Standard\PrettyPrints;

class Tea{

    use PrettyPrints;

    public function prepareRecipe() {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon()    
    }



}
