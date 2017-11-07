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
    public function index()
    {
        $records = Container::get('database')->innerJoin('record', ['id', 'record_type'], 'patient', ['pat_name', 'pat_surname'], 'doctor', ['doc_name', 'doc_surname']);

        $patients = Container::get('database')->selectAll('patient');
        $doctors = Container::get('database')->selectAll('doctor');

        $database_data = [
            'patients' => $patients,
            'doctors' => $doctors
        ];

        return view('records', $records, $database_data);
    }

    public function store()
    {
        Container::get('database')->insert('record', [
            'record_type' => $_POST['rec_type'],
            'id_pat' => intval($_POST['patient_id']),
            'id_doc' => intval($_POST['doctor_id'])
        ]);

        return redirect('records');

    }
}