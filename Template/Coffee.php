<?

namespace Template;

use Standard/PrettyPrints;

class Coffee{

    use PrettyPrints;

    public function PrepareRecipe():void{
        $this->boilWater();
        $this->brewCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function boilWater(){
        $this->pp("Boiling Water");
    }

    public function brewCOffeeGrinds(){
        $this->pp("Pouring Coffee through Filter");
    }

    public function pourInCup(){
        $this->pp("Pouring into Cup");
    }

    public function addSugarAndMilk(){
        $this->pp("Add Sugar and Milk");
    }


}
