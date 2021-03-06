<?
namespace Command;

use PrettyPrints;

class RemoteControl{

    use PrettyPrints;

    public $onCommands;// array
    public $offCommands;// array

    public function __construct(){
        $noCommand = new NoCommand();
        
        for( $slot = 0; $slot < 7; $slot++ ){
            $this->onCommands[$slot]  = $noCommand;
            $this->offCommands[$slot] = $noCommand;
        }

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
        $toReturn = "\n";
        foreach($this->onCommands as $k => $command){
            $slot = $k + 1;
            $toReturn .= "[slot $slot] On: ". get_class($this->onCommands[$k]) . " Off: ". get_class($this->offCommands[$k])."\n"; 
        }
        return $toReturn;
    }
}
