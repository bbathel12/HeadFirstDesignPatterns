<?
namespace PizzaShop;

class PizzaTestDrive {

    public function main(){

        $chiStore = new ChicagoPizzaStore();
        $nyStore = new NewYorkPizzaStore();

        $pizza1  = $chiStore->orderPizza("cheese");
        echo "\n\tEthan ordered a {$pizza1->getName()} \n\n";

        $pizza2 = $nyStore->orderPizza("cheese");
        echo "\n\tJoel ordered a {$pizza2->getName()} \n\n";
    }
}
