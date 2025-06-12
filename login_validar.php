<?php
session_start();
require_once 'conexion.php';

$user = $_POST['usuario'] ?? '';
$pass = $_POST['clave'] ?? '';

$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE username = ?");
$stmt->execute([$user]);
$usuario = $stmt->fetch(PDO::FETCH_ASSOC);

if ($usuario && hash('sha256', $pass) === $usuario['password']) {
    $_SESSION['usuario'] = $user;
    header("Location: historial.php");
    exit;
} else {
    header("Location: login.php?error=Credenciales inválidas");
    exit;
}
