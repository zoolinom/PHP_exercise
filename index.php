<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/28/2017
 * Time: 7:20 PM
 */

use App\Core\Container;

require 'vendor/autoload.php';

//require 'app/views/patient.view.php';

require 'core/bootstrap.php';

$temp = 'Test';
view('patient', ['temp' => $temp]);

$res = Container::get('database')->selectAll('patient');

var_dump($res);