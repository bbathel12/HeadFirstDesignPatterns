<?php
namespace DuckSimulator;

spl_autoload_register(function ($class_name) {
    $file_name = str_replace("\\", DIRECTORY_SEPARATOR, $class_name);
    require_once $file_name . '.php';
});

echo "mini duck simulator\n";
$sim = new MiniDuckSimulator();
$sim->main();

echo "Model Duck\n";
$model = new ModelDuck();
$model->performFly();
$model->setFlyBehavior(new FlyRocketPowered());
$model->performFly();

echo "DuckCall\n";
$dc = new DuckCall();
$dc->performQuack();
