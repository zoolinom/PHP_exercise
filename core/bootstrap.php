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

//function view($view_name, $data = [], $database = [])
//{
//    //extract($data);
//
//    return require "app/views/{$view_name}.view.php";
//}

function view($view_name, $data = [])
{
    //extract($data);

    return require "app/views/{$view_name}.view.php";
}

function redirect($path)
{
    header("Location: /{$path}");
}

function validateData($data)
{
    $keys = array_keys($data);

    foreach ($keys as $key)
    {
        if (strlen($data[$key]) == 0)
        {
            return "Error! String is empty";
        }

        if (strlen($data[$key]) > 20)
        {
            return "Error! Input can not be larger than 20 chars";
        }

        if ($key == 'jmbg')
        {
            if (strlen($data[$key]) != 13)
                return 'Error! JMBG must be 13 digits';

            if (!is_numeric($data[$key]))
            {
                return 'Error! JMBG must be all digits';
            }
        }
    }

    return 'ok';
}