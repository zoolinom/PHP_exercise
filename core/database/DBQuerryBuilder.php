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

}