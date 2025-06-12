<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

require_once 'conexion.php';

$usuario_nombre = $_SESSION['usuario'];
$stmt = $pdo->prepare("SELECT id FROM usuarios WHERE username = ?");
$stmt->execute([$usuario_nombre]);
$usuario_id = $stmt->fetchColumn();

$stmt = $pdo->prepare("SELECT * FROM historial_analisis WHERE usuario_id = ? ORDER BY fecha DESC");
$stmt->execute([$usuario_id]);
$registros = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Historial de Análisis</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            padding: 2em;
            margin: 0;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            padding: 30px 40px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.8s ease;
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        .buttons {
            text-align: center;
            margin-bottom: 20px;
        }

        .buttons a {
            display: inline-block;
            margin: 0 10px;
            padding: 10px 15px;
            border-radius: 8px;
            color: white;
            text-decoration: none;
            transition: background 0.3s ease;
            font-weight: bold;
        }

        .buttons a.new {
            background: #4e54c8;
        }

        .buttons a.new:hover {
            background: #3c41b8;
        }

        .buttons a.logout {
            background: #e74c3c;
        }

        .buttons a.logout:hover {
            background: #c0392b;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            font-size: 0.95rem;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 12px;
            text-align: left;
        }

        th {
            background: #4e54c8;
            color: white;
        }

        tr:nth-child(even) {
            background: #f9f9f9;
        }

        .no-data {
            text-align: center;
            font-style: italic;
            color: #666;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>

<div class="container">
    <h2>📂 Historial de Análisis de <?= htmlspecialchars($usuario_nombre) ?></h2>

    <div class="buttons">
        <a href="index.php" class="new">📁 Nuevo Análisis</a>
        <a href="logout.php" class="logout">Cerrar sesión</a>
    </div>

    <?php if (count($registros) === 0): ?>
        <p class="no-data">No hay análisis registrados aún.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Archivo</th>
                    <th>Resumen</th>
                    <th>Calidad</th>
                    <th>Duplicados</th>
                    <th>Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($registros as $r): ?>
                    <tr>
                        <td><?= htmlspecialchars($r['archivo']) ?></td>
                        <td><?= nl2br(htmlspecialchars(substr($r['resumen'], 0, 100))) ?>...</td>
                        <td><?= nl2br(htmlspecialchars(substr($r['calidad'], 0, 100))) ?>...</td>
                        <td>
                            <?= $r['duplicados'] === '[]' ? 'Ninguno' : 'Sí' ?>
                        </td>
                        <td><?= $r['fecha'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>

</body>
</html>
