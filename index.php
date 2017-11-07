<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/28/2017
 * Time: 7:20 PM
 */

use App\Core\Router;
use App\Core\Request;

require 'vendor/autoload.php';

//require 'app/views/patient.view.php';

require 'core/bootstrap.php';

//var_dump($_SERVER);

Router::load('app/routes.php')->direct(Request::uri(), Request::type());

//$res = Container::get('database')->selectAll('patient');

//var_dump($res);