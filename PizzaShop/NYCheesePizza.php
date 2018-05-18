<?

namespace PizzaShop;

class NYCheesePizza extends Pizza{

    public function __construct(){
        $this->name  = "New York Style Cheese Pizza";
        $this->dough = "Thin Crust";
        $this->sauce = "Marinara Sauce";

        $this->toppings[] = "Grated Reggiano Cheese";
    }
}
