<?php
declare(strict_types=1);

$root = dirname(__DIR__);

$root_anti_slashLess=str_replace('\\','/',$root);

// var_dump($root_anti_slashLess);

define('CONFI_PATH','config').DIRECTORY_SEPARATOR;
define('FILE_PATH','files').DIRECTORY_SEPARATOR;
define('VIEW_FILE','views').DIRECTORY_SEPARATOR;

// $test=VIEW_FILE.'/template.php';
// var_dump($test);


?>