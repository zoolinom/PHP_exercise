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

    public function innerJoin($table1, $t1, $table2, $t2, $table3, $t3)
    {
        //SELECT record.id, record.record_type, patient.name, patient.surname, doctor.name, doctor.surname FROM ((`record` INNER JOIN patient ON patient.id = id_pat) INNER JOIN doctor ON doctor.id = id_doc)
        $sql = "SELECT {$table1}.{$t1[0]}, {$table1}.{$t1[1]}, {$table2}.{$t2[0]}, {$table2}.{$t2[1]}, {$table3}.{$t3[0]}, {$table3}.{$t3[1]} FROM (({$table1} INNER JOIN {$table2} ON {$table2}.id = id_pat) INNER JOIN {$table3} ON {$table3}.id = id_doc)";
        //echo "<h2>$sql<h2>";

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

    public function insert($table, $parameters)
    {
        //App::get('database')->insert('users', [
        //'name' => $_POST['name']

        $sql = sprintf('insert into %s (%s) values (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        echo "<h2>$sql</h2>";

        try
        {
            $statement = $this->pdo->prepare($sql);
            //bind values
            $statement->execute($parameters);
        }
        catch (Exception $e)
        {
            die('Whoops. Something went wrong');
        }
    }

}