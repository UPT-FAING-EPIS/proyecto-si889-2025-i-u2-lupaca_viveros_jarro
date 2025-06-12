<?php
session_start();
require_once 'conexion.php';

$user = $_POST['usuario'] ?? '';
$pass = $_POST['clave'] ?? '';

// Validar que no exista
$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ?");
$stmt->execute([$user]);
$existe = $stmt->fetch(PDO::FETCH_ASSOC);

if ($existe) {
    header("Location: register.php?error=El usuario ya existe");
    exit;
}

// Insertar nuevo usuario
$stmt = $pdo->prepare("INSERT INTO usuarios (username, password) VALUES (?, ?)");
$stmt->execute([$user, hash('sha256', $pass)]);

// Auto login
$_SESSION['usuario'] = $user;
header("Location: historial.php");
exit;
