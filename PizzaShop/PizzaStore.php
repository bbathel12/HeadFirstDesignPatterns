<?

namespace PizzaShop;

abstract class PizzaStore{
    public $factory;

    public function orderPizza(string $type){
        
        $pizza = $this->CreatePizza($type);

        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();
        return $pizza;
    }

    abstract protected function CreatePizza(string $type):pizza;

}
