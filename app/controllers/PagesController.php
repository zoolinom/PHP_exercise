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

    public static function patients()
    {
        $patients = Container::get('database')->selectAll('patient');
        return view('patient', $patients);
    }

    public static function doctors()
    {
        $doctors = Container::get('database')->selectAll('doctor');
        return view('doctors', $doctors);
    }

    public function record()
    {
        return view('record');
    }

}