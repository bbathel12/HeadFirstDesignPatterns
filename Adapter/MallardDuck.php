<?
namespace Adapter;

use PrettyPrints;

class MallardDuck implements Duck{

    use PrettyPrints;

    public function fly():void{
        $this->pp("Flying");
    }

    public function quack():void{
        $this->pp("Quack");
    }

}
