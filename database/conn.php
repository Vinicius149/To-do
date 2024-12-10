<?php
$hostname = 'localhost';
$database = 'to_do';
$username = 'vini';
$password = 'password';

try {

    $dsn = new PDO("pgsql:host=$hostname;dbname=$database", $username, $password);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}

?>