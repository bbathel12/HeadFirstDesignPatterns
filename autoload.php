<?

spl_autoload_register(function ($class_name) {
    $file_name = str_replace("\\", DIRECTORY_SEPARATOR, $class_name);
    require_once $file_name . '.php';

});

