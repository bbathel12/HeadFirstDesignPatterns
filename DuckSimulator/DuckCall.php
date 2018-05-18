<?
namespace DuckSimulator;

class DuckCall{
    protected $quackBehavior;
    public function __construct(){
        $this->quackBehavior = new Quack();
    }

    public function performQuack(){
        $this->quackBehavior->quack();
    }

}
