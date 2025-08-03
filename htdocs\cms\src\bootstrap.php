<?php
// src/bootstrap.php

// Autoload classes (PSR-4 / simple)
spl_autoload_register(function($class){
    $file = __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($file)) require $file;
});

// Load config & PDO
$config = require __DIR__ . '/../config.php';
$dbCfg = $config['db'];
$dsn   = "mysql:host={$dbCfg['host']};dbname={$dbCfg['dbname']};charset={$dbCfg['charset']}";
$pdo   = new PDO($dsn, $dbCfg['user'], $dbCfg['pass'], [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
]);

// Simple router: parse path & method
$uri    = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];
