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
    public function index($err = '')
    {
        $patients = Container::get('database')->selectAll('patient');
        $dat['data'] = $patients;
        $dat['err'] = $err;
        return view('patients', $dat);
    }

    public function store()
    {
        $val_data = [
            'pat_name' => $_POST['pat_name'],
            'pat_surname' => $_POST['pat_surname'],
            'jmbg' => $_POST['jmbg']
        ];

        $err_code = validateData($val_data);
        if ($err_code != 'ok') {
            return $this->index($err_code);
        }

        Container::get('database')->insert('patient', [
            'pat_name' => $_POST['pat_name'],
            'pat_surname' => $_POST['pat_surname'],
            'JMBG' => $_POST['jmbg']
        ]);

        return redirect('patients');

    }
}