<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/2/2017
 * Time: 7:51 PM
 */

$router->get('', 'PagesController@home');

$router->get('patients', 'PatientsController@index');
$router->post('patients', 'PatientsController@store');

$router->get('doctors', 'DoctorsController@index');
$router->post('doctors', 'DoctorsController@store');

$router->get('records', 'RecordsController@index');
$router->post('records', 'RecordsController@store');