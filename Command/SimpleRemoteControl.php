<?

namespace Command;

class SimpleRemoteControl{

    public $slot;

    public function __construct(){
    
    }

    public function setCommand(Command $command){

        $this->slot = $command;
    
    }

    public function buttonWasPressed():void{
            $this->slot->execute();
    }



}

