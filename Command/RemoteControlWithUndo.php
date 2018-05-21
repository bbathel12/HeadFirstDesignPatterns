<?
namespace Command;

use PrettyPrints;

class RemoteControlWithUndo{

    use PrettyPrints;

    public $onCommands;// array
    public $offCommands;// array
    public $undoComman;

    public function __construct(){
        $noCommand = new NoCommand();
        
        for( $slot = 0; $slot < 7; $slot++ ){
            $this->onCommands[$slot]  = $noCommand;
            $this->offCommands[$slot] = $noCommand;
        }

        $this->undoCommand = $noCommand;

    }

    public function setCommand(int $slot,Command $onCommand, Command $offCommand):void{
        $this->onCommands[$slot]  = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonPushed(int $slot):void{
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }
    
    public function offButtonPushed(int $slot):void{
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undo():void{
        $this->undoCommand->undo();
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
