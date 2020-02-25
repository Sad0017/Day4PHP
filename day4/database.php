<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=day3;';
$username = 'root';
$password = '';

try
{
    $db = new PDO(
        $dsn,
        $username,
        $password
    );
}

catch (Exception $e) {
    die('<strong>Error with the data base connection :</strong> ' . $e->getMessage());
}