<?php //include ("conex_db_user.php");?> 
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Bootstrap + Google Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <style>
    body {
      background-color: #fff3e0; /* fondo suave */
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(135deg, #fff3e0, #ffe0b2);
    }

    .login-container {
      max-width: 400px;
      margin: 80px auto;
      padding: 30px;
      background-color: #ffffff;
      border-radius: 12px;
      box-shadow: 0 4px 20px rgba(0,0,0,0.1);
      border-top: 6px solid #f57c00;
    }

    .login-container h1 {
      text-align: center;
      margin-bottom: 25px;
      font-size: 1.8rem;
      color: #f57c00;
      font-weight: 700;
    }

    label {
      font-weight: 500;
      color: #333;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      background-color: #f57c00;
      border: none;
      font-weight: bold;
    }

    .btn-primary:hover {
      background-color: #e65100;
    }
  </style>
</head>
<body>
  
  <div class="login-container">
    <h1>Sistema de Login</h1>
    <form action="control.php" method="POST">
      <div class="mb-3">
        <label for="usuario" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required>
      </div>
      <div class="mb-3">
        <label for="contrasena" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese su contraseña" required>
      </div>
      <div class="d-grid">
        <button type="submit" class="btn btn-primary">Acceder</button>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>