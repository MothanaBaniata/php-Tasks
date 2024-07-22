<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'task_manager_system';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    echo "connection succeed";
}else{
    die("Connection failed: " . $mysqli->connect_error);
}
?>