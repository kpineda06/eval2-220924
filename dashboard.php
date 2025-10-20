<?php
session_start();
if (!isset($_SESSION['user'])) {
    // No está logueado -> ir al login
    header('Location: index.html');
    exit;
}
?>
<!doctype html>
<html><body>
  <h2>Panel principal</h2>
  <p>Bienvenido, <?php echo htmlspecialchars($_SESSION['user']); ?></p>
  <a href="logout.php">Cerrar sesión</a>
</body></html>
