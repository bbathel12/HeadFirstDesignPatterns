<?
namespace DuckSimulator;

class MiniDuckSimulator{
    public function main(){
        $mallard = new MallardDuck();
        $mallard->performQuack();
        $mallard->performFly();
    }
}
