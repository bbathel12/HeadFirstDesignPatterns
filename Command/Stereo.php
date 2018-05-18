<?

namespace Command;

use PrettyPrints;

class Stereo{

    use PrettyPrints;
    //on,off,setCd,SetDvd,setRadio,setVolume
    
    public function on(){
        $this->pp("Stereo On");
    }

    public function off(){
        $this->pp("Stereo Off");
    }

    public function setCd(){
        $this->pp("Set CD");
    }

    public function setDvd(){
        $this->pp("Set DVD");
    }

    public function setRadio(){
        $this->pp("Set Radio");
    }

    public function setVolume(int $level){
        $this->pp("Set Volume to $level");
    }

}
