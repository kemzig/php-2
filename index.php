<?php

require  __DIR__.'/autoload.php';


$data = \App\Models\Article::findAll();

$host = 'localhost';
$db   = 'php2';
$user = 'root';
$pass = '';
$charset = 'utf8';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $opt);

$data = $pdo->query('SELECT * FROM users')->fetchAll(PDO::FETCH_CLASS);


var_dump($data);
