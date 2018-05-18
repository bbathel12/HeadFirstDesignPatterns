<?
namespace Command;

class GarageOpenCommand implements Command{

    protected $garage;
    
    public function __construct(Garage $garage){
        $this->garage = $garage;
    }

    public function execute():void{
        $this->garage->up();
    }
 
}
