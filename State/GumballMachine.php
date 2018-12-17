<?

namespace State;

use Standard\PrettyPrints;

class GumballMachine{

    use PrettyPrints;

    const SOLD_OUT    = 0;
    const NO_QUARTER  = 1;
    const HAS_QUARTER = 2;
    const SOLD        = 3;


    protected $state  = self::SOLD_OUT;
    protected $count  = 0;


    public function __construct(int $count){
        $this->count = $count;
        if($count > 0){
            $this->state = self::NO_QUARTER;
        }
    }

    public function insertQuarter(){

        switch($this->state){
        case self::HAS_QUARTER:
            $this->pp("Cannot insert another quarter");
            break;
        case self::NO_QUARTER:
            $this->state = self::HAS_QUARTER;
            $this->pp("You have inserted a quarter");
            break;
        case self::SOLD_OUT:
            $this->pp("Sold Out");
            break;
        case self::SOLD:
            $this->pp("Please wait for gumball");
            break;
        }

    }

    public function ejectQuarter():void
    {
        switch($this->state){
        case self::HAS_QUARTER:
            $this->pp("Quarter returned");
            $this->state = self::NO_QUARTER;
            break;
        case self::NO_QUARTER:
            $this->pp("You haven't inserted a quarter");
            break;
        case self::SOLD:
            $this->pp("Sorry, you already turned the crank");
            break;
        case self::SOLD_OUT:
            $this->pp("You can't eject you haven't inserted a quarter yet");
            break;
        }

    }

    public function turnCrank():void
    {
        switch($this->state){
        case self::SOLD:
            $this->pp("Turning twice doesn't get you another gumball");
            break;
        case self::NO_QUARTER:
            $this->pp("You turned but there is no quarter");
            break;
        case self::SOLD_OUT:
            $this->pp("You turned but there are no gumballs");
            break;
        case self::HAS_QUARTER:
            $this->pp("You turned...");
            $this->state = self::SOLD;
            $this->dispense();
            break;
        }

    }

    public function dispense():void
    {
        switch ($this->state){
        case self::SOLD:
            $this->pp("A gumball comes rolling out of the slot");
            $this->count--;
            if ($this->count == 0){
                $this->pp("Oops, out of gumballs");
                $this->state = self::SOLD_OUT;
            }else{
                $this->state = self::NO_QUARTER;
            }
            break;

        case self::NO_QUARTER:
            $this->pp("You need to pay first");
            break;

        case self::SOLD_OUT:
            $this->pp("No gumball dispensed");
            break;

        case self::HAS_QUARTER:
            $this->pp("No gumball dispensed");
            break;

        }
    }


    public function __toString()
    {
        $string  = "State: ". $this->state. "\n";
        $string .= "Gumballs: ". $this->count."\n";
        return $string;
    }

}
