<?
namespace Singleton;

class ChocolateBoiler{

    private static $instance;

    public $empty;
    public $boiled;

    private function __construct(){
     
        $this->empty = true;
        $this->boiled = false;

    }

    public static function getInstance(){
        if(is_null(self::$instance)){
            self::$instance = new ChocolateBoiler();
        }
        return self::$instance;
    }

    public function fill():void{
        $this->empty  = false;
        $this->boiled = false;
    }
}
