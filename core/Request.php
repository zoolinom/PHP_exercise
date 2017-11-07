<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/2/2017
 * Time: 8:48 PM
 */

namespace App\Core;


class Request
{
    public static function uri()
    {
        return trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');
    }

    public static function type()
    {
        return $_SERVER['REQUEST_METHOD'];
    }
}