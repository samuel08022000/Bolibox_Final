<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Registro - BOLIBOX</title>
  
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
  <link rel="stylesheet" href="css/style.css">
  
</head>
<body>

  <header>
    <div class="nav-inner">
      <a href="index.php" class="logo">
        <i class="bi bi-globe-americas"></i> BOLI<span>BOX</span>
      </a>
      <a href="index.php" class="btn-volver">
        <i class="bi bi-arrow-left"></i> Volver al inicio
      </a>
    </div>
  </header>

  <div class="registro-container">
    <div class="registro-card">
      <h2>Crea tu cuenta</h2>
      <p>Regístrate para empezar a importar tus paquetes con nosotros.</p>
      
      <form action="#" method="POST">
        <div class="form-group">
          <label>Nombre Completo</label>
          <input type="text" placeholder="Ej. Juan Pérez" required>
        </div>
        
        <div class="row-doble">
          <div class="form-group">
            <label>Carnet de Identidad</label>
            <input type="text" placeholder="Ej. 1234567" required>
          </div>
          <div class="form-group">
            <label>Teléfono / Celular</label>
            <input type="tel" placeholder="Ej. 77712345" required>
          </div>
        </div>

        <div class="form-group">
          <label>Correo Electrónico</label>
          <input type="email" placeholder="tucorreo@ejemplo.com" required>
        </div>

        <div class="form-group">
          <label>Contraseña</label>
          <input type="password" placeholder="Crea una contraseña segura" required>
        </div>

        <button type="submit" class="btn-submit">Registrarme</button>
      </form>

      <div class="registro-footer">
        ¿Ya tienes una cuenta? <a href="index.php">Inicia sesión aquí</a>
      </div>
    </div>
  </div>

</body>
</html>