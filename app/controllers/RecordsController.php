<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 11/6/2017
 * Time: 8:12 PM
 */

namespace App\Controllers;

use App\Core\Container;

class RecordsController
{
    public function index($err = '')
    {
        $records['data'] = Container::get('database')->innerJoin('record', ['id', 'record_type'], 'patient', ['pat_name', 'pat_surname'], 'doctor', ['doc_name', 'doc_surname']);

        $patients = Container::get('database')->selectAll('patient');
        $doctors = Container::get('database')->selectAll('doctor');

        $records['patients'] = $patients;
        $records['doctors'] = $doctors;
        $records['err'] = $err;

        return view('records', $records);
    }

    public function store()
    {
        $val_data = [
            'rec_type' => $_POST['rec_type'],
            'id_pat' => $_POST['patient_id'],
            'id_doc' => $_POST['doctor_id']
        ];

        $err_code = validateData($val_data);
        if ($err_code != 'ok') {
            return $this->index($err_code);
        }

        Container::get('database')->insert('record', [
            'record_type' => $_POST['rec_type'],
            'id_pat' => intval($_POST['patient_id']),
            'id_doc' => intval($_POST['doctor_id'])
        ]);

        return redirect('records');

    }
}