<?

namespace PizzaShop;

class ChicagoPizzaStore extends PizzaStore{

    public function CreatePizza(string $type):pizza{
        switch($type){
        case "cheese":
            return new ChicagoCheesePizza();
        case "pepperoni":
            return new ChicagoPepperoniPizza();
        case "veggie":
            return new ChicagoVeggiePizza();
        case "clam":
            return new ChicagoClamPizza();
        }
    }
}
