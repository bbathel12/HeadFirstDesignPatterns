<?

namespace Command;

use \PrettyPrints;

class CeilingFan{

    use PrettyPrints;

    public  const LOW    = 1;
    public  const MEDIUM = 2;
    public  const HIGH   = 3;
    public  const OFF    = 0; 

    public $location = "";
    public $speed;

    public function __construct(string $location){

        $this->location = $location;
        $this->speed = static::OFF;
    }

    public function high():void{
        $this->speed = static::HIGH;
    }

    public function medium():void{
        $this->speed = static::MEDIUM;
    }

    public function low():void{
        $this->speed = static::LOW;
    }

    public function off():void{
        $this->speed = static::OFF;
    }

    public function getSpeed():int{
        return $this->speed;
    }

}

