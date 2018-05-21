<?

namespace Command;

class StereoOffCommand implements Command{
    public $stereo;

    public function __construct(Stereo $stereo){
        $this->stereo = $stereo;
    }

    public function execute():void{
        $this->stereo->off();
    }

    public function undo():void{
        $this->stereo->on();
    }

}
