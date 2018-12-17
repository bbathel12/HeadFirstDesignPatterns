<?

namespace State;

require_once './autoload.php';

$gumballMachine = new GumballMachine(5);

echo "\n";
echo $gumballMachine ."\n";
echo "\nSet One\n";

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo "\n";
echo $gumballMachine ."\n";
echo "\nSet Two\n";

$gumballMachine->insertQuarter();
$gumballMachine->ejectQuarter();
$gumballMachine->turnCrank();

echo "\n";
echo $gumballMachine ."\n";
echo "\nSet Three\n";

$gumballMachine->insertQuarter();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

echo "\n";
echo $gumballMachine ."\n";


