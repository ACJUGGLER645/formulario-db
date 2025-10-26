<?php
// index.php
// Muestra el formulario y un mensaje de éxito si llega ?exito=true
?>
<!DOCTYPE html>
<html lang="es-ES">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario con Selector de Tema</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="tema-claro">
  <div class="container">
    <!-- Botones para cambiar tema -->
    <div class="color-buttons" role="toolbar" aria-label="Selector de tema">
      <button type="button" data-tema="tema-claro" title="Claro" aria-label="Tema claro"></button>
      <button type="button" data-tema="tema-oscuro" title="Oscuro" aria-label="Tema oscuro"></button>
      <button type="button" data-tema="tema-morado" title="Morado-Rosa" aria-label="Tema morado"></button>
    </div>

    <h1>Formulario Básico</h1>

    <!-- Mensaje de éxito -->
    <?php if (isset($_GET['exito']) && $_GET['exito'] === 'true'): ?>
      <p class="mensaje-exito">✅ ¡Datos enviados correctamente!</p>
    <?php endif; ?>

    <form id="formulario" action="interconexion.php" method="POST" novalidate>
      <div class="content">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Bartolomeo" id="nombre" maxlength="21" required>

        <label for="apellido">Apellido</label>
        <input type="text" name="apellido" placeholder="Anacleto" id="apellido" maxlength="21" required>

        <label for="celular">Celular</label>
        <input type="tel" name="celular" placeholder="+57" id="celular" maxlength="10" pattern="\d{10}" required>

        <label for="email">Correo electrónico</label>
        <input type="email" name="email" placeholder="bartolomeoanacleto@email.com" id="email" required>

        <button type="submit" id="enviar">Enviar datos</button>
      </div>
    </form>

    <p class="contador">Cambios de tema: <span id="contador">0</span></p>
  </div>

  <script src="script.js"></script>
</body>
</html>
