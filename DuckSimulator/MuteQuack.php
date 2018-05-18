<?

namespace DuckSimulator;

class MuteQuack implements QuackBehavior{

    public function Quack(){
        echo "<< silence >>\n";
    }
}
