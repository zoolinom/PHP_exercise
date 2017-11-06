<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/30/2017
 * Time: 8:36 PM
 */

use App\Core\Container;

Container::bind('config', require 'config.php');

Container::bind('database', new DBQuerryBuilder(DBConnection::make(Container::get('config')['database'])));

function view($view_name, $data = [])
{
    //extract($data);

    return require "app/views/{$view_name}.view.php";
}