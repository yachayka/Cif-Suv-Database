<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$dbname = 'document_system';

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Ошибка подключения: " . $mysqli->connect_error);
}
?>