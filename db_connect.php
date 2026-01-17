<?php

$host = "localhost";
$dbname = "buoi2_php";
$username = "root";
$password = "";

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

    $conn = new PDO($dsn, $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Hệ thống đang bảo trì, vui lòng quay lại sau";
    exit;
}