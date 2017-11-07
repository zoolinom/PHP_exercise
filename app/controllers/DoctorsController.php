<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/6/2017
 * Time: 7:41 PM
 */

namespace App\Controllers;

use App\Core\Container;

class DoctorsController
{
    public function index()
    {
        $doctors = Container::get('database')->selectAll('doctor');
        return view('doctors', $doctors);
    }

    public function store()
    {
        Container::get('database')->insert('doctor', [
            'doc_name' => $_POST['doc_name'],
            'doc_surname' => $_POST['doc_surname']
        ]);

        return redirect('doctors');

    }
}