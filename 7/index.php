<?php
/**
 * Created by PhpStorm.
 * User: Yuriy
 * Date: 11.05.2015
 * Time: 22:46
 */

use App\Controllers\Error;

//Front Controller
error_reporting(E_ALL);

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/config.php';


$timer = new PhpTimer();
$timer->start('page');

$ctrl = isset($_GET['ctrl']) ? ucfirst($_GET['ctrl']) : 'News';
$act = isset($_GET['act']) ? ucfirst($_GET['act']) : 'All';


$ctrlClassName = 'App\\Controllers\\' . $ctrl;
$method = 'action' . $act;



try {
    $controller = new $ctrlClassName;
    $controller->$method();
    $timer->stop('page');
    echo "<center>Page loaded in: " . $timer->getAll()['page']['average_human'] . "sec";
}
catch (Exception $e) {

    $error = new Error($e);
    $error->process();
}