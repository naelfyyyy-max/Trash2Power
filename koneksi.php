<?php
function t2p_env($key, $default = null)
{
    $value = getenv($key);
    return $value !== false ? $value : $default;
}

$host = t2p_env('MYSQLHOST', 'localhost');
$port = (int) t2p_env('MYSQLPORT', 3306);
$user = t2p_env('MYSQLUSER', 'root');
$pass = t2p_env('MYSQLPASSWORD', '');
$db   = t2p_env('MYSQLDATABASE', 'trash2power_db');

$databaseUrl = t2p_env('MYSQL_URL', t2p_env('DATABASE_URL'));
if (!empty($databaseUrl)) {
    $parts = parse_url($databaseUrl);
    if ($parts !== false) {
        $host = $parts['host'] ?? $host;
        $port = isset($parts['port']) ? (int) $parts['port'] : $port;
        $user = $parts['user'] ?? $user;
        $pass = $parts['pass'] ?? $pass;
        $path = $parts['path'] ?? '';
        if (!empty($path)) {
            $db = ltrim($path, '/');
        }
    }
}

$conn = new mysqli($host, $user, $pass, $db, $port);
if ($conn->connect_error) {
    die("Koneksi ke database gagal: " . $conn->connect_error);
}

$conn->set_charset('utf8mb4');
$koneksi = $conn;

/*

File: koneksi.php

Description: This file establishes a connection to the MySQL database using the mysqli extension.
*/
