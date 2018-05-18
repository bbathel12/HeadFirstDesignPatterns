<?

namespace Command;

use PrettyPrints;

class Light{

    use PrettyPrints;

    public function on(){
        $this->pp("Light on");
    }

    public function off(){
        $this->pp("Light Off");
    }

}
