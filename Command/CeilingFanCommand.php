<?
namespace Command;

class CeilingFanCommand{

    public function undo():void{
        switch($this->prevSpeed){
            case CeilingFan::HIGH:
                $this->fan->high();
                break;
            case CeilingFan::MEDIUM:
                $this->fan->high();
                break;
            case CeilingFan::LOW:
                $this->fan->high();
                break;
            case CeilingFan::OFF:
                $this->fan->high();
                break;
        }
    }
}

