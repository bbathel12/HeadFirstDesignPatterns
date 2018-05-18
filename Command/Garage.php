<?
namespace Command;
use PrettyPrints;
class Garage{
    //up,down,stop,lightOn,lightOff

    use PrettyPrints;

    public function up(){
        $this->pp("Garage Door Going Up");    
    }

    public function Down(){
        $this->pp("Garage Door Going Down");    
    }

    public function Stop(){
        $this->pp("Garage Door Stopping");    
    }

    public function LightOn(){
        $this->pp("Garage Door Lights On");    
    }

    public function LightOff(){
        $this->pp("Garage Door Lights Off");    
    }
    
}
