<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/30/2017
 * Time: 7:36 PM
 */

class DBConnection
{
    public static function make($config) {
        try {
            return new PDO(
                $config['connection'].';dbname='.$config['name'],
                $config['username'],
                $config['password'],
                $config['options']
            );
        } catch (PDOException $e) {
            die('Could not connect to database.</br>Error: ' . $e->getMessage());
        }
    }

}