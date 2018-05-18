<?

namespace PizzaShop;

class NewYorkPizzaStore extends PizzaStore{

    public function CreatePizza(string $type):pizza{
        switch($type){
        case "cheese":
            return new NYCheesePizza();
        case "pepperoni":
            return new NYPepperoniPizza();
        case "veggie":
            return new NYVeggiePizza();
        case "clam":
            return new NYClamPizza();
        }
    }
}
