<?php

namespace Manelgavalda\myframework\core\database;

use PDO;
use Manelgavalda\Myframework\core\models\Task;


class QueryBuilder {


    public $pdo;

    /**
    * QueryBuilder constructor.
    * @param $pdo
    */

    public function __construct(PDO $pdo)
    {
    $this->pdo = $pdo;
    }


    function all($table)
    {
        $query = $this->pdo->prepare("SELECT * FROM {$table}");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }

    function adduser($name,$table)
    {
        $query = $this->pdo->prepare("INSERT INTO {$table} (FirstName) VALUES ('{$name}')");
        $query->execute();

        return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);
    }
}