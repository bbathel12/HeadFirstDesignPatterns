<?

namespace Singleton;
require('./autoload.php');

$s = Singleton::getInstance();

$s->blah();

//try{
//    $cb1 = new ChocolateBoiler();
//}catch(Error | Throwable | Exception $e){
//    echo "Constructor is Private\n";
//}

$cb1 = ChocolateBoiler::getInstance();
$cb2 = ChocolateBoiler::getInstance();

print_r($cb1);
print_r($cb2);

$cb1->fill();

print_r($cb1);
print_r($cb2);
