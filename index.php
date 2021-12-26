<?php

$pdo = new \PDO("pgsql:host=postgres;dbname=postgres", 'postgres', 'mysecretpass');
var_dump($pdo->query('select * from test')->fetchAll());