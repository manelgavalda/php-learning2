<?php

//$query = new QueryBuilder();
//$query->pdo->prepare("INSERT INTO {$table} (FirstName) VALUES ($name)");
//$query->execute();
//return $query->fetchAll(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Task::class);

$name=$_POST['name'];

$tasks = $query->adduser('Persons',$name);

echo "Hola $name ";