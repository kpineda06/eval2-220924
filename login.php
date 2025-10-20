<?php
session_start();

// Credenciales definidas en el código (mínimo del ejercicio)
$usuario_valido = 'alumno';
$password_valido = '12345';

// Recibir datos
$user = $_POST['user'] ?? '';
$pass = $_POST['pass'] ?? '';

// Validar (validación simple)
if ($user === $usuario_valido && $pass === $password_valido) {
    // Login OK: crear variables de sesión
    $_SESSION['user'] = $user;
    // Redirigir al dashboard
    header('Location: dashboard.php');
    exit;
} else {
    // Redirigir al login con error
    header('Location: index.html?error=1');
    exit;
}
