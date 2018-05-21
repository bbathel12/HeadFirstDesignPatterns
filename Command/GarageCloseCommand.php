<?
namespace Command;

class GarageCloseCommand implements Command{

    protected $garage;
    
    public function __construct(Garage $garage){
        $this->garage = $garage;
    }

    public function execute():void{
        $this->garage->down();
    }
 
    public function undo():void{
        $this->garage->up();
    }
}
