<?
namespace Command;

class CeilingFanHighCommand extends CeilingFanCommand implements Command{

    public $fan;
    public $prevSpeed;

    public function __construct(CeilingFan $fan){
        $this->fan = $fan;
    }

    public function execute():void{
        $this->prevSpeed = $this->fan->getSpeed();
        $this->fan->high();
    }

    
}
