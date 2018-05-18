<?

namespace Command;

class StereoOffCommand implements Command{
    public $stereo;

    public function __construct(Command $stereo){
        $this->stereo = $stereo;
    }

    public function execute():void{
        $this->stereo->off();
    }



}
