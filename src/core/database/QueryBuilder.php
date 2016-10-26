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
/*
 * <?php

namespace Manelgavalda\Myframework\core\database;
use PDO;
use PDOException;

class Connection
{
    public static function make($config,$message) {
        try
        {
            $pdo = new PDO(
                $config['dbtype'] . ':host='.
                $config['dbhost'] . ';dbname='.
                $config['dbname'],
                $config['username'],
                $config['password']);
            return $pdo;

        } catch (PDOException $e)
        {
            die($message['DatabaseErrorConnection'] . $e->getMessage());
        }
    }
}
 */