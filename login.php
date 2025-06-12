<?php
session_start();
if (isset($_SESSION['usuario'])) {
    header("Location: historial.php");
    exit;
}
$error = $_GET['error'] ?? '';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar sesión - DocuCodeAI</title>
    <style>
        *, *::before, *::after {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            background: white;
            padding: 40px 30px;
            border-radius: 15px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 350px;
            text-align: center;
            animation: fadeIn 0.8s ease;
        }

        .card h2 {
            color: #333;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .card input[type="text"],
        .card input[type="password"] {
            width: 100%;
            padding: 12px 15px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
            appearance: none;
        }

        .card input[type="text"]:focus,
        .card input[type="password"]:focus {
            border-color: #4e54c8;
            outline: none;
            box-shadow: 0 0 5px rgba(78, 84, 200, 0.5);
        }

        .card button {
            width: 100%;
            padding: 12px;
            background: #4e54c8;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .card button:hover {
            background: #3c41b8;
        }

        .card p {
            margin-top: 15px;
            font-size: 0.9rem;
        }

        .card a {
            color: #4e54c8;
            text-decoration: none;
        }

        .card a:hover {
            text-decoration: underline;
        }

        .error {
            color: #e74c3c;
            font-size: 0.9em;
            margin-top: 10px;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>🔐 DocuCodeAI - Iniciar sesión</h2>
        <form action="login_validar.php" method="post">
            <input type="text" name="usuario" placeholder="Usuario" required autocomplete="username">
            <input type="password" name="clave" placeholder="Contraseña" required autocomplete="current-password">
            <button type="submit">Ingresar</button>
        </form>
        <?php if ($error): ?>
            <div class="error"><?= htmlspecialchars($error) ?></div>
        <?php endif; ?>
        <p>¿No tienes cuenta? <a href="register.php">📝 Registrarse</a></p>
    </div>
</body>
</html>
