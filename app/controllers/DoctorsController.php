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
    public function index($err = '')
    {
        $doctors = Container::get('database')->selectAll('doctor');
        $dat['data'] = $doctors;
        $dat['err'] = $err;
        return view('doctors', $dat);
    }

    public function store()
    {
        $val_data = [
            'doc_name' => $_POST['doc_name'],
            'doc_surname' => $_POST['doc_surname']
        ];

        $err_code = validateData($val_data);
        if ($err_code != 'ok') {
            return $this->index($err_code);
        }

        Container::get('database')->insert('doctor', [
            'doc_name' => $_POST['doc_name'],
            'doc_surname' => $_POST['doc_surname']
        ]);

        return redirect('doctors');

    }
}