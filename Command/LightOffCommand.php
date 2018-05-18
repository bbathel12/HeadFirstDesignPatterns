<?

namespace Command;

class LightOffCommand implements Command{

    protected $light;
    
    public function __construct(Light $light){
        $this->light = $light;    
    }

    public function execute():void{
        $this->light->off();
    }

}
