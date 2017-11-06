<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/28/2017
 * Time: 7:20 PM
 */

use App\Core\Container;
use App\Controllers\PagesController;

require 'vendor/autoload.php';

//require 'app/views/patient.view.php';

require 'core/bootstrap.php';

PagesController::patients();

PagesController::doctors();

//$res = Container::get('database')->selectAll('patient');

//var_dump($res);