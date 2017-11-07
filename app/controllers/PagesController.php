<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/1/2017
 * Time: 8:12 PM
 */

namespace App\Controllers;

use App\Core\Container;

class PagesController
{
    public function home()
    {
        return view('index');
    }


    public static function doctors()
    {
        $doctors = Container::get('database')->selectAll('doctor');
        return view('doctors', $doctors);
    }

    public function records()
    {
        $records = Container::get('database')->innerJoin('record', ['id', 'record_type'], 'patient', ['pat_name', 'pat_surname'], 'doctor', ['doc_name', 'doc_surname']);
        return view('records', $records);
    }

}