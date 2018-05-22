<?
namespace Command;

class MacroCommand implements Command{

    public $commands;

    public function __construct(Command  ...$commands){
        foreach($commands as $command){
            $this->commands[] = $command;
        }
    }

    public function execute():void{
        foreach($this->commands as $command){
            $command->execute();
        }
    }

    public function undo():void{
        foreach($this->commands as $command){
            $command->undo();
        }
    }
}
