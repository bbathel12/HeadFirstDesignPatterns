<?

namespace WeatherStation;

use SplSubject;
use SplObserver;

class WeatherData implements SplSubject{

    public function attach(SplObserver $observer):void{

    }

    public function detach(SplObserver $observer):void{

    }

    public function notify():void{

    }
}
