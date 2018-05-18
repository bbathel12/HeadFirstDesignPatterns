<?

namespace WeatherStation;

interface Subject{

    public function registerObserver():void;
    public function removeObserver():void;
    public function notifyObserver():void;

}
