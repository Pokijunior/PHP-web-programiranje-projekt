<?php
$dotenv = parse_ini_file(__DIR__ . '/.env');

$db_host = $dotenv['DB_HOST'];
$db_user = $dotenv['DB_USER'];
$db_pass = $dotenv['DB_PASS'];
$db_name = $dotenv['DB_NAME'];

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
