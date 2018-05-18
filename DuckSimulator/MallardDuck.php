<?

namespace DuckSimulator;

class MallardDuck extends Duck{

    public function __construct(){
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display(){
        echo "I'm a real Mallard Duck\n";
    }

}
