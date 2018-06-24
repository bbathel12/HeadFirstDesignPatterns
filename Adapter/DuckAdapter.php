<?

namespace Adapter;

class DuckAdapter implements Turkey{

    private $duck;

    public function __construct(Duck $duck){
        $this->duck = $duck;
    }

    public function gobble():void{
        $this->duck->quack();
    }

    public function fly():void{
        $this->duck->fly();
    }
}
