<?php
$host = 'localhost';
$db   = 'docucodeai';
$user = 'root';      // cambia si tu mysql usa otro usuario
$pass = '';          // cambia si tienes contraseña

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
