<?

namespace Adapter;

use PrettyPrints;

class WildTurkey implements Turkey{

    use PrettyPrints;

    public function gobble():void{
        $this->pp("Gobble Gobble");
    }

    public function fly():void{
        $this->pp("I'm flying a short distance");
    }

}
