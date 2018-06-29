<?               
namespace Template;   
use Standard\PrettyPrints;
abstract class CaffieneBeverageWithHook{ 

    use PrettyPrints;   

    public final function PrepareRecipe(){  
        $this->boilWater();
        $this->brew();    
        $this->pourInCup();
        if($this->customerWantsCondiments()){  
            $this->addCondiments();           
        }                                    
    }

    public abstract function brew();       
    public abstract function addCondiments();
    public function boilWater(){            
        $this->pp("Boiling Water");        
    }

    public function pourInCup(){          
        $this->pp("Pouring into Cup");   
    }

    //protected function customerWantsCondiments(){
    //    return true;                            
    //}
}                             
