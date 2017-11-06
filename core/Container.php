<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/30/2017
 * Time: 8:31 PM
 */

class Container
{
    protected static $registry;

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (array_key_exists($key, static::$registry))
        {
            return static::$registry[$key];
        } else {
            throw new Exception("Key: {$key} is not in container.");
        }
    }

}