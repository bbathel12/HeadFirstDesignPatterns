<?

namespace Template;

use Standard\PrettyPrints;

abstract class CaffieneBeverage{

    public final function PrepareRecipe(){
        $this->boilWater();
        $this->brew();
        $this->pourInCup();
        $this->addCondiments();
    }

    public abstract function brew();
    public abstract function addCondiments();

    public function boilWater(){
        $this->pp("Boiling Water");
    }

    public function pourInCup(){
        $this->pp("Pouring into Cup");
    }
  
}  
  

