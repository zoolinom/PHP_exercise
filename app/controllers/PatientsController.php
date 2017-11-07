<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/4/2017
 * Time: 4:04 PM
 */

namespace App\Controllers;

use App\Core\Container;

class PatientsController
{
    public function index()
    {
        $patients = Container::get('database')->selectAll('patient');
        return view('patients', $patients);
    }

    public function store()
    {
        Container::get('database')->insert('patient', [
            'pat_name' => $_POST['pat_name'],
            'pat_surname' => $_POST['pat_surname'],
            'JMBG' => $_POST['jmbg']
        ]);

        return redirect('patients');

    }
}