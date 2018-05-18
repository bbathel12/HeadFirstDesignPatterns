<?
namespace Command;

use PrettyPrints;

class RemoteControl{

    use PrettyPrints;

    public $onCommands;// array
    public $offCommands;// array

    public function __construct(){

    }

    public function setCommand(int $slot,Command $onCommand, Command $offCommand):void{
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonPushed(int $slot):void{
        $this->onCommands[$slot]->execute();
    }
    
    public function offButtonPushed(int $slot):void{
        $this->offCommands[$slot]->execute();
    }

    public function __toString(){
        $toReturn = "";
        foreach($this->onCommands as $k => $command){
            $toReturn .= "On: ". get_class($this->onCommands[$k]) . " Off: ". get_class($this->offCommands[$k])."\n"; 
        }
        return $toReturn;
    }
}
