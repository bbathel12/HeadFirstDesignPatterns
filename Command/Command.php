<?

namespace Command;

interface Command{

    public function execute():void;
    public function undo():void;

}
