<?

namespace Command;

require_once './autoload.php';

$remote      = new RemoteControlWithUndo();

$light       = new Light();
$garage      = new Garage();

$lightOn     = new LightOnCommand($light);
$lightOff    = new LightOffCommand($light);

$garageOpen  = new GarageOpenCommand($garage);
$garageClose = new GarageCloseCommand($garage);

$stereo      = new Stereo();
$stereoOn    = new StereoOnWithCdCommand($stereo);
$stereoOff   = new StereoOffCommand($stereo);


$remote->setCommand(0,$lightOn,$lightOff);
$remote->onButtonPushed(0);
$remote->undo();
$remote->offButtonPushed(0);
$remote->undo();

$remote->setCommand(1,$garageOpen,$garageClose);
$remote->onButtonPushed(1);
$remote->undo();
$remote->offButtonPushed(1);
$remote->undo();

$remote->setCommand(2,$stereoOn, $stereoOff);
$remote->onButtonPushed(2);
$remote->undo();
$remote->offButtonPushed(2);
$remote->undo();

echo $remote;
