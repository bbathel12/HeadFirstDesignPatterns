<?

namespace PizzaShop;

class CaliforniaPizzaStore extends PizzaStore{

    public function CreatePizza(string $type):pizza{
        switch($type){
        case "cheese":
            return new CaliforniaCheesePizza();
        case "pepperoni":
            return new CaliforniaPepperoniPizza();
        case "veggie":
            return new CaliforniaVeggiePizza();
        case "clam":
            return new CaliforniaClamPizza();
        }
    }
}
