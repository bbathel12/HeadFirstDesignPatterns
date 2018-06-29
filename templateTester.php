<?
namespace Template;
include './autoload.php';


echo "Make A Cup of Tea\n";
$tea = new Tea();
$tea->prepareRecipe();


echo "=====================================\n";
echo "Make A Cup of Tea\n";

$coffee = new Coffee();
$coffee->prepareRecipe();

echo "=====================================\n";
echo "Make A Cup of Coffee with hook\n";

$coffeeWHook = new CoffeeWithHook();
$coffeeWHook->prepareRecipe();

