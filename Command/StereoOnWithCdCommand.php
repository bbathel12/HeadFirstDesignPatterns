<?

namespace Command;

class StereoOnWithCdCommand implements Command{
    
    public $stereo;

    public function __construct(Stereo $stereo){
        $this->stereo = $stereo;
    }

    public function execute():void{
        $this->stereo->on();
        $this->stereo->setCd();
        $this->stereo->setVolume(11);
    }
}
