<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/2/2017
 * Time: 7:51 PM
 */

$router->get('', 'PagesController@home');
$router->get('patients', 'PagesController@patients');
$router->get('doctors', 'PagesController@doctors');
$router->get('records', 'PagesController@records');
