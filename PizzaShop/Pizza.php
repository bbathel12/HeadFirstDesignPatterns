<?

namespace PizzaShop;

abstract class Pizza{

    protected $name;//string
    protected $dough;//string
    protected $sauce;//string
    protected $toppings;// array

    public function prepare():void{
        $output =<<<_END
    \tpreparing {$this->name}
    \tTossing Dough...
    \tAdding Sauce...
    \tAdding Toppings
_END;
        foreach ($this->toppings as $topping ){
            $output .= "\n\t$topping";
        }        
        echo $output;
    }

    public function bake(){
        echo "\n\tBake for 25 minutes at 350";
    }
    
    public function cut(){
        echo "\n\tCutting into diagonal slices";
    }
    
    public function box(){
        echo "\n\tPlace Pizza in official pizza store box";
    }
    
    public function getName(){
        return $this->name;
    }
    
}

