<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/30/2017
 * Time: 8:36 PM
 */

Container::bind('config', require 'config.php');

Container::bind('database', new DBQuerryBuilder(DBConnection::make(Container::get('config')['database'])));
