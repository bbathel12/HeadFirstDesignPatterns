<?
namespace Adapter;

require('./autoload.php');

$mallardDuck   = new MallardDuck();
$turkey        = new WildTurkey();
$turkeyAdapter = new TurkeyAdapter($turkey);

echo "Turkey Says...\n";
$turkey->gobble();
$turkey->fly();

echo "The duck says...\n";
$mallardDuck->quack();
$mallardDuck->fly();


echo "The turkey adapter says...\n";
$turkeyAdapter->quack();
$turkeyAdapter->fly();


echo "The duck adapter says...\n";
$duckAdapter = new DuckAdapter($mallardDuck);
$duckAdapter->gobble();
$duckAdapter->fly();

