<?php
$host = 'localhost';
$username = 'root';
$password = '';
$dbName = 'db_praktikum';

$conn = new mysqli($host, $username, $password, $dbName, '3306');

if ($conn->connect_error) {
    die('koneksi database gagal');
}