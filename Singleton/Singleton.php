<?

namespace Singleton;

Class Singleton{

    static private $instance = null;

    private function __construct(){
    
    }

    public static function getInstance(){
        if( is_null(self::$instance)){
            self::$instance = new Singleton();
        }
        return self::$instance;
    }

    public function blah(){
        echo "blah";
    }
}
        
