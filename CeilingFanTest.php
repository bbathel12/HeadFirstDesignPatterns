<?

namespace Command;

require('./autoload.php');

$fan = new CeilingFan("blah");
$fan->high();
$fan->medium();
$fan->low();
echo $fan->getSpeed();
