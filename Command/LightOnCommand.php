<?

namespace Command;

class LightOnCommand implements Command{

    protected $light;
    
    public function __construct(Light $light){
        $this->light = $light;    
    }

    public function execute():void{
        $this->light->on();
    }

}
