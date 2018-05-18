<?

namespace PizzaShop;

class ChicagoCheesePizza extends Pizza{

    public function __construct(){
        $this->name = "Chicago Style Deep Dish Cheese Pizza";
        $this->dough = "Extra Thick Crust Dough";
        $this->sauce = "Plum Tomato Sauce";
        $this->toppings[] = "Shredded Mozzarella Cheese";
    }

    public function cut(){
        echo "\n\tCutting The Pizza into Square Slices";
    }
}
