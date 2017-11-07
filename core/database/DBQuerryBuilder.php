<?php
/**
 * Created by IntelliJ IDEA.
 * User: Zoki
 * Date: 10/30/2017
 * Time: 8:15 PM
 */

class DBQuerryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        $ret = $statement->fetchAll(PDO::FETCH_OBJ);
        return $ret;
    }

    public function innerJoin($table1, $table2, $table3)
    {
        //SELECT record.id, record.record_type, patient.name, patient.surname, doctor.name, doctor.surname FROM ((`record` INNER JOIN patient ON patient.id = id_pat) INNER JOIN doctor ON doctor.id = id_doc)
        $sql = "SELECT {$table1}.id, {$table1}.record_type, {$table2}.pat_name, {$table2}.pat_surname, {$table3}.doc_name, {$table3}.doc_surname FROM (({$table1} INNER JOIN {$table2} ON {$table2}.id = id_pat) INNER JOIN {$table3} ON {$table3}.id = id_doc)";
        //echo $sql;

        try
        {
            $statement = $this->pdo->prepare($sql);
            $statement->execute();
            $ret = $statement->fetchAll(PDO::FETCH_OBJ);
            return $ret;
        }
        catch (Exception $e)
        {
            die('Whoops! Something went wrong');
        }

    }

}